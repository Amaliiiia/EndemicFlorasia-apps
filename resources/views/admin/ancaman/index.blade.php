@extends('layout.admin.main', [
    'namePage' => 'List  Ancaman',
])
@section('title', ' EndemicFlorasia | Ancaman')
@section('content')
    <div class="panel-header panel-header-sm">
    </div>
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> List Ancaman</h4>
                        <a href="{{ url('ancaman/create') }}"><button class="btn btn-primary border-0 p-2"> <i
                                    class="now-ui-icons ui-1_simple-add"></i> Tambah
                                Ancaman</button></a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                    <th>
                                        No
                                    </th>
                                    <th>
                                        Jenis Ancaman
                                    </th>
                                    <th>
                                        Tingkat Ancaman
                                    </th>
                                    <th class="text-right">
                                        aksi
                                    </th>
                                </thead>
                                <tbody>
                                    @foreach ($ancaman as $anc)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{ $anc->jenis_ancaman }}</td>
                                            <td>{{ $anc->tingkat_ancaman }}</td>
                                            <td class="text-right">
                                                <div class="aksi">
                                                    <a href="{{ url('ancaman/' . $anc->id . '/edit') }}"><button
                                                            class="now-ui-icons shopping_tag-content btn btn-success border-0 p-2"></button></a>
                                                    <a href="ancaman/delete/{{ $anc->id }}"><button
                                                            class="btn btn-danger border-0 p-2 now-ui-icons ui-1_simple-remove"
                                                            id="btn-hapus-ancaman" data-id-ancaman={{ $anc->id }}>
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
