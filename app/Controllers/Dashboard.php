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
        $data['bookings'] = $this->bookingModel->findAll();
        return view('dashboard/index', $data);
    }
}
