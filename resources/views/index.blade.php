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
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet"/       <!-- CSS Libraries -->
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
                <img src="{{asset('utama/img/logo.png')}}"> 
                <p> &nbsp; &nbsp;</p>
                <a href="index.html" class="navbar-brand">DPP PKP JATIM 2021</a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ml-auto">
                        <a href="#home" class="nav-item nav-link active">Home</a>
                        <a href="#about" class="nav-item nav-link">About</a>
                        <a href="{{route ('news')}}" class="nav-item nav-link">PKP News</a>
                        <a href="{{route ('video')}}" class="nav-item nav-link">Videos</a>
                        <a href="{{route ('kegiatan')}}" class="nav-item nav-link">Kegiatan</a>
                        <a href="{{route ('contact')}}" class="nav-item nav-link">Contact</a>
                        <a href="daftaranggota.html" class="nav-item nav-link">Daftar</a>
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
                            <img src="{{asset('utama/img/hero.png')}}" alt="Hero Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->


        <!-- About Start -->
        <div class="about wow fadeInUp" data-wow-delay="0.1s" id="about">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-img">
                            <img src="{{asset('utama/img/about.jpg')}}" alt="Image">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-content">
                            <div class="section-header text-left">
                                <p>Learn About Me</p>
                                <h2>10 Years Experience</h2>
                            </div>
                            <div class="about-text">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida
                                </p>
                            </div>
                            <div class="skills">
                                <div class="skill-name">
                                    <p>Web Design</p><p>85%</p>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="skill-name">
                                    <p>Web Development</p><p>95%</p>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="skill-name">
                                    <p>Apps Design</p><p>90%</p>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="skill-name">
                                    <p>Apps Development</p><p>85%</p>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <a class="btn" href="">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->
        
        
         <!-- Experience Start -->
        <div class="experience" id="experience">
            <div class="container">
                <header class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
                    <p></p>
                    <h2>Highlight</h2>
                </header>
                <div class="timeline">
                    <div class="timeline-item left wow slideInLeft" data-wow-delay="0.1s">
                        <div class="timeline-text">
                            <div class="timeline-date">2045 - 2050</div>
                            <h2>Web Developer</h2>
                            <h4>Soft Agency, San Francisco, CA</h4>
                            <p>
                                Lorem ipsum dolor sit amet elit. Aliquam odio dolor, id luctus erat sagittis non. Ut blandit semper pretium.
                            </p>
                        </div>
                    </div>
                    <div class="timeline-item right wow slideInRight" data-wow-delay="0.1s">
                        <div class="timeline-text">
                            <div class="timeline-date">2045 - 2050</div>
                            <h2>Web Developer</h2>
                            <h4>Soft Agency, San Francisco, CA</h4>
                            <p>
                                Lorem ipsum dolor sit amet elit. Aliquam odio dolor, id luctus erat sagittis non. Ut blandit semper pretium.
                            </p>
                        </div>
                    </div>
                    <div class="timeline-item left wow slideInLeft" data-wow-delay="0.1s">
                        <div class="timeline-text">
                            <div class="timeline-date">2045 - 2050</div>
                            <h2>Web Developer</h2>
                            <h4>Soft Agency, San Francisco, CA</h4>
                            <p>
                                Lorem ipsum dolor sit amet elit. Aliquam odio dolor, id luctus erat sagittis non. Ut blandit semper pretium.
                            </p>
                        </div>
                    </div>
                    <div class="timeline-item right wow slideInRight" data-wow-delay="0.1s">
                        <div class="timeline-text">
                            <div class="timeline-date">2045 - 2050</div>
                            <h2>Web Developer</h2>
                            <h4>Soft Agency, San Francisco, CA</h4>
                            <p>
                                Lorem ipsum dolor sit amet elit. Aliquam odio dolor, id luctus erat sagittis non. Ut blandit semper pretium.
                            </p>
                        </div>
                    </div>
                    <div class="timeline-item left wow slideInLeft" data-wow-delay="0.1s">
                        <div class="timeline-text">
                            <div class="timeline-date">2045 - 2050</div>
                            <h2>Web Developer</h2>
                            <h4>Soft Agency, San Francisco, CA</h4>
                            <p>
                                Lorem ipsum dolor sit amet elit. Aliquam odio dolor, id luctus erat sagittis non. Ut blandit semper pretium.
                            </p>
                        </div>
                    </div>
                    <div class="timeline-item right wow slideInRight" data-wow-delay="0.1s">
                        <div class="timeline-text">
                            <div class="timeline-date">2045 - 2050</div>
                            <h2>Web Developer</h2>
                            <h4>Soft Agency, San Francisco, CA</h4>
                            <p>
                                Lorem ipsum dolor sit amet elit. Aliquam odio dolor, id luctus erat sagittis non. Ut blandit semper pretium.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Job Experience End -->

        <!-- Portfolio Start -->
        <div class="portfolio" id="portfolio">
            <div class="container">
                <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
                    <p></p>
                    <h2>Kegiatan</h2>
                </div>
                <div class="row">
                    <div class="col-12">
                    </div>
                </div>
                <div class="row portfolio-container">
                    <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item filter-1 wow fadeInUp" data-wow-delay="0.0s">
                        <div class="portfolio-wrap">
                            <div class="portfolio-img">
                                <img src="img/portfolio-1.jpg" alt="Image">
                            </div>
                            <div class="portfolio-text">
                                <h3>eCommerce Website</h3>
                                <a class="btn" href="img/portfolio-1.jpg" data-lightbox="portfolio">+</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item filter-2 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="portfolio-wrap">
                            <div class="portfolio-img">
                                <img src="img/portfolio-2.jpg" alt="Image">
                            </div>
                            <div class="portfolio-text">
                                <h3>Product Landing Page</h3>
                                <a class="btn" href="img/portfolio-2.jpg" data-lightbox="portfolio">+</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item filter-3 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="portfolio-wrap">
                            <div class="portfolio-img">
                                <img src="img/portfolio-3.jpg" alt="Image">
                            </div>
                            <div class="portfolio-text">
                                <h3>JavaScript quiz game</h3>
                                <a class="btn" href="img/portfolio-3.jpg" data-lightbox="portfolio">+</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       <p style="text-align:center;"  data-aos="fadeInUp"><a href="kegiatan.html" class="btn">KEGIATAN</a></p>

        <!-- Portfolio End -->
        
        
        <!-- Banner Start -->
        <div class="banner wow zoomIn" data-wow-delay="0.1s">
            <div class="container">
                <div class="section-header text-center">
                    <h4>MAU JADI ANGOTA</h4>
                    <h2>DPP PKP JAWA TIMUR 2021</h2>
                    <h4>DAFTAR SEKARANG !</h4>
                </div>
                <div class="container banner-text">
                    <a class="btn" href="daftaranggota.html">DAFTAR ANGGOTA</a>
                </div>
            </div>
        </div>
        <!-- Banner End -->

        <!-- Team Start -->
        <div class="team" id="team">
            <div class="container">
                <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
                    <p></p>
                    <h2>Expert Team Members</h2>
                </div>
                <div class="row">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.0s">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="img/team-1.jpg" alt="Image">
                            </div>
                            <div class="team-text">
                                <h2>Mollie Ross</h2>
                                <h4>Web Designer</h4>
                                <p>
                                    Lorem ipsum dolor sit amet consec adipis elit. Etiam accum lacus
                                </p>
                                <div class="team-social">
                                    <a class="btn" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn" href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a class="btn" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="img/team-2.jpg" alt="Image">
                            </div>
                            <div class="team-text">
                                <h2>Dylan Adams</h2>
                                <h4>Web Developer</h4>
                                <p>
                                    Lorem ipsum dolor sit amet consec adipis elit. Etiam accum lacus
                                </p>
                                <div class="team-social">
                                    <a class="btn" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn" href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a class="btn" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="img/team-3.jpg" alt="Image">
                            </div>
                            <div class="team-text">
                                <h2>Jennifer Page</h2>
                                <h4>Apps Designer</h4>
                                <p>
                                    Lorem ipsum dolor sit amet consec adipis elit. Etiam accum lacus
                                </p>
                                <div class="team-social">
                                    <a class="btn" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn" href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a class="btn" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="img/team-4.jpg" alt="Image">
                            </div>
                            <div class="team-text">
                                <h2>Josh Dunn</h2>
                                <h4>Apps Developer</h4>
                                <p>
                                    Lorem ipsum dolor sit amet consec adipis elit. Etiam accum lacus
                                </p>
                                <div class="team-social">
                                    <a class="btn" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn" href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a class="btn" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->

        <!-- Blog Start -->
        <div class="blog" id="blog">
            <div class="container">
                <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
                    <p></p>
                    <h2>Latest News</h2>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="blog-item wow fadeInUp" data-wow-delay="0.1s">
                            <div class="blog-img">
                                <img src="img/blog-1.jpg" alt="Blog">
                            </div>
                            <div class="blog-text">
                                <h2>Lorem ipsum dolor sit amet</h2>
                                <div class="blog-meta">
                                    <p><i class="far fa-user"></i>Admin</p>
                                    <p><i class="far fa-list-alt"></i>Web Design</p>
                                    <p><i class="far fa-calendar-alt"></i>01-Jan-2045</p>
                                    <p><i class="far fa-comments"></i>5</p>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet elit. Nullam commodo mattis mi. Nullam eu erat lectus. Proin viverra risus vitae luctus. Proin ut ante, vitae sapien. Fusce sem ac erat rhoncus, ornare mattis nisl massa et eros vitae pulvin
                                </p>
                                <a class="btn" href="">Read More <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="blog-item wow fadeInUp" data-wow-delay="0.3s">
                            <div class="blog-img">
                                <img src="img/blog-2.jpg" alt="Blog">
                            </div>
                            <div class="blog-text">
                                <h2>Lorem ipsum dolor sit amet</h2>
                                <div class="blog-meta">
                                    <p><i class="far fa-user"></i>Admin</p>
                                    <p><i class="far fa-list-alt"></i>Apps Design</p>
                                    <p><i class="far fa-calendar-alt"></i>01-Jan-2045</p>
                                    <p><i class="far fa-comments"></i>10</p>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet elit. Nullam commodo mattis mi. Nullam eu erat lectus. Proin viverra risus vitae luctus. Proin ut ante, vitae sapien. Fusce sem ac erat rhoncus, ornare mattis nisl massa et eros vitae pulvin
                                </p>
                                <a class="btn" href="">Read More <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         <p style="text-align:center;"  data-aos="fadeInUp"><a href="news.html" class="btn">NEWS</a></p>
        <!-- Blog End -->


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
                        <div class="footer-social">
                            <a href="https://www.facebook.com/profile.php?id=100055830550259"><i class="fab fa-facebook-f"></i></a>
                            <a href="https://www.youtube.com/channel/UCcXqdSxWFZuxBLygOhT3LJAs"><i class="fab fa-youtube"></i></a>
                            <a href="https://www.instagram.com/pkpjatim/"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="container copyright">
                    
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
    </body>
</html>
