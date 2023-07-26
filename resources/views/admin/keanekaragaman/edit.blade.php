@extends('layout.admin.main', [
    'namePage' => 'Edit  Keanekaragaman',
])
@section('title', 'edit-keanekaragaman')
@section('content')
    <div class="panel-header panel-header-sm">
    </div>
    <div class="content">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h5 class="title">Edit Keanekaragaman</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('keanekaragaman/' . $keanekaragaman->id) }}" method="POST"
                            enctype="multipart/form-data">

                            @method('patch')
                            @csrf
                            <div class="row">
                                <div class="col-md-5  pr-1">
                                    <div class="form-group">
                                        <label>Tanaman</label>
                                        <select name="tanaman_id"
                                            class="form-control  @error('tanaman_id') is-invalid @enderror">
                                            <option value="{{ $keanekaragaman->tanaman_id }}">
                                                {{ $keanekaragaman->tanaman->nama_tanaman }}</option>
                                            @foreach ($tanaman as $tnm)
                                                <option value="{{ $tnm->id }}">{{ $tnm->nama_tanaman }}</option>
                                            @endforeach
                                        </select>
                                        @error('tanaman_id')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-7 pr-1">
                                    <div class="form-group">
                                        <label>Keanekaragaman</label>
                                        <input type="text" name="keanekaragaman"
                                            class="form-control  @error('keanekaragaman') is-invalid @enderror"
                                            value="{{ $keanekaragaman->keanekaragaman }}" required>
                                        @error('keanekaragaman')
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
                                        <label>Tahun:</label>
                                        <input type="number" name="tahun" class="form-control" min="1900"
                                            max="2099" value="{{ $keanekaragaman->tahun }}" required>
                                        @error('tahun')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
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
