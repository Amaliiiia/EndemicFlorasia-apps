<?php

namespace App\Http\Controllers;

use App\Models\Keanekaragaman;
use App\Models\Tanaman;
use Illuminate\Http\Request;

class KeanekaragamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $keanekaragaman = Keanekaragaman::all();
        return view('admin.keanekaragaman.index', compact('keanekaragaman', 'request'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tanaman = Tanaman::all();
        return view('admin.keanekaragaman.create', compact('tanaman'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'tanaman_id' => 'required',
            'keanekaragaman' => 'required|max:50|unique:keanekaragamans',
            'tahun' => 'required|numeric|min:1900|max:2099',

        ]);

        Keanekaragaman::create($validate);

        return redirect('/keanekaragaman');
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
        $tanaman = Tanaman::all();
        $keanekaragaman = Keanekaragaman::find($id);
        return view('admin.keanekaragaman.edit', compact('keanekaragaman', 'tanaman'));
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
        $validate = $request->validate([
            'tanaman_id' => 'required|max:50',
            'keanekaragaman' => 'required|max:50',
            'tahun' => 'required|max:255',

        ]);
        $keanekaragaman = Keanekaragaman::FindOrFail($id);
        $keanekaragaman->update($validate);

        return redirect('/keanekaragaman');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $keanekaragaman = Keanekaragaman::find($id);
        $keanekaragaman->delete();
        return redirect('/keanekaragaman');
    }
}
