<?php

namespace App\Http\Controllers;

use App\Models\Ancaman;
use Illuminate\Http\Request;

class AncamanController extends Controller
{
    //
    public function index(Request $request)
    {
        $ancaman = Ancaman::all();
        return view('admin.ancaman.index', compact('ancaman', 'request'));
    }

    public function create()
    {
        return view('admin.ancaman.create');
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'jenis_ancaman' => 'required|max:50|unique:ancamans',
            'tingkat_ancaman' => 'required|max:1',

        ]);

        Ancaman::create($validate);

        return redirect('/ancaman');
    }

    public function edit($id)
    {
        $anc = Ancaman::find($id);
        return view('admin.ancaman.edit', compact('anc'));
    }

    public function update(Request $request, $id)
    {
        $validate = $request->validate([
            'jenis_ancaman' => 'required|max:50',
            'tingkat_ancaman' => 'required|max:1',

        ]);
        $ancaman = Ancaman::FindOrFail($id);
        $ancaman->update($validate);

        return redirect('/ancaman');
    }

    public function delete($id)
    {
        $ancaman = Ancaman::find($id);
        $ancaman->delete();
        return redirect('/ancaman');
    }
}
