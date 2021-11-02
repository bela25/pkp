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
                                <img src="{{ asset('storage/promosi/'. $bisnis->gambar_produk) }}" alt="Image">
                            </div>
                            <div class="team-text">
                                <h2>Mollie Ross</h2>
                                <h4>Web Designer</h4>
                                <p>
                                    Lorem ipsum dolor sit amet consec adipis elit. Etiam accum lacus
                                </p>
                               <a class="btn" href="">Read More <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                 
                                
                </div>
            </div>
        </div>


        <!-- Team End -->

       @endsection