<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KeteranganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return ('halooo');
        $data = Activity::all();
        return view('base.keterangan',[
            'data'=>$data,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return 'ini tambah data ';
        $today = date('Y-m-d');
        return view('keterangan.create',[
            'today'=>$today,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request -> validate([
            'name'=>'required',
            'tanggal'=>'required',
            'deskripsi'=>'required',
            'foto'=>'image|nullable',
        ]);
        if($request->file('foto')){
            $data['foto'] = $request->file('foto')->store('asset/scanKeterangan', 'public');
        }
        Activity::create($data);

        return redirect()->route('keterangan.index')->with([
            'success' => 'Data Berhasil Ditambahkan',
        ]);
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
        // return 'ini untuk edit';
        $item = Activity::find($id);
        $today = date ('Y-m-d');
        return view('keterangan.edit',[
            'item'=>$item,
            'today'=>$today,
        ]);
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
        $item = Activity::find($id);
        $this->validate($request,[
            'name'=>'required',
            'tanggal'=>'required',
            'deskripsi'=>'required',
            'foto'=>'image|nullable',
        ]);
        if($request->file('foto')){
            $data['foto'] = $request->file('foto')->store('asset/scanKeterangan', 'public');
        }

        $item->update($data);
        return redirect()->route('keterangan.index')->with([
            'success' => 'Data Berhasil Ditambahkan',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    $item = Activity::find($id);
    $item->delete();
    return back()->with('success','Berhasil Dihapus');
    }
}
