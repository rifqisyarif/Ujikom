<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function createAsrama()
    {
        return view('admin.createAsrama', [
            'dashboard' => 'admin.dashboard'
        ]);
    }

    public function detailAsrama()
    {
        return view('admin.detailAsrama');
    }
}
