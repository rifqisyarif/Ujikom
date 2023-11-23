<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Asrama;
use App\Models\Santri;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class AsramaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $asrama = DB::table('asramas')->get();
        $santri = DB::table('santris')->get();

        return view('admin.asrama.dashboard', [
            'asrama' => $asrama,
            'santri' => $santri,
            'dashboard' => 'admin.asrama.dashboard',
            'musyrif' => 'admin.musyrif.dashboard',
            'jadwalCuti' => 'admin.asrama.jadwalCuti',
            'detailAsrama' => 'admin.asrama.jadwalCuti',
            'createSantri' => 'admin.asrama.createSantri',
        ]);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id = IdGenerator::generate(['table' => 'asramas', 'length' => 6, 'prefix' => date('y')]);

        //if the asrama is already exist in the database
        if (Asrama::where('asrama', $request)->exists()) {
            //return 
        }

        $request->validate([
            'asrama' => 'required|unique:asramas',
            'musyrif' => 'required|unique:asramas',
        ]);

        $data = new Asrama();
        $data->id = $id;
        $data->asrama = $request['asrama'];
        $data->musyrif = $request['musyrif'];
        // add other fields
        $data->save();

        return redirect('/asrama');
    }

    public function storeSantri(Request $request)
    {
        $id = IdGenerator::generate(['table' => 'santris', 'length' => 6, 'prefix' => date('y')]);

        // $data = new Santri();
        // $data->id = $id;
        // $data->nama = $request['nama'];
        // $data->asrama = $request['asrama'];
        // $data->tempat_lahir = $request['tempat_lahir'];
        // $data->tanggal_lahir = $request['tanggal_lahir'];
        // $data->alamat = $request['alamat'];
        // $data->no_telp = $request['no_telp'];
        // $data->save();

        return redirect('/asrama');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //  
        $asrama = DB::table('asramas')->where('id', $id)->first();
        $santri = DB::table('santris')->get();

        return view('admin.asrama.detailAsrama', [
            'asrama' => $asrama,
            'santri' => $santri,
            'dashboard' => 'admin.asrama.dashboard',
            'musyrif' => 'admin.musyrif.dashboard',
            'jadwalCuti' => 'admin.asrama.jadwalCuti',
            'detailAsrama' => 'admin.asrama.jadwalCuti',
            'createSantri' => 'admin.asrama.createSantri',
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function tambahAsrama()
    {
        $musyrif = DB::table('users')->get();
        return view('admin.asrama.createAsrama', [
            'musyrif' => $musyrif,
        ]);
    }

    public function searchSantri(Request $request, $noAsrama)
    {
        if ($request->ajax()) {
            $output = '';
            $query = $request->get('query');
            if ($query != '') {
                $data = DB::table('santris')
                    ->where('nama', 'like', '%' . $query . '%')
                    ->orWhere('asrama', 'like', '%' . $query . '%')
                    ->get();
            } else {
                //validate the santri that has the same asrama with the asrama that is selected
                $data = DB::table('santris')
                    ->where('asrama', $noAsrama)
                    ->get();
            }

            $total_row = $data->count();
            if ($total_row > 0) {
                $output .= `test`;
                foreach ($data as $row) {
                    # code...
                    $output .= '
                    <div class="mb-4 col-xl-4 nopadding card-wrapper ">
                        <div class="card mt-4  p-0" style="width: 18rem;">
                            <div class="card-body">
                                <div class="detail1 d-flex align-items-center">
                                    <img class="mr-3" src="' . asset('img/santri.svg') . '" alt="">
                                    <div class="text-detail">
                                        <h6 class="card-title mb-0">' . $row->nama . '</h6>
                                        <p class="card-text">' . $row->asrama . '</p>
                                    </div>
                                </div>
                                <hr style="border-top: 2px solid rgba(0, 0, 0, .5);" class="sidebar-divider">
                                <div class="detail2 d-flex justify-content-between">
                                    <div>
                                        <h6 style="font-size: .9rem" class="card-title mb-0 d-flex ">Hari piket: <p
                                                class="ml-2">' . $row->hari_piket . '</p>
                                        </h6>
                                        <h6 style="font-size: .9rem" class="card-title mb-0 d-flex ">Kelas: <p
                                                class="ml-2">
                                                12 RPL Karir</p>
                                        </h6>
                                    </div>
                                    <div class="div">
                                        <a style="font-size: .8rem" href="#" class="btn btn-primary btn-sm">Sudah
                                            Datang</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    ';
                }
            } else {
                $output .= `
                <P>Data tidak ditemukan</P>
                `;
            }
            $data = array(
                'list_data' => $output,
                'total_data' => $total_row,
            );
            echo json_encode($data);
        }
    }
}
