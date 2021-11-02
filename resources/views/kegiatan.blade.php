@extends('layouts.dpp')

@section('content')
         <!-- Portfolio Start -->
        <div class="portfolio" id="portfolio">
            <div class="container">
                <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
                    <h2>Kegiatan</h2>
                </div>
                <div class="row gallery-items">
                    @foreach($kegiatans as $kegiatan) 
                    <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item filter-1 wow fadeInUp" data-wow-delay="0.0s">
                        <div class="portfolio-wrap">
                            <div class="portfolio-img">
                                <img src="{{asset('/image/'.$kegiatan->gambar_kegiatan)}}" alt="Image">
                            </div>
                            <div class="portfolio-text">
                                <h3>{{ $kegiatan->judulkegiatan }}</h3>
                                <a class="btn" href="img/portfolio-1.jpg" data-lightbox="portfolio">+</a>
                            </div>
                        </div>
                    </div>    
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Portfolio End -->      
@endsection