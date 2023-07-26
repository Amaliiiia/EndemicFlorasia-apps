@extends('layout.admin.main', [
    'namePage' => 'Edit  Ancaman',
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
                        <h5 class="title">Edit Ancaman</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('ancaman/' . $anc->id) }}" method="POST" enctype="multipart/form-data">

                            @method('patch')
                            @csrf
                            <div class="row">
                                <div class="col-md-7 pr-1">
                                    <div class="form-group">
                                        <label>Jenis Ancaman</label>
                                        <input type="text" name="jenis_ancaman"
                                            class="form-control  @error('jenis_ancaman') is-invalid @enderror"
                                            placeholder="Masukan nama jenis ancaman" value="{{ $anc->jenis_ancaman }}"
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
                                <div class="col-md-7 pr-1">
                                    <div class="form-group">
                                        <label>Tingkat</label>
                                        <input type="text" name="tingkat_ancaman"
                                            class="form-control  @error('tingkat_ancaman') is-invalid @enderror"
                                            placeholder="Masukan tingkat ancaman" value="{{ $anc->tingkat_ancaman }}"
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
