<?php

namespace App\Http\Controllers;

use App\Models\Musyrif;
use App\Models\User;
use Illuminate\Http\Request;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Phar;

class musyrifController extends Controller
{
    public function index()
    {
        $data = DB::table('users')->paginate(5);

        return view('admin.musyrif.dashboard', [
            'data' => $data,
            'detailAsrama' => 'admin.asrama.detailAsrama'
        ]);
    }

    public function store(Request $request)
    {

        $id = IdGenerator::generate(['table' => 'users', 'length' => 6, 'prefix' => date('y')]);

        // $this->validate(request(), [
        //     //put fields to be validated here
        // ]);

        $user = new User();
        $user->id = $id;
        $user->nama = $request['nama'];
        $user->tanggal_lahir = $request['tanggal_lahir'];
        $user->tempat_tinggal = $request['tempat_tinggal'];
        $user->no_telp = $request['no_telp'];
        $user->email = $request['email'];
        $user->password = Hash::make($request['password']);
        // add other fields
        $user->save();

        return redirect('/musyrif');
    }

    public function detailMusyrif()
    {
        return view('admin.musyrif.detailMusyrif', [
            'detailAsrama' => 'admin.musyrif.detailMusyrif'
        ]);
    }

    public function createMusyrif()
    {
        return view('admin.musyrif.createMusyrif', [
            'detailAsrama' => 'admin.musyrif.createMusyrif'
        ]);
    }
}
