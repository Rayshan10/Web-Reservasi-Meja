<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class AdminFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        $user = session()->get('user');

        // Belum login
        if (!$user) {
            return redirect()->to('auth/login')
                ->with('error', 'Silakan login terlebih dahulu.');
        }

        // Sudah login tapi bukan admin
        if ($user['role'] !== 'admin') {
            return redirect()->to('home')
                ->with('error', 'Akses ditolak. Halaman ini hanya untuk admin.');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do nothing
    }
}
