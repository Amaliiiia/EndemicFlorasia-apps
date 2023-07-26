@extends('layout.admin.main', [
    'namePage' => 'List  Keanekaragaman',
])
@section('title', ' EndemicFlorasia | Keanekaragaman')
@section('content')
    <div class="panel-header panel-header-sm">
    </div>
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> List Keanekaragaman</h4>
                        <a href="{{ url('keanekaragaman/create') }}"><button class="btn btn-primary border-0 p-2"> <i
                                    class="now-ui-icons ui-1_simple-add"></i> Tambah
                                Keanekaragaman</button></a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                    <th>
                                        No
                                    </th>
                                    <th>
                                        Keanekaragaman
                                    </th>
                                    <th>
                                        Tahun
                                    </th>
                                    <th class="text-right">
                                        aksi
                                    </th>
                                </thead>
                                <tbody>
                                    @foreach ($keanekaragaman as $keanekaragaman)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{ $keanekaragaman->keanekaragaman }}</td>
                                            <td>{{ $keanekaragaman->tahun }}</td>
                                            <td class="text-right">
                                                <div class="aksi">
                                                    <a href="{{ url('keanekaragaman/' . $keanekaragaman->id . '/edit') }}"><button
                                                            class="now-ui-icons shopping_tag-content btn btn-success border-0 p-2"></button></a>
                                                    <a href="keanekaragaman/delete/{{ $keanekaragaman->id }}"><button
                                                            class="btn btn-danger border-0 p-2 now-ui-icons ui-1_simple-remove"
                                                            id="btn-hapus-keanekaragaman"
                                                            data-id-keanekaragaman={{ $keanekaragaman->id }}>
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
