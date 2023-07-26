 @extends('layout.admin.main', [
     'namePage' => 'Edit  Tanaman',
 ])
 @section('title', 'EndemicFlorasia | Tanaman')
 @section('content')
     <div class="panel-header panel-header-sm">
     </div>
     <div class="content">
         <div class="row">
             <div class="col-md">
                 <div class="card">
                     <div class="card-header">
                         <h5 class="title">Edit Tanaman</h5>
                     </div>
                     <div class="card-body">
                         <form action="{{ url('tanaman/' . $tnm->id) }}" method="POST" enctype="multipart/form-data">

                             @method('patch')
                             @csrf

                             <div class="row">
                                 <div class="col-md-5">
                                     <div class="form-group">
                                         <label>Nama Tanaman</label>
                                         <input type="text" name="nama_tanaman"
                                             class="form-control  @error('nama_tanaman') is-invalid @enderror"
                                             value="{{ $tnm->nama_tanaman }}" required>
                                         @error('nama_tanaman')
                                             <div class="invalid-feedback">
                                                 {{ $message }}
                                             </div>
                                         @enderror
                                     </div>
                                 </div>
                                 <div class="col-md-3 pl-3">
                                     <div class="form-group">
                                         <label>Kingdom</label>
                                         <select name="kingdom"
                                             class="form-control  @error('kingdom') is-invalid @enderror">
                                             <option value="{{ $tnm->kingdom }}">{{ $tnm->kingdom }}</option>
                                             <option value="Plantae (tumbuhan)">Plantae (tumbuhan)</option>
                                             <option value="Fungi (jamur)">Fungi (jamur)</option>
                                             <option value="Protista (protista)">Protista (protista)</option>
                                         </select>
                                         @error('kingdom')
                                             <div class="invalid-feedback">
                                                 {{ $message }}
                                             </div>
                                         @enderror
                                     </div>
                                 </div>
                                 <div class="col-md-3 pl-3">
                                     <div class="form-group">
                                         <label>Sub Kingdom</label>
                                         <select name="subkingdom"
                                             class="form-control  @error('subkingdom') is-invalid @enderror">
                                             <option value="{{ $tnm->subkingdom }}">{{ $tnm->subkingdom }}</option>
                                             <option value="Tracheobionta">Tracheobionta</option>
                                             <option value="Bryobionta">Bryobionta</option>
                                             <option value="Chlorobionta">Chlorobionta(protista)</option>
                                             <option value="Rhodobionta">Rhodobionta</option>
                                             <option value="Phaeobionta">Phaeobionta</option>
                                             <option value="Mycetobionta">Mycetobionta</option>
                                         </select>
                                         @error('subkingdom')
                                             <div class="invalid-feedback">
                                                 {{ $message }}
                                             </div>
                                         @enderror
                                     </div>
                                 </div>

                             </div>
                             <div class="row pt-3">
                                 <div class="col-md-5 pl-3">
                                     <div class="form-group">
                                         <label>Divisi</label>
                                         <select name="divisi" class="form-control  @error('divisi') is-invalid @enderror">
                                             <option value="{{ $tnm->divisi }}">{{ $tnm->divisi }}</option>
                                             <option value="Magnoliophyta (Tumbuhan berkeping dua)">Magnoliophyta (Tumbuhan
                                                 berkeping dua)</option>
                                             <option value="Pteridophyta (Tumbuhan paku)">Pteridophyta (Tumbuhan paku)
                                             </option>
                                             <option value="Cycadophyta (Tumbuhan sikas)">Cycadophyta (Tumbuhan sikas)
                                             </option>
                                             <option value="Coniferophyta (Tumbuhan berbiji terbuka)">Coniferophyta
                                                 (Tumbuhan berbiji terbuka)</option>
                                             <option value="Bryophyta (Tumbuhan Lumut)">Bryophyta (Tumbuhan Lumut)</option>
                                         </select>
                                         @error('divisi')
                                             <div class="invalid-feedback">
                                                 {{ $message }}
                                             </div>
                                         @enderror
                                     </div>
                                 </div>
                                 <div class="col-md-5 pl-3">
                                     <div class="form-group">
                                         <label>Sub divisi</label>
                                         <select name="subdivisi"
                                             class="form-control  @error('subdivisi') is-invalid @enderror">
                                             <option value="{{ $tnm->subdivisi }}">{{ $tnm->subdivisi }}</option>
                                             <option value="Angiospermae (Tumbuhan berbunga)">Angiospermae (Tumbuhan
                                                 berbunga)</option>
                                             <option value="Gymnospermae (Tumbuhan berbiji terbuka)">Gymnospermae (Tumbuhan
                                                 berbiji terbuka)</option>
                                             <option value="Bryophyta (Tumbuhan Lumut)">Bryophyta (Tumbuhan Lumut)</option>
                                             <option value="Pteridophyta (Tumbuhan paku)">Pteridophyta (Tumbuhan paku)
                                             </option>
                                         </select>
                                         @error('subdivisi')
                                             <div class="invalid-feedback">
                                                 {{ $message }}
                                             </div>
                                         @enderror
                                     </div>
                                 </div>
                             </div>
                             <div class="row pt-3">
                                 <div class="col-md-4 pl-3">
                                     <div class="form-group">
                                         <label>Kelas</label>
                                         <select name="kelas" class="form-control  @error('kelas') is-invalid @enderror">
                                             <option value="{{ $tnm->kelas }}">{{ $tnm->kelas }}</option>
                                             <option value="Liliopsida (Monokotil)">Liliopsida (Monokotil)</option>
                                             <option value="Magnoliopsida (Dikotil)">Magnoliopsida (Dikotil)</option>
                                             <option value="Pinopsida (Tumbuhan konifer)">Pinopsida (Tumbuhan konifer)
                                             </option>
                                             <option value="Filicopsida (Tumbuhan paku) ">Filicopsida (Tumbuhan paku)
                                             </option>
                                             <option value="Bryopsida (Tumbuhan lumut)">Bryopsida (Tumbuhan lumut)</option>
                                         </select>
                                         @error('kelas')
                                             <div class="invalid-feedback">
                                                 {{ $message }}
                                             </div>
                                         @enderror
                                     </div>
                                 </div>
                                 <div class="col-md-4 pl-3">
                                     <div class="form-group">
                                         <label>Sub Kelas</label>
                                         <input type="text" name="subkelas"
                                             class="form-control @error('subkelas') is-invalid @enderror "
                                             value="{{ $tnm->subkelas }}" required>
                                         @error('subkelas')
                                             <div class="invalid-feedback">
                                                 {{ $message }}
                                             </div>
                                         @enderror
                                     </div>
                                 </div>
                                 <div class="col-md-4 ">
                                     <div class="form-group">
                                         <label>Ordo</label>
                                         <input type="text" name="ordo"
                                             class="form-control @error('ordo') is-invalid @enderror "
                                             value="{{ $tnm->ordo }}" required>
                                         @error('ordo')
                                             <div class="invalid-feedback">
                                                 {{ $message }}
                                             </div>
                                         @enderror
                                     </div>
                                 </div>

                             </div>
                             <div class="row pt-3">
                                 <div class="col-md-4 ">
                                     <div class="form-group">
                                         <label>Famili</label>
                                         <input type="text" name="famili"
                                             class="form-control @error('famili') is-invalid @enderror "
                                             value="{{ $tnm->famili }}" required>
                                         @error('famili')
                                             <div class="invalid-feedback">
                                                 {{ $message }}
                                             </div>
                                         @enderror
                                     </div>
                                 </div>
                                 <div class="col-md-4 ">
                                     <div class="form-group">
                                         <label>Genus</label>
                                         <input type="text" name="genus"
                                             class="form-control @error('genus') is-invalid @enderror "
                                             value="{{ $tnm->genus }}" required>
                                         @error('genus')
                                             <div class="invalid-feedback">
                                                 {{ $message }}
                                             </div>
                                         @enderror
                                     </div>
                                 </div>
                                 <div class="col-md-4 ">
                                     <div class="form-group">
                                         <label>Spesies</label>
                                         <input type="text" name="spesies"
                                             class="form-control @error('spesies') is-invalid @enderror "
                                             value="{{ $tnm->spesies }}" required>
                                         @error('spesies')
                                             <div class="invalid-feedback">
                                                 {{ $message }}
                                             </div>
                                         @enderror
                                     </div>
                                 </div>
                             </div>
                             <div class="row pt-3">
                                 <div class="col-md-4 ">
                                     <div class="form-group">
                                         <label>Daerah endemis</label>
                                         <select name="daerah_endemis"
                                             class="form-control  @error('daerah_endemis') is-invalid @enderror">
                                             <option value="{{ $tnm->daerah_endemis }}">{{ $tnm->daerah_endemis }}
                                             </option>
                                             <option value="Indonesia">Indonesia</option>
                                             <option value="Malaysia">Malaysia</option>
                                             <option value="Vietnam">Vietnam</option>
                                             <option value="Thailand ">Thailand</option>
                                             <option value="Cambodia">Cambodia</option>
                                             <option value="Laos">Laos</option>
                                             <option value="Philippines">Philippines</option>
                                             <option value="Singapore">Singapore</option>
                                         </select>
                                         @error('daerah_endemis')
                                             <div class="invalid-feedback">
                                                 {{ $message }}
                                             </div>
                                         @enderror
                                     </div>
                                 </div>
                                 <div class="col-md-4 pr-1">
                                     <div class="form-group">
                                         <label>Habitat</label>
                                         <select name="habitat_id"
                                             class="form-control  @error('habitat_id') is-invalid @enderror">
                                             <option value="{{ $tnm->habitat_id }}">
                                                 {{ $tnm->habitat->nama_habitat }}</option>
                                             @foreach ($habitat as $hbt)
                                                 <option value="{{ $hbt->id }}">{{ $hbt->nama_habitat }}</option>
                                             @endforeach
                                         </select>
                                         @error('habitat_id')
                                             <div class="invalid-feedback">
                                                 {{ $message }}
                                             </div>
                                         @enderror
                                     </div>
                                 </div>
                                 <div class="col-md-4 ">
                                     <div class="form-group">
                                         <label>Ancaman</label>
                                         <select name="ancaman_id"
                                             class="form-control  @error('ancaman_id') is-invalid @enderror">
                                             <option value="{{ $tnm->ancaman_id }}">{{ $tnm->ancaman->jenis_ancaman }}
                                             </option>
                                             @foreach ($ancaman as $anc)
                                                 <option value="{{ $anc->id }}">{{ $anc->jenis_ancaman }}</option>
                                             @endforeach
                                         </select>
                                         @error('ancaman_id')
                                             <div class="invalid-feedback">
                                                 {{ $message }}
                                             </div>
                                         @enderror
                                     </div>
                                 </div>
                             </div>
                             <div class="row pt-3">
                                 <div class="col-md-12">
                                     <div class="form-group">
                                         <label>Karateristik</label>
                                         <textarea type="text" name="karateristik" class="form-control @error('karateristik') is-invalid @enderror"
                                             value="{{ $tnm->karateristik }}" required>{{ $tnm->karateristik }}</textarea>
                                         @error('karateristik')
                                             <div class="invalid-feedback">
                                                 {{ $message }}
                                             </div>
                                         @enderror
                                     </div>
                                 </div>
                             </div>
                             <div class="row pt-3">
                                 <div class="col-md-12">
                                     <div class="form-group">
                                         <label>Deskripsi</label>
                                         <textarea type="text" name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror"
                                             value="{{ $tnm->deskripsi }}" required>{{ $tnm->deskripsi }}</textarea>
                                         @error('deskripsi')
                                             <div class="invalid-feedback">
                                                 {{ $message }}
                                             </div>
                                         @enderror
                                     </div>
                                 </div>
                             </div>
                             <div class="row pt-3">
                                 <div class="col-6">
                                     <div class="form-goup">
                                         <label>gambar</label>
                                         <input type="file" class="form-control @error('gambar') is-invalid @enderror"
                                             name="gambar">
                                         @error('gambar')
                                             <div class="invalid-feedback">
                                                 {{ $message }}
                                             </div>
                                         @enderror
                                     </div>
                                 </div>

                             </div>
                             <div class="row pt-3">
                                 <div class="col-md-5">
                                     <div class="" style="height:150px; width:150px;">
                                         <img class="rounded" src="{{ asset('storage/' . $tnm->gambar) }}">
                                     </div>
                                 </div>
                             </div>
                             <button type="submit" class="btn btn-primary mt-5 ">Submit</button>
                         </form>
                     </div>
                 </div>
             </div>
         </div>
     </div>

 @endsection
