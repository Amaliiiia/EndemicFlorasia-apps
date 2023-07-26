@extends('frontend.component.index2')
@section('content')
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs mt-5 pt-3">
        <div class="container">
            <ol>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('explore') }}">Tanaman</a></li>
                <li>{{ $tanaman->nama_tanaman }}</li>
            </ol>
        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details pt-2">
        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-8">
                    <div class="portfolio-details-slider swiper">
                        <div class=" align-items-center">

                            <div class="swiper-slide">
                                <img src="{{ asset('storage/' . $tanaman->gambar) }}" alt="">
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="portfolio-info px-3 py-3">
                        <h3 class="m-0">{{ $tanaman->nama_tanaman }}</h3>
                        <ul>
                            <li><strong>Kingdom</strong>: {{ $tanaman->kingdom }}</li>
                            <li><strong>Subkingdom</strong>: {{ $tanaman->subkingdom }}</li>
                            <li><strong>Divisi</strong>: {{ $tanaman->divisi }}</li>
                            <li><strong>Subdivisi</strong>: {{ $tanaman->subdivisi }}</li>
                            <li><strong>Kelas</strong>: {{ $tanaman->kelas }}</li>
                            <li><strong>Subkelas</strong>: {{ $tanaman->subkelas }}</li>
                            <li><strong>Ordo</strong>: {{ $tanaman->ordo }}</li>
                            <li><strong>Famili</strong>: {{ $tanaman->famili }}</li>
                            <li><strong>Genus</strong>: {{ $tanaman->genus }}</li>
                            <li><strong>Spesies</strong>: {{ $tanaman->spesies }}</li>
                            <li><strong>Negara</strong>: {{ $tanaman->daerah_endemis }}</li>
                            <li><strong>Habitat</strong>: {{ $habitat->nama_habitat }}</li>
                            <li><strong>Ancaman</strong>: {{ $ancaman->jenis_ancaman }}</li>
                        </ul>
                    </div>
                </div>

            </div>
            <div class="row gy-4">
                <div class="col-lg-12">
                    <div class="portfolio-description">
                        <h2>Karakteristik</h2>
                        <p>
                            {{ $tanaman->karateristik}}
                        </p>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="portfolio-description">
                        <h2>Deskripsi</h2>
                        <p>
                            {{ $tanaman->deskripsi}}
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End Portfolio Details Section -->
@endsection
