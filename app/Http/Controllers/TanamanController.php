<?php

namespace App\Http\Controllers;

use App\Models\Tanaman;
use Illuminate\Http\Request;
use App\Models\Habitat;
use App\Models\Ancaman;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;


class TanamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $tanaman = Tanaman::all();
        return view('admin.tanaman.index', compact('tanaman', 'request'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $habitat = Habitat::all();
        $ancaman = Ancaman::all();
        return view('admin.tanaman.create', compact('habitat', 'ancaman', 'request'));
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
            'nama_tanaman' => 'required|max:255|unique:tanamans',
            'kingdom' => 'required|max:50',
            'subkingdom' => 'required|max:50',
            'divisi' => 'required|max:50',
            'subdivisi' => 'required|max:50',
            'kelas' => 'required|max:50',
            'subkelas' => 'required|max:50',
            'ordo' => 'required|max:50',
            'famili' => 'required|max:50',
            'genus' => 'required|max:50',
            'spesies' => 'required|max:50',
            'daerah_endemis' => 'required|max:500',
            'habitat_id' => 'required|max:50',
            'ancaman_id' => 'required|max:50',
            'karateristik' => 'required|max:3000',
            'deskripsi' => 'required|max:3000',
            'gambar' => 'required|image|file|max:5120',
        ]);

        $validate['gambar'] = $request->file('gambar')->store('tanaman-image');
        Tanaman::create($validate);

        return redirect('/tanaman');
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
        $habitat = Habitat::all();
        $ancaman = Ancaman::all();
        $tnm = Tanaman::find($id);
        return view('admin.tanaman.edit', compact('tnm', 'habitat', 'ancaman'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     * @param App\Models\Tanaman;
     */
    public function update(Request $request, $id)
    {

        $validate = $request->validate([
            'nama_tanaman' => 'required|max:255',
            'kingdom' => 'required|max:50',
            'subkingdom' => 'required|max:50',
            'divisi' => 'required|max:50',
            'subdivisi' => 'required|max:50',
            'kelas' => 'required|max:50',
            'subkelas' => 'required|max:50',
            'ordo' => 'required|max:50',
            'famili' => 'required|max:50',
            'genus' => 'required|max:50',
            'spesies' => 'required|max:50',
            'daerah_endemis' => 'required|max:500',
            'habitat_id' => 'required|max:50',
            'ancaman_id' => 'required|max:50',
            'karateristik' => 'required|max:3000',
            'deskripsi' => 'required|max:3000',
        ]);


        if (empty($request->file('gambar'))) {
            $tanaman = Tanaman::FindOrFail($id);
            $tanaman->update([
                'nama_tanaman' => $request->nama_tanaman,
                'kingdom' => $request->kingdom,
                'subkingdom' => $request->subkingdom,
                'divisi' => $request->divisi,
                'subdivisi' => $request->subdivisi,
                'kelas' => $request->kelas,
                'subkelas' => $request->subkelas,
                'ordo' => $request->ordo,
                'famili' => $request->famili,
                'genus' => $request->genus,
                'spesies' => $request->spesies,
                'daerah_endemis' => $request->daerah_endemis,
                'habitat_id' => $request->habitat_id,
                'ancaman_id' => $request->ancaman_id,
                'karateristik' => $request->karateristik,
                'deskripsi' => $request->deskripsi,

            ]);
        } else {
            $tanaman = Tanaman::FindOrFail($id);
            Storage::delete($tanaman->gambar);
            $tanaman->update([
                'nama_tanaman' => $request->nama_tanaman,
                'kingdom' => $request->kingdom,
                'subkingdom' => $request->subkingdom,
                'divisi' => $request->divisi,
                'subdivisi' => $request->subdivisi,
                'kelas' => $request->kelas,
                'subkelas' => $request->subkelas,
                'ordo' => $request->ordo,
                'famili' => $request->famili,
                'genus' => $request->genus,
                'spesies' => $request->spesies,
                'daerah_endemis' => $request->daerah_endemis,
                'habitat_id' => $request->habitat_id,
                'ancaman_id' => $request->ancaman_id,
                'karateristik' => $request->karateristik,
                'deskripsi' => $request->deskripsi,
                'gambar' => $request->file('gambar')->store('tanaman-image')
            ]);
        }

        return redirect('/tanaman');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $tanaman = Tanaman::find($id);
        Storage::delete([
            $tanaman->gambar

        ]);

        $tanaman->delete();
        return redirect('/tanaman');
    }

    public function jelajah(Request $request)
    {
        if ($request->search) {
            $tanaman = Tanaman::where('nama_tanaman', 'LIKE', '%' . $request->search . '%')
                ->orWhere('deskripsi', 'LIKE', '%' . $request->search . '%')
                ->orWhere('daerah_endemis', 'LIKE', '%' . $request->search . '%')
                ->orderBy('id', 'desc')
                ->paginate(20);
        } else {
            $tanaman = Tanaman::paginate(20);
        }
        return view('frontend.tanaman', compact('tanaman', 'request'));
    }

    public function detail($id, $habitatid, $ancamanid)
    {
        $tanaman = Tanaman::find($id);
        $habitat = Habitat::find($habitatid);
        $ancaman = Ancaman::find($ancamanid);
        return view('frontend.tanamandetail', compact('tanaman', 'habitat', 'ancaman'));
    }
    public function searchTanaman(Request $request)
    {
        if ($request->search) {
            $searchTanaman = Tanaman::where('nama_tanaman', 'LIKE', '%' . $request->search . '%')
                ->orWhere('deskripsi', 'LIKE', '%' . $request->search . '%')
                ->orWhere('daerah_endemis', 'LIKE', '%' . $request->search . '%')
                ->orderBy('id', 'desc')
                ->paginate(20);

            if ($searchTanaman->isEmpty()) {
                return redirect()->back()->with('message', 'Tanaman tidak ditemukan');
            }

            return view('frontend.tanamansearch', compact('searchTanaman'));
        } else {
            return redirect()->back()->with('message', 'Masukkan kata kunci pencarian');
        }
    }
    public function kategori($tanaman)
    {
        $tanaman = Tanaman::where('daerah_endemis', $tanaman)
            ->orderBy('id', 'desc')
            ->paginate(20);

        if ($tanaman->isEmpty()) {
            return redirect()->back()->with('message', 'Tidak ada tanaman dalam kategori ini');
        }

        return view('frontend.tanaman', compact('tanaman'));
    }
}
