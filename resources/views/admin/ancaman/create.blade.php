@extends('layout.admin.main', [
    'namePage' => 'List  Ancaman',
])
@section('title', 'EndemicFlorasia | Ancaman')
@section('content')

    <div class="panel-header panel-header-sm">
    </div>
    <div class="content">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h5 class="title">Tambah Ancaman</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ '/ancaman' }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-7 ">
                                    <div class="form-group">
                                        <label>Jenis Ancaman</label>
                                        <input type="text" name="jenis_ancaman"
                                            class="form-control  @error('jenis_ancaman') is-invalid @enderror"
                                            value="{{ old('jenis_ancaman') }}" placeholder="Masukan nama jenis ancaman"
                                            required>
                                        @error('jenis_ancaman')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                            </div>
                            <div class="row pt-3">
                                <div class="col-md-7 ">
                                    <div class="form-group">
                                        <label>Tingkat</label>
                                        <input type="text" name="tingkat_ancaman"
                                            class="form-control  @error('tingkat_ancaman') is-invalid @enderror"
                                            value="{{ old('tingkat_ancaman') }}" placeholder="Masukan tingkat ancaman"
                                            required>
                                        @error('tingkat_ancaman')
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
