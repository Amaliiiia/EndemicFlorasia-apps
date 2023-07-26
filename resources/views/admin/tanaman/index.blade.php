@extends('layout.admin.main', [
    'namePage' => 'List  Tanaman',
])
@section('title', ' EndemicFlorasia | Tanaman')
@section('content')
    <div class="panel-header panel-header-sm">
    </div>
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> List Tanaman</h4>
                        <a href="{{ url('tanaman/create') }}"><button class="btn btn-primary border-0 p-2"> <i
                                    class="now-ui-icons ui-1_simple-add"></i> Tambah
                                Tanaman</button></a>
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
                                        Kingdom
                                    </th>
                                    <th>
                                        Divisi
                                    </th>
                                    <th>
                                        Kelas
                                    </th>

                                    <th>
                                        Habitat
                                    </th>
                                    <th class="text-right">
                                        Aksi
                                    </th>
                                </thead>
                                <tbody>
                                    @foreach ($tanaman as $tnm)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{ $tnm->nama_tanaman }}</td>
                                            <td>{{ $tnm->kingdom }}</td>
                                            <td>{{ $tnm->divisi }}</td>
                                            <td>{{ $tnm->kelas }}</td>
                                            <td>{{ $tnm->habitat->nama_habitat }}</td>
                                            <td class="text-right">
                                                <div class="aksi">
                                                    <a href="{{ url('tanaman/' . $tnm->id . '/edit') }}"><button
                                                            class="now-ui-icons shopping_tag-content btn btn-success border-0 p-2"></button></a>
                                                    <a href="tanaman/delete/{{ $tnm->id }}"><button
                                                            class="btn btn-danger border-0 p-2 now-ui-icons ui-1_simple-remove"
                                                            id="btn-hapus-tanaman" data-id-tanaman={{ $tnm->id }}>
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
