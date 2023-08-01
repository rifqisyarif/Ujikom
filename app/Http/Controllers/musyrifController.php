<?php

namespace App\Http\Controllers;

use App\Models\Musyrif;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class MusyrifController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = User::all();
        return view('admin.musyrif.index', [
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'tanggal_lahir' => $request['tanggal_lahir'],
            'tempat_tinggal' => $request['tempat_tinggal'],
            'no_telp' => $request['no_telp'],
            'password' => Hash::make($request['password']),
        ]);

        return redirect('/musyrif');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Musyrif  $musyrif
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $musyrif = User::find($id);

        return view('admin.musyrif.detailMusyrif', compact('musyrif'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Musyrif  $musyrif
     * @return \Illuminate\Http\Response
     */
    public function edit(Musyrif $musyrif)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Musyrif  $musyrif
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $devices = User::find($id);
        $devices->update([
            'name' => $request->name,
            'email' => $request->email,
            'tanggal_lahir' => $request->tanggal_lahir,
            'tempat_tinggal' => $request->tempat_tinggal,
            'no_telp' => $request->no_telp
        ]);

        return redirect('/musyrif');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Musyrif  $musyrif
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $musyrif = User::where('id', $id);

        if ($musyrif != null) {
            $musyrif->delete();
            return redirect('musyrif');
        }

        return redirect('/musyrif');
    }

    public function createMusyrif()
    {
        return view('admin.musyrif.createMusyrif', [
            'index' => 'admin.asrama.index'
        ]);
    }
}
