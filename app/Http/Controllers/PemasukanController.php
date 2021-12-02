<?php

namespace App\Http\Controllers;

use App\Models\Pemasukan;
use App\Models\Donatur;
use Illuminate\Http\Request;

class PemasukanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pemasukan = Pemasukan::with('Donatur')->get();
        return view('pemasukan.index', compact('pemasukan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $donatur = Donatur::all();
        return view('pemasukan.create', compact('donatur'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'donatur_id' => 'required',
            'donasi' => 'required',
        ]);
        $pemasukan = new Pemasukan();
        $pemasukan->donatur_id = $request->donatur_id;
        $pemasukan->jumlah_donasi = $request->donasi;
        $pemasukan->save();
        return redirect()->route('pemasukan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pemasukan  $pemasukan
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pemasukan = Pemasukan::findOrFail($id);
        return view('pemasukan.show', compact('pemasukan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pemasukan  $pemasukan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pemasukan = Pemasukan::findOrFail($id);
        $donatur = Donatur::all();
        return view('pemasukan.edit', compact('pemasukan', 'donatur'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pemasukan  $pemasukan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'donatur_id' => 'required',
            'donasi' => 'required',
        ]);
        $pemasukan = Pemasukan::findOrFail($id);
        $pemasukan->donatur_id = $request->donatur_id;
        $pemasukan->jumlah_donasi = $request->donasi;
        $pemasukan->save();
        return redirect()->route('pemasukan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pemasukan  $pemasukan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pemasukan = Pemasukan::findOrFail($id)->delete();
        return redirect()->route('pemasukan.index');
    }
}
