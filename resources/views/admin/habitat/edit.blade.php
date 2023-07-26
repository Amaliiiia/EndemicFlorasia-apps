@extends('layout.admin.main', [
    'namePage' => 'Edit  Habitat',
])
@section('title', 'EndemicFlorasia | Habitat')
@section('content')
    <div class="panel-header panel-header-sm">
    </div>
    <div class="content">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h5 class="title">Edit Habitat</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('habitat/' . $hbt->id) }}" method="POST" enctype="multipart/form-data">

                            @method('patch')
                            @csrf
                            <div class="row">
                                <div class="col-md-7 pr-1">
                                    <div class="form-group">
                                        <label>Nama Habitat</label>
                                        <input type="text" name="nama_habitat"
                                            class="form-control  @error('nama_habitat') is-invalid @enderror"
                                            value="{{ $hbt->nama_habitat }}" required>
                                        @error('nama_habitat')
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
                                        <textarea type="text" name="deskripsi_habitat" class="form-control @error('deskripsi_habitat') is-invalid @enderror"
                                            style="height: 200px;" required>{{ $hbt->deskripsi_habitat }}</textarea>
                                        @error('deskripsi_habitat')
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
