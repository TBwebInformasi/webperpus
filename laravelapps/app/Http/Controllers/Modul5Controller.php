<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Modul5;

class Modul5Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_mhs = Modul5::all();
        return view ('Modul5.main_page.index',compact('data_mhs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('Modul5.main_page.tambahMhs');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      //         $validator = Validator::make($request->all(), [
      //   'Nim_mahasiswa' => 'required',
      //   'gmbar_mahasiswa' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
      // ]);
        $datatambah = new Modul5();
        $datatambah->id = $request->id;
        $datatambah->Nama_mahasiswa = $request->Nama_mahasiswa;
        $datatambah->Nim_mahasiswa = $request->Nim_mahasiswa;
        $datatambah->Jk_mahasiswa = $request->Jk_mahasiswa;
        $datatambah->Nohp_mahasiswa = $request->Nohp_mahasiswa;
        $file = $request->file('gmbar_mahasiswa');
        $filename=$file->getClientOriginalName();
        $request->file('gmbar_mahasiswa')->move("uploadgambar/",$filename);
        $datatambah->gmbar_mahasiswa=$filename;
        // if ($validator->passes()) {
        //     $input = $request->all();
        //     $input['gmbar_mahasiswa'] = time().'.'.$request->gmbar_mahasiswa->getClientOriginalExtension();
        //     $request->gmbar_mahasiswa->move(public_path('uploadgambar'),$input['gmbar_mahasiswa']);
        //     Upload_file::create($input);
        // }
         // $datatambah->gmbar_mahasiswa = $request->input('gmbar_mahasiswa');

        $datatambah->save();
        //echo 'data berhasil di tambah';
         return redirect('modul5')->with('success','data sudah di hapus');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Modul5::where('id',$id)->firstOrFail();
        return view ('Modul5.main_page.preview',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Modul5::where('id',$id)->firstOrFail();
        return view ('Modul5.main_page.editmhs',compact('data'));
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
        $data = Modul5::where('id',$id)->firstOrFail();
        $data->Nama_mahasiswa = $request->Nama_mahasiswa;
        $data->Nim_mahasiswa = $request->Nim_mahasiswa;
        $data->Jk_mahasiswa = $request->Jk_mahasiswa;
        $data->Nohp_mahasiswa = $request->Nohp_mahasiswa;
        $data->gmbar_mahasiswa = $request->gmbar_mahasiswa;
        $data->save();
        return redirect('modul5');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Modul5::find($id);
        $data->delete();
        return redirect('modul5')->with('success','data sudah di hapus');

    }
}
