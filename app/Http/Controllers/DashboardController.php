<?php

namespace App\Http\Controllers;

use App\Models\User;

class DashboardController extends Controller
{
    public function admin()
    {
        // Mengambil semua data user
        $users = User::all();

        // Mengirim data users ke view admin
        return view('dashboard.admin', compact('users'));
    }

    public function user()
    {
        return view('dashboard.user');
    }
}
