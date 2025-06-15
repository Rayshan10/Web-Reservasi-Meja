<?php

namespace App\Models;

use CodeIgniter\Model;

class BookingModel extends Model
{
    protected $table      = 'bookings';
    protected $primaryKey = 'id';
    
    protected $useAutoIncrement = true;
    protected $returnType     = 'array';
    protected $useSoftDeletes = false;
    
    protected $allowedFields = [
        'nama', 
        'telepon', 
        'email', 
        'tanggal', 
        'waktu', 
        'jumlah_tamu', 
        'meja_id', 
        'catatan', 
        'status'
    ];
    
    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
    
    // Validation
    protected $validationRules = [
        'nama'        => 'required|min_length[3]|max_length[100]',
        'telepon'     => 'required|min_length[6]|max_length[15]',
        'email'       => 'required|valid_email',
        'tanggal'     => 'required|valid_date',
        'waktu'       => 'required',
        'jumlah_tamu' => 'required',
        'meja_id'     => 'required|numeric',
    ];
    
    protected $validationMessages = [
        'nama' => [
            'required'    => 'Nama tidak boleh kosong',
            'min_length'  => 'Nama minimal 3 karakter',
        ],
        'telepon' => [
            'required'    => 'Nomor telepon tidak boleh kosong',
        ],
        'email' => [
            'required'    => 'Email tidak boleh kosong',
            'valid_email' => 'Format email tidak valid',
        ],
        'tanggal' => [
            'required'    => 'Tanggal tidak boleh kosong',
            'valid_date'  => 'Format tanggal tidak valid',
        ],
        'waktu' => [
            'required'    => 'Waktu tidak boleh kosong',
        ],
        'jumlah_tamu' => [
            'required'    => 'Jumlah tamu tidak boleh kosong',
        ],
        'meja_id' => [
            'required'    => 'Meja harus dipilih',
            'numeric'     => 'ID meja harus berupa angka',
        ],
    ];
    
    /**
     * Memeriksa ketersediaan meja pada tanggal dan waktu tertentu
     */
    public function checkTableAvailability($mejaId, $tanggal, $waktu)
    {
        return $this->where('meja_id', $mejaId)
                    ->where('tanggal', $tanggal)
                    ->where('waktu', $waktu)
                    ->where('status !=', 'cancelled')
                    ->countAllResults() == 0;
    }
    
    /**
     * Mendapatkan semua booking aktif
     */
    public function getAllActiveBookings()
    {
        return $this->where('status', 'confirmed')
                    ->where('tanggal >=', date('Y-m-d'))
                    ->orderBy('tanggal', 'ASC')
                    ->orderBy('waktu', 'ASC')
                    ->findAll();
    }
    
    /**
     * Mendapatkan booking berdasarkan email
     */
    public function getBookingsByEmail($email)
    {
        return $this->where('email', $email)
                    ->orderBy('created_at', 'DESC')
                    ->findAll();
    }
}