<?php

namespace App\Http\Controllers;

use App\Models\Mail;
use Illuminate\Http\Request;

class SuratController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Mail::all();
        return view('base.surat', [
            'data' => $data,
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return 'ini untuk tambah data';
        $today = date('Y-m-d');
        return view('surat.create', [
            'today' => $today,
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
        $data = $request->validate([
            'name' => 'required',
            'tanggal' => 'required',
            'foto' => 'image|nullable',
        ]);
        
        if($request->file('foto')){
            $data['foto'] = $request->file('foto')->store('asset/scanSurat', 'public');
        }
        Mail::create($data);

        return redirect()->route('surat.index')->with([
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
        $item = Mail::find($id);
        return view('surat.print', [
            'item' => $item,
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
        // return 'ini untuk edit data';
        $item = Mail::find($id);
        $today = date('Y-m-d');
        return view('surat.edit', [
            'item' => $item,
            'today' => $today,
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
        $item = Mail::find($id);
        $data = $request->validate([
            'name' => 'required',
            'tanggal' => 'required',
            'foto' => 'image|nullable',
        ]);
        
        if($request->file('foto')){
            $data['foto'] = $request->file('foto')->store('asset/scanSurat', 'public');
        }

        $item->update($data);
        return redirect()->route('surat.index')->with([
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
        // dd('ini hapus');
        $item = Mail::find($id);
        $item->delete();
        return back()->with('success', 'Berhasil Dihapus');
    }
}
