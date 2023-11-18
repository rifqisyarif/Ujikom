<?php

namespace App\Http\Controllers;

use App\Models\Asrama;
use App\Models\CutiMusyrif;
use App\Models\User;
use App\Notifications\AdminNewCutiNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class jadwalCutiController extends Controller
{
    public function index()
    {
        $data = DB::table('cuti_musyrifs')->paginate(5);

        return view('admin.jadwalCuti.jadwalCuti', [
            'data' => $data,
            'users' => DB::table('users')->paginate(15)
        ]);
    }

    public function tambahCuti(Request $request)
    {
        // $request->validate([
        //     'asrama' => ['required'],
        //     'musyrif' => ['required']
        // ]);

        // CutiMusyrif::create([
        //     'musyrif' => $request->musyrif,
        //     'awal' => $request->awal,
        //     'akhir' => $request->akhir,
        // ]);

        return redirect('/cutiMusyrif');
    }

    public function createCuti()
    {
        $asrama = Asrama::all();
        return view('admin.jadwalCuti.createCuti', compact('asrama'));
    }

    public function detailCuti()
    {
        return view('admin.jadwalCuti.detailCuti');
    }
}
