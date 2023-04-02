<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class jadwalCutiController extends Controller
{
    public function index()
    {
        return view('admin.jadwalCuti.jadwalCuti', [
            'users' => DB::table('users')->paginate(15)
        ]);
    }

    public function createCuti()
    {
        return view('admin.jadwalCuti.createCuti');
    }

    public function detailCuti()
    {
        return view('admin.jadwalCuti.detailCuti');
    }
}
