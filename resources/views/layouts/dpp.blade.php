<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>DPP PKP JAWA TIMUR '21</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free Website Template" name="keywords">
        <meta content="Free Website Template" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="{{asset ('utama/lib/animate/animate.min.css')}}" rel="stylesheet">
        <link href="{{asset ('utama/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
        <link href="{{asset ('utama/lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="{{asset ('utama/css/style.css')}}" rel="stylesheet">
    </head>

    <body data-spy="scroll" data-target=".navbar" data-offset="51">
        <!-- Nav Bar Start -->
        <div class="navbar navbar-expand-lg bg-light navbar-light">
            <div class="container-fluid">
                <img src="{{asset('utama/img/logo.png')}}"> &nbsp;
                <a href="index.html" class="navbar-brand">DPP PKP JATIM 2021</a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ml-auto">
                        <a href="{{route ('index')}}" class="nav-item nav-link active">Home</a>
                        <a href="{{route ('berita')}}" class="nav-item nav-link">PKP News</a>
                        <a href="{{route ('video')}}" class="nav-item nav-link">Videos</a>
                        <a href="{{route ('kegiatan')}}" class="nav-item nav-link">Kegiatan</a>
                        <a href="{{route ('bisnis')}}" class="nav-item nav-link">Promosi</a>
                        <a href="{{route ('contact')}}" class="nav-item nav-link">Contact</a>
                        <a href="{{route ('daftaranggota')}}" class="nav-item nav-link">Daftar</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Nav Bar End -->


        <!-- Hero Start -->
        <div class="hero" id="home">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-sm-12 col-md-6">
                        <div class="hero-content">
                            <div class="hero-text">
                                <p>MAU JADI ANGGOTA</p>
                                <h1>DPP PKP JAWA TIMUR</h1>
                                <h2></h2>
                                <div class="typed-text">DAFTAR SEKARANG</div>
                            </div>
                            <div class="hero-btn">
                                <a class="btn" href="">DAFTAR ANGGOTA</a>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 d-none d-md-block">
                        <div class="hero-image">
                            <img src="img/hero.png" alt="Hero Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->

        @yield('content')		
          <!-- Footer Start -->
          <div class="footer wow fadeIn" data-wow-delay="0.3s">
            <div class="container-fluid">
                <div class="container">
                    <div class="footer-info">
                        <h2>DPP PKP JAWA TIMUR</h2>
                        <h3>Jl. Siwalankerto No.9-11, Surabaya, 60236, Jawa Timur</h3>
                        <div class="footer-menu">
                            <p>+62 31-7526678 (Hunting)</p>
                            <p>+62 31-8434298</p>
                            <p> Fax :031-7534389 </p>
                            <p>dpppkpjatim21@gmail.com</p>
                        </div>
                        
                    </div>
                </div>
                <div class="container copyright">
                    <p>&copy; <a href="#">PKP JATIM '21</a>, All Right Reserved | Designed By <a href="https://htmlcodex.com">HTML Codex</a></p>
                </div>
            </div>
        </div>
        <!-- Footer End -->
        
        
        <!-- Back to top button -->
        <a href="#" class="btn back-to-top"><i class="fa fa-chevron-up"></i></a>
        
        
        <!-- Pre Loader -->
        <div id="loader" class="show">
            <div class="loader"></div>
        </div>

        
        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="{{asset ('utama/lib/easing/easing.min.js')}}"></script>
        <script src="{{asset ('utama/lib/wow/wow.min.js')}}"></script>
        <script src="{{asset ('utama/lib/waypoints/waypoints.min.js')}}"></script>
        <script src="{{asset ('utama/lib/typed/typed.min.js')}}"></script>
        <script src="{{asset ('utama/lib/owlcarousel/owl.carousel.min.js')}}"></script>
        <script src="{{asset ('utama/lib/isotope/isotope.pkgd.min.js')}}"></script>
        <script src="{{asset ('utama/lib/lightbox/js/lightbox.min.js')}}"></script>

        <!-- Template Javascript -->
        
        <script src="{{asset  ('utama/js/main.js')}}"></script>
        <script src="{{asset  ('utama/js/script-slide2.js')}}"></script>
        <script src="{{asset  ('utama/js/script-slide.js')}}"></script>
    </body>
</html>
