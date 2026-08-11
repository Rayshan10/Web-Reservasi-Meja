<?php

namespace App\Controllers;

use App\Models\BookingModel;
use CodeIgniter\Controller;

class Booking extends BaseController
{
    protected $bookingModel;

    public function __construct()
    {
        $this->bookingModel = new BookingModel();
    }

    /**
     * Menampilkan halaman utama booking
     */
    public function booking()
    {
        return view('booking/booking');
    }

    /**
     * Menyimpan data booking ke database
     */
    public function store()
    {
        // Validasi input
        $validationRules = [
            'nama' => 'required',
            'telepon' => 'required|numeric',
            'email' => 'required|valid_email',
            'tanggal' => 'required|valid_date',
            'waktu' => 'required',
            'jumlah_tamu' => 'required',
            'meja_id' => 'required|numeric',
            'catatan' => 'permit_empty'
        ];

        if (!$this->validate($validationRules)) {
            return redirect()->back()
                ->withInput()
                ->with('errors', $this->validator->getErrors());
        }

        // Validasi tanggal tidak boleh masa lalu
        $tanggal = $this->request->getPost('tanggal');
        if ($tanggal < date('Y-m-d')) {
            return redirect()->back()
                ->withInput()
                ->with('errors', ['tanggal' => 'Tanggal reservasi tidak boleh di masa lalu.']);
        }

        // Ambil data dari form
        $data = [
            'nama' => $this->request->getPost('nama'),
            'telepon' => $this->request->getPost('telepon'),
            'email' => $this->request->getPost('email'),
            'tanggal' => $this->request->getPost('tanggal'),
            'waktu' => $this->request->getPost('waktu'),
            'jumlah_tamu' => $this->request->getPost('jumlah_tamu'),
            'meja_id' => $this->request->getPost('meja_id'),
            'catatan' => $this->request->getPost('catatan'),
            'status' => 'pending'
        ];

        // Cek ketersediaan meja
        if (!$this->bookingModel->checkTableAvailability($data['meja_id'], $data['tanggal'], $data['waktu'])) {
            return redirect()->back()
                ->withInput()
                ->with('error', 'Maaf, meja yang Anda pilih sudah dibooking pada waktu tersebut.');
        }

        // Simpan ke database
        try {
            $this->bookingModel->save($data);
            $bookingId = $this->bookingModel->insertID();

            // Kirim email konfirmasi (opsional, jika ingin diaktifkan)
            // $this->sendConfirmationEmail($data['email'], $bookingId);

            return redirect()->to(site_url("booking/success/$bookingId"))
                ->with('success', 'Booking berhasil dibuat!');
        } catch (\Exception $e) {
            return redirect()->back()
                ->withInput()
                ->with('error', 'Terjadi kesalahan saat menyimpan booking: ' . $e->getMessage());
        }
    }

    /**
     * Menampilkan halaman sukses booking
     */
    public function success($id = null)
    {
        if ($id === null) {
            return redirect()->to('booking');
        }

        $booking = $this->bookingModel->find($id);

        if (!$booking) {
            return redirect()->to('booking')
                ->with('error', 'Data booking tidak ditemukan.');
        }

        return view('booking/success', ['booking' => $booking]);
    }

    /**
     * Membatalkan booking — hanya pemilik (email di session) yang boleh cancel
     */
    public function cancel($id = null)
    {
        if ($id === null) {
            return redirect()->to('booking/my-bookings')
                ->with('error', 'ID booking tidak valid.');
        }

        $booking = $this->bookingModel->find($id);

        if (!$booking) {
            return redirect()->to('booking/my-bookings')
                ->with('error', 'Data booking tidak ditemukan.');
        }

        // Ambil email dari session yang disimpan saat user cek my-bookings
        $emailSession = session()->get('booking_email');

        if (empty($emailSession) || $booking['email'] !== $emailSession) {
            return redirect()->to('booking/my-bookings')
                ->with('error', 'Akses ditolak. Kamu tidak berhak membatalkan booking ini.');
        }

        if ($booking['status'] === 'cancelled') {
            return redirect()->to('booking/my-bookings')
                ->with('error', 'Booking ini sudah dibatalkan sebelumnya.');
        }

        $this->bookingModel->update($id, ['status' => 'cancelled']);

        return redirect()->to('booking/my-bookings')
            ->with('success', 'Booking berhasil dibatalkan.');
    }

    /**
     * Melihat booking berdasarkan email
     */
    public function myBookings()
    {
        $email = $this->request->getPost('email');

        if (empty($email)) {
            // Coba ambil dari session kalau user refresh halaman
            $email = session()->get('booking_email');
            if (empty($email)) {
                return view('booking/check_bookings');
            }
        }

        // Simpan email ke session supaya cancel bisa divalidasi
        session()->set('booking_email', $email);

        $bookings = $this->bookingModel->getBookingsByEmail($email);

        return view('booking/my_bookings', [
            'title'    => 'Daftar Booking Saya',
            'bookings' => $bookings,
            'email'    => $email,
        ]);
    }

    /**
     * Mengirim email konfirmasi (fungsi dummy)
     */
    private function sendConfirmationEmail($email, $bookingId)
    {
        log_message('info', 'Email konfirmasi terkirim ke: ' . $email . ' untuk booking ID: ' . $bookingId);
        return true;
    }

    public function list()
    {
        $data['bookings'] = $this->bookingModel->findAll();
        return view('dashboard/booking_list', $data);
    }

    public function edit($id)
    {
        $data['booking'] = $this->bookingModel->find($id);
        if (empty($data['booking'])) {
            return redirect()->to('booking/list')->with('error', 'Booking not found');
        }
        return view('dashboard/booking_edit', $data);
    }

    public function delete($id)
    {
        try {
            // Cek apakah data exist
            $booking = $this->bookingModel->find($id);
            
            if (!$booking) {
                return redirect()->to('booking/list')
                    ->with('error', 'Data reservasi tidak ditemukan');
            }

            // Hapus data
            if ($this->bookingModel->delete($id)) {
                return redirect()->to('booking/list')
                    ->with('success', 'Data reservasi berhasil dihapus');
            } else {
                return redirect()->to('booking/list')
                    ->with('error', 'Gagal menghapus data reservasi');
            }
        } catch (\Exception $e) {
            return redirect()->to('booking/list')
                ->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    public function update($id = null)
    {
        if ($id === null) {
            return redirect()->to('booking/list')->with('error', 'ID tidak valid');
        }

        $data = [
            'nama' => $this->request->getPost('nama'),
            'email' => $this->request->getPost('email'),
            'telepon' => $this->request->getPost('telepon'),
            'tanggal' => $this->request->getPost('tanggal'),
            'waktu' => $this->request->getPost('waktu'),
            'jumlah_tamu' => $this->request->getPost('jumlah_tamu'),
            'meja_id' => $this->request->getPost('meja_id'),
            'status' => $this->request->getPost('status'),
            'catatan' => $this->request->getPost('catatan')
        ];

        try {
            $this->bookingModel->update($id, $data);
            return redirect()->to('booking/list')
                ->with('success', 'Reservasi berhasil diupdate');
        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', 'Terjadi kesalahan saat mengupdate data');
        }
    }

    /**
     * Update status cepat langsung dari tabel (konfirmasi / batalkan)
     */
    public function quickUpdate($id = null)
    {
        if ($id === null) {
            return redirect()->to('booking/list')->with('error', 'ID tidak valid');
        }

        $status = $this->request->getPost('status');
        $allowed = ['confirmed', 'cancelled', 'pending'];

        if (!in_array($status, $allowed)) {
            return redirect()->to('booking/list')->with('error', 'Status tidak valid');
        }

        $booking = $this->bookingModel->find($id);
        if (!$booking) {
            return redirect()->to('booking/list')->with('error', 'Data reservasi tidak ditemukan');
        }

        $this->bookingModel->update($id, ['status' => $status]);

        $label = match($status) {
            'confirmed' => 'dikonfirmasi',
            'cancelled'  => 'dibatalkan',
            'pending'    => 'dikembalikan ke pending',
        };

        return redirect()->to('booking/list')
            ->with('success', "Reservasi atas nama {$booking['nama']} berhasil {$label}.");
    }
}
