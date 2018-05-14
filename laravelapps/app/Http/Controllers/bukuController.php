<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\buku;
use Validator;

class bukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
      $listBuku = buku::all();
        return view ('webpp.admin.indexadmin',compact('listBuku'));
    }

    public function index2()
    {
      $listBuku = buku::all();
        return view ('webpp.admin.databuku',compact('listBuku'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('webpp.admin.tambahbuku');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();

        $validator = Validator::make($input,[
          'kodebuku'=>'required|string|unique:buku,kodebuku',
          'judulbuku'=>'required|string',
          'namapengarang'=>'required|string',
          'namapenerbit'=>'required|string',
          'tahunpenerbit'=>'required|string',
          'kategori'=>'required|string',
        ]);

        if($validator->fails())
        {
          return redirect('webpp/create')->withInput()->withErrors($validator);
        }

        $buku = buku::create($input);
        $buku->save();

        return redirect('Databuku');

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
        $data = buku::where('id',$id)->firstOrFail();
        return view('webpp.main_page.editmhs',compact('data'));
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
        $data = buku::where('id',$id)->firstOrFail();
        $data->delete();

        return redirect('webpp');
    }
}
