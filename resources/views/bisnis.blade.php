@extends('layouts.dpp')

@section('content')

        <!-- Team Start -->
        <div class="team" id="team">
            <div class="container">
                <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
                    <h2>PROMOSI</h2>
                </div>
                <div class="row gallery-items">
                     @foreach($bisniss as $bisnis) 
                    <div class=" col-lg-6 wow fadeInUp" data-wow-delay="0.0s">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="{{ asset('promosi/'. $bisnis->gambar_produk) }}" alt="Image">
                            </div>
                            <div class="team-text">
                                <h2>{{ $bisnis->judul }}</h2>
                                <p>
                                {{ $bisnis->keterangan }}
                                </p>
                              
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="pagination justify-content-end">{{ $bisniss->links() }}</div>
            </div>
        </div>


        <!-- Team End -->

       @endsection