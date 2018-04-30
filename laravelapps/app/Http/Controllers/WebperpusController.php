<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\buku;


class WebperpusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_perpus = buku::get();
        return view('webtb.pages_admin.index',compact('data_perpus'));
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('webtb.pages_admin.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $buku = new buku();
        $buku->kode_buku= $request->kode_buku;
        $buku->judul_buku = $request->judul_buku;
        $buku->namapenerbit_buku = $request->namapenerbit_buku;
        $buku->tahunpenerbit_buku = $request->tahunpenerbit_buku;
        $buku->halaman_buku = $request->halaman_buku;
        $buku->kategori = $request->kategori;
        $buku->status = $request->status;
        $buku->tanggalpinjam_buku = $request->tanggalpinjam_buku;
        $buku->tanggalkembali_buku = $request->tanggalkembali_buku;
        $buku->save();
        echo 'data berhasil di tambah';
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
}
