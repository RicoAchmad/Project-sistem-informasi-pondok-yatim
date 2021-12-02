<?php

namespace App\Http\Controllers;

use App\Models\Anak;
use Illuminate\Http\Request;

class AnakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $anak = Anak::all();
        return view('anak-asuh.index', compact('anak'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('anak-asuh.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nama' => 'required',
            'jk' => 'required',
            'usia' => 'required',
        ]);
        $anak = new Anak();
        $anak->nama = $request->nama;
        $anak->jenis_kelamin = $request->jk;
        $anak->usia = $request->usia;
        $anak->save();
        return redirect()->route('anak-asuh.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Anak  $anak
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $anak = Anak::findOrFail($id);
        return view('anak-asuh.show', compact('anak'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Anak  $anak
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $anak = Anak::findOrFail($id);
        return view('anak-asuh.edit', compact('anak'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Anak  $anak
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'nama' => 'required',
            'jk' => 'required',
            'usia' => 'required',
        
        ]);
        $anak = Anak::findOrFail($id);
        $anak->nama = $request->nama;
        $anak->jenis_kelamin = $request->jk;
        $anak->usia = $request->usia;
        $anak->save();
        return redirect()->route('anak-asuh.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Anak  $anak
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $anak = Anak::findOrFail($id)->delete();
        return redirect()->route('anak.index');
    }
}