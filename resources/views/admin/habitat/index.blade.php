@extends('layout.admin.main', [
    'namePage' => 'List  Habitat',
])
@section('title', ' EndemicFlorasia | Habitat')
@section('content')
    <div class="panel-header panel-header-sm">
    </div>
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> List Habitat</h4>
                        <a href="{{ url('habitat/create') }}"><button class="btn btn-primary border-0 p-2"> <i
                                    class="now-ui-icons ui-1_simple-add"></i> Tambah
                                Habitat</button></a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                    <th>
                                        No
                                    </th>
                                    <th>
                                        Nama
                                    </th>
                                    <th>
                                        Deskripsi
                                    </th>
                                    <th class="text-right">
                                        aksi
                                    </th>
                                </thead>
                                <tbody>
                                    @foreach ($habitat as $hbt)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{ $hbt->nama_habitat }}</td>
                                            <td>{{ $hbt->deskripsi_habitat }}</td>
                                            <td class="text-right">
                                                <div class="aksi">
                                                    <a href="{{ url('habitat/' . $hbt->id . '/edit') }}"><button
                                                            class="now-ui-icons shopping_tag-content btn btn-success border-0 p-2"></button></a>
                                                    <a href="habitat/delete/{{ $hbt->id }}"><button
                                                            class="btn btn-danger border-0 p-2 now-ui-icons ui-1_simple-remove"
                                                            id="btn-hapus-habitat" data-id-habitat={{ $hbt->id }}>
                                                            <span data-feather="x-circle"></span></button>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
