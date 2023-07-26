<?php

namespace App\Http\Controllers;

use App\Models\Habitat;
use Illuminate\Http\Request;

class HabitatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $habitat = Habitat::all();
        return view('admin.habitat.index', compact('habitat', 'request'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.habitat.create');
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
            'nama_habitat' => 'required|max:50|unique:habitats',
            'deskripsi_habitat' => 'required|max:1000',

        ]);

        Habitat::create($validate);

        return redirect('/habitat');
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
        $hbt = Habitat::find($id);
        return view('admin.habitat.edit', compact('hbt'));
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
            'nama_habitat' => 'required|max:50',
            'deskripsi_habitat' => 'required|max:1000',

        ]);
        $habitat = Habitat::FindOrFail($id);
        $habitat->update($validate);

        return redirect('/habitat');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $habitat = Habitat::find($id);
        $habitat->delete();
        return redirect('/habitat');
    }
}
