<?php

namespace App\Controllers;

use App\Models\BookingModel;

class Dashboard extends BaseController
{
    protected $bookingModel;

    public function __construct()
    {
        $this->bookingModel = new BookingModel();
    }

    public function index()
    {
        $model = $this->bookingModel;

        // Setiap query harus independen — jangan chain dari hasil query sebelumnya
        $data['recent_bookings'] = $model->orderBy('created_at', 'DESC')->findAll(5);

        // Reset builder sebelum setiap count agar tidak terkontaminasi query sebelumnya
        $data['total']           = $model->countAll();
        $data['total_pending']   = $model->where('status', 'pending')->countAllResults();
        $data['total_confirmed'] = $model->where('status', 'confirmed')->countAllResults();
        $data['total_cancelled'] = $model->where('status', 'cancelled')->countAllResults();

        return view('dashboard/index', $data);
    }
}
