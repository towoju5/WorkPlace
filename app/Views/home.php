<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>School Portal :: e-Result</title>

    <!-- Google fonts -->
    <link href="//fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap" rel="stylesheet">

    <!-- Template CSS -->
    <link rel="stylesheet" href="https://demo.w3layouts.com/demos_new/template_demo/25-03-2020/skill-liberty-demo_Free/2146522038/web/assets/css/style-liberty.css">
</head>

<body>
    <meta name="robots" content="noindex">

    <body>
        <link rel="stylesheet" href="<?= base_url() ?>/assets/home/css/font-awesome.min.css">
        <div id="right-sidebar" class="right-sidebar-notifcations nav-collapse">
            <div class="bs-example bs-example-tabs right-sidebar-tab-notification" data-example-id="togglable-tabs">
                <div class="right-sidebar-panel-content animated fadeInRight" tabindex="5003"
                    style="overflow: hidden; outline: none;">
                </div>
            </div>
        </div>
        </div>

        <!-- header -->
        <header class="w3l-header">
            <div class="hero-header-11">
                <div class="hero-header-11-content">
                    <div class="container">
                        <nav class="navbar navbar-expand-lg navbar-light py-md-2 py-0 px-0">
                            <a class="navbar-brand" href="<?= base_url() ?>"><img
                                    src="<?= base_url() ?>/assets/home/images/logo-icon.png" alt="" />Skill</a>
                            <!-- if logo is image enable this   
				<a class="navbar-brand" href="#<?= base_url() ?>">
						<img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
				</a> -->
                            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                                <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                            </button>

                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav ml-auto">
                                    <!-- <li class="nav-item active">
                                        <a class="nav-link" href="<?= base_url() ?>">Home <span
                                                class="sr-only">(current)</span></a>
                                    </li> -->
                                    <!-- <li class="nav-item @@about-active">
                                        <a class="nav-link" href="about.html">Login</a>
                                    </li>
                                    <li class="nav-item @@services-active">
                                        <a class="nav-link" href="services.html">Services</a>
                                    </li>
                                    <li class="nav-item @@courses-active">
                                        <a class="nav-link" href="courses.html">Courses</a>
                                    </li>
                                    <li class="nav-item dropdown @@dropdown-active">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Pages
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item  @@gallery-active" href="gallery.html">Gallery</a>
                                            <a class="dropdown-item" href="login.html">Login</a>
                                            <a class="dropdown-item" href="<?= base_url('login') ?>">Signup</a>
                                            <a class="dropdown-item" href="landing-single.html">Landing Single</a>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown @@blog-dropdown-active">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Blog
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item @@blog-active" href="blog.html">Blog</a>
                                            <a class="dropdown-item @@blog-single-active" href="blog-single.html">Single
                                                Post</a>
                                        </div>
                                    </li>
                                    <li class="nav-item @@contact-active">
                                        <a class="nav-link" href="contact.html">Contact</a>
                                    </li> -->
                                </ul>
                                <div class="form-inline ml-lg-3">
                                    <a href="<?= base_url('login') ?>" class="btn btn-primary theme-button">Staff Login</a>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <!-- //header -->
        <!--  Main banner section -->
        <section class="w3l-main-banner">
            <div class="companies20-content">
                <div class="companies-wrapper">
                    <div class="container">
                        <div class="banner-item">
                            <div class="banner-view">
                                <div class="banner-info">
                                    <h3 class="banner-text">
                                        Learn Anytime, Anywhere.<br> Accelerate Your Future.
                                    </h3>
                                    <p class="my-4 mb-sm-5">We believe everyone has the capacity to be creative. Skill
                                        is a place where people develop their own potential.
                                    </p><br>
                                    <a href="<?= base_url('login') ?>" class="btn btn-primary theme-button mr-3">Staff Portal</a>
                                    <a href="<?= base_url('e-result') ?>" class="btn btn-outline-primary theme-button">Check Result</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--  //Main banner section -->
        <!-- jQuery and Bootstrap JS -->
        <script src="<?= base_url() ?>/assets/home/js/jquery-3.3.1.min.js"></script>
        <script src="<?= base_url() ?>/assets/home/js/bootstrap.min.js"></script>

        <!-- Template JavaScript -->

        <!-- stats number counter-->
        <script src="<?= base_url() ?>/assets/home/js/jquery.waypoints.min.js"></script>
        <script src="<?= base_url() ?>/assets/home/js/jquery.countup.js"></script>
        <script>
        $('.counter').countUp();
        </script>
        <!-- //stats number counter -->


        <!-- testimonials owlcarousel -->
        <script src="<?= base_url() ?>/assets/home/js/owl.carousel.js"></script>

        <!-- script for owlcarousel -->
        <script>
        $(document).ready(function() {
            $('.owl-one').owlCarousel({
                loop: true,
                margin: 0,
                nav: false,
                responsiveClass: true,
                autoplay: false,
                autoplayTimeout: 5000,
                autoplaySpeed: 1000,
                autoplayHoverPause: false,
                responsive: {
                    0: {
                        items: 1,
                        nav: false
                    },
                    480: {
                        items: 1,
                        nav: false
                    },
                    667: {
                        items: 1,
                        nav: false
                    },
                    1000: {
                        items: 1,
                        nav: false
                    }
                }
            })
        })
        </script>
        <!-- //script for owlcarousel -->
        <!-- //testimonials owlcarousel -->

        <!-- script for courses -->
        <script>
        $(document).ready(function() {
            $('.owl-two').owlCarousel({
                loop: true,
                margin: 30,
                nav: false,
                responsiveClass: true,
                autoplay: false,
                autoplayTimeout: 5000,
                autoplaySpeed: 1000,
                autoplayHoverPause: false,
                responsive: {
                    0: {
                        items: 1,
                        nav: false
                    },
                    480: {
                        items: 1,
                        nav: false
                    },
                    667: {
                        items: 2,
                        nav: false
                    },
                    1000: {
                        items: 3,
                        nav: false
                    }
                }
            })
        })
        </script>
        <!-- //script for courses -->

        <!-- disable body scroll which navbar is in active -->
        <script>
        $(function() {
            $('.navbar-toggler').click(function() {
                $('body').toggleClass('noscroll');
            })
        });
        </script>
        <!-- disable body scroll which navbar is in active -->

        <!-- gallery lightbox -->
        <script src="<?= base_url() ?>/assets/home/js/smartphoto.js"></script>
        <script>
        document.addEventListener('DOMContentLoaded', function() {
            const sm = new SmartPhoto(".js-img-viwer", {
                showAnimation: false
            });
            // sm.destroy();
        });
        </script>
        <!-- gallery lightbox -->



        <div id="v-w3layouts"></div>
        <script>
        (function(v, d, o, ai) {
            ai = d.createElement('script');
            ai.defer = true;
            ai.async = true;
            ai.src = v.location.protocol + o;
            d.head.appendChild(ai);
        })(window, document, '//a.vdo.ai/core/v-w3layouts/vdo.ai.js');
        </script>
    </body>

</html>