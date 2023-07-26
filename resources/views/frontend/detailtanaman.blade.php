@extends('frontend.component.index2')
@section('content')
<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs mt-5">
    <div class="breadcrumb-hero">
        <div class="container">
            <div class="breadcrumb-hero">
                <h2>Tanaman Endemik</h2>
                <p>Temukan informasi tentang tanaman endemik di daerah Anda. </p>
            </div>
        </div>
    </div>
    <div class="container">
        <ol>
            <li><a href="index.html">Beranda</a></li>
            <li><a href="{{ route('explore') }}">Tanaman</a></li>
            <li>{{$tanaman->nama_tanaman}}</li>
        </ol>
    </div>
</section><!-- End Breadcrumbs -->


<section id="detail-tanaman" class="detail-tanaman">
    <div class="container">
        <div class="row portfolio-container" data-aos="fade-up">
            <div class="col-lg-3 col-md-6 portfolio-item filter-app">
                <div class="tanaman-wrap">
                <img src="{{ asset('storage/' . $tanaman->gambar) }}" class="img-fluid" alt="">
                    <div class="detail-info">
                        <h4><strong>Nama :</strong> {{ $tanaman->nama_tanaman }}</h4>
                        <p><strong>Daerah Endemis :</strong> {{ $tanaman->daerah_endemis }}</p>
                        <p><strong>Kingdom :</strong> {{ $tanaman->kingdom }}</p>
                        <p><strong>Sub Kingdom :</strong> {{ $tanaman->subkingdom }}</p>
                        <p><strong>Divisi :</strong> {{ $tanaman->divisi}}</p>
                        <p><strong>Sub Divisi :</strong> {{ $tanaman->subdivisi}}</p>
                        <p><strong>Kelas :</strong> {{ $tanaman->kelas}}</p>
                        <p><strong>Sub Kelas :</strong> {{ $tanaman->subkelas}}</p>
                        <p><strong>Ordo :</strong> {{ $tanaman->ordo}}</p>
                        <p><strong>Famili :</strong> {{ $tanaman->famili}}</p>
                        <p><strong>Genus :</strong> {{ $tanaman->genus}}</p>
                        <p><strong>Spesies :</strong> {{ $tanaman->spesies}}</p>
                        <div class="deskripsi-info">
                            <p><strong>Karateristik :</strong> {{ $tanaman->karateristik}}</p>
                            <p><strong>Deskripsi :</strong> {{ $tanaman->deskripsi}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



@endsection