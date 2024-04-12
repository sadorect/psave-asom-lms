<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Projectsave International</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Projectsave winning the lost building the saints" name="keywords">
        <meta content="ProjectSave Int'l Ministry, a.k.a HarvestField Ministry is a non- denominational Christian ministry that is committed to preaching the gospel of our Lord Jesus Christ to the nations of the world as commanded in Mark 16:15 and also to build the saints of God with the revealed truth of God's word (Acts 20:32). " name="description">

        <!-- Favicon -->
        <link href="{{ asset('/psave_logo.png')}}" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        
        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="{{ asset('landing/lib/flaticon/font/flaticon.css')}}" rel="stylesheet">
        <link href="{{ asset('landing/lib/animate/animate.min.css')}}" rel="stylesheet">
        <link href="{{ asset('landing/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
        <!-- Template Stylesheet -->
        <link href="{{ asset('landing/css/style.css')}}" rel="stylesheet">
        @livewireStyles
        <style>

            /* Styling for the scrolling container */
.scrolling-text-container {
  height: 350px; /* Set the height of the container */
  overflow: hidden; /* Hide the content that overflows */
  position: relative; /* Needed for absolute positioning of content */
}

/* Styling for the scrolling text */
.scrolling-text-content {
  position: absolute; /* Position the content absolutely */
  top: 0; /* Start at the top of the container */
  animation: scrollText 15s linear infinite; /* Apply the animation */
}

/* Keyframes for the scrolling animation */
@keyframes scrollText {
  from { top: 0; } /* Start position */
  to { top: -100%; } /* End position (negative height to scroll upwards) */
}
</style>
    </head>

    <body>
        @php
            $settings = \App\Models\Setting::all();
        @endphp
        <!-- Top Bar Start -->
        @foreach ($settings as $setting)
            
        
        <div class="top-bar d-none d-md-block">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="top-bar-left">
                            <div class="text">
                                <i class="fa fa-phone-alt"></i>
                                <p>+{{$setting->phone}}</p>
                            </div>
                            <div class="text">
                                <i class="fa fa-envelope"></i>
                                <p>{{$setting->email}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="top-bar-right">
                            <div class="social">
                                <a href="{{url('https://www.twitter.com/'.$setting->twitter)}}" target="_blank"><i class="fab fa-twitter"></i></a>
                                <a href="{{url('https://www.facebook.com/'.$setting->facebook)}}" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                <a href="{{url('https://www.linkedin.com/'.$setting->linkedin)}}" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                <a href="{{url('https://www.instagram.com/'.$setting->instagram)}}" target="_blank"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Bar End -->

        <!-- Nav Bar Start -->
        <div class="navbar navbar-expand-lg bg-dark navbar-dark">
            <div class="container-fluid">
                <a href="" class="navbar-brand"><img src="{{$setting->logo}}" alt="Projectsave Logo">Projectsave Int'l </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ml-auto">
                        <a href="/" class="nav-item nav-link {{ request()->is('/')? 'active' : ''}} ">Home</a>
                        <a href="{{route('about.page')}}" class="nav-item nav-link {{ request()->is('about')? 'active' : ''}}">About</a>
                        <a href="{{route('outreach.page')}}" class="nav-item nav-link {{ request()->is('outreach')? 'active' : ''}}">Outreaches</a>
                        <a href="{{route('events')}}" class="nav-item nav-link {{ request()->is('events')? 'active' : ''}}">Events</a>
                        <a href="{{route('asom')}}" class="nav-item nav-link {{ request()->is('asom')? 'active' : ''}}">Asom</a>
                        <a href="{{route('devotional.page')}}" class="nav-item nav-link {{ request()->is('devotional')? 'active' : ''}}">Devotional</a>
                        <a href="{{route('faq.page')}}" class="nav-item nav-link {{ request()->is('faqs')? 'active' : ''}}">FAQs</a>
                       
                        <a href="{{route('contact')}}" class="nav-item nav-link {{ request()->is('contact')? 'active' : ''}}">Contact</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Nav Bar End -->


        {{$slot}}

        <!-- Footer Start -->
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-contact">
                            <h2>Our Head Office</h2>
                            <p><i class="fa fa-map-marker-alt"></i>{{$setting->address}}</p>
                            <p><i class="fa fa-phone-alt"></i><a href="tel:+{{$setting->phone}}">+{{$setting->phone}}</a></p>
                            <p><i class="fa fa-envelope"></i><a href="mailto:{{$setting->email}}">{{$setting->email}}</a></p>
                            <div class="footer-social">
                                <a class="btn btn-custom" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-custom" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-custom" href=""><i class="fab fa-youtube"></i></a>
                                <a class="btn btn-custom" href=""><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-custom" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-link">
                            <h2>Popular Links</h2>
                            <a href="">About Us</a>
                            <a href="">Contact Us</a>
                            <a href="">Popular Causes</a>
                            <a href="">Upcoming Events</a>
                            <a href="">Latest Blog</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-link">
                            <h2>Useful Links</h2>
                            <a href="">Terms of use</a>
                            <a href="">Privacy policy</a>
                            <a href="">Cookies</a>
                            <a href="">Help</a>
                            <a href="">FQAs</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-newsletter">
                            <h2>Newsletter</h2>
                            <form>
                                <input class="form-control" placeholder="Email goes here">
                                <button class="btn btn-custom">Submit</button>
                                <label>Don't worry, we don't spam!</label>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container copyright">
                <div class="row">
                    <div class="col-md-6">
                        <p>&copy; <a href="#">{{$setting->sitename}}</a>, All Right Reserved.</p>
                    </div>
                    <div class="col-md-6">
                        <p>Designed By <a href="">{{$setting->credits}}</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->
        @endforeach
        <!-- Back to top button -->
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        
        <!-- Pre Loader -->
        <div id="loader" class="show">
            <div class="loader"></div>
        </div>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('landing/lib/easing/easing.min.js') }}"></script>
        <script src="{{ asset('landing/lib/owlcarousel/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('landing/lib/waypoints/waypoints.min.js') }}"></script>
        <script src="{{ asset('landing/lib/counterup/counterup.min.js') }}"></script>
        <script src="{{ asset('landing/lib/parallax/parallax.min.js') }}"></script>
        
      <!-- include libraries(jQuery, bootstrap) -->
{{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script> --}}
<!-- summernote css/js -->

<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>


        <!-- Contact Javascript File -->
        <script src="{{ asset('landing/mail/jqBootstrapValidation.min.js') }}"></script>
        <script src="{{ asset('landing/mail/contact.js') }}"></script>

        <!-- Template Javascript -->
        <script src="{{ asset('landing/js/main.js') }}"></script>
        @livewireScripts

        <!--script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script-->

<script>
  // Initialize Owl Carousel
  $(document).ready(function() {
    $("#team-carousel").owlCarousel({
      loop: true,
      margin: 30,
      responsiveClass: true,
      responsive: {
        0: {
          items: 1,
          nav: false
        },
        600: {
          items: 2,
          nav: false
        },
        1000: {
          items: 3,
          nav: false,
          loop: false
        }
      }
    });
  });
</script>
    </body>
</html>
