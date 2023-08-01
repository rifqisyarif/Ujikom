<?php

namespace App\Http\Controllers;

use App\Models\Asrama;
use App\User;
use Illuminate\Http\Request;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Support\Facades\DB;

class dashboardController extends Controller
{
    protected $user;

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data = DB::table('asramas')->paginate(5);

        return view('admin.asrama.dashboard', [
            'data' => $data,
            'dashboard' => 'admin.asrama.dashboard',
            'musyrif' => 'admin.musyrif.dashboard',
            'jadwalCuti' => 'admin.asrama.jadwalCuti',
            'detailAsrama' => 'admin.asrama.jadwalCuti',
            'createSantri' => 'admin.asrama.createSantri',
        ]);
    }

    public function store(Request $request)
    {
        $id = IdGenerator::generate(['table' => 'asramas', 'length' => 6, 'prefix' => date('y')]);

        // $this->validate(request(), [
        //     //put fields to be validated here
        // ]);

        $data = new Asrama();
        $data->id = $id;
        $data->asrama = $request['asrama'];
        $data->musyrif = $request['musyrif'];
        // add other fields
        $data->save();

        return redirect('/dashboard');
    }


    public function createAsrama()
    {
        return view('admin.asrama.createAsrama');
    }

    public function detailAsrama()
    {
        return view('admin.asrama.detailAsrama');
    }

    public function createSantri()
    {
        return view('admin.asrama.createSantri');
    }
}
