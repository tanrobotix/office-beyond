<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <title>Wework - Working together</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="favicon.ico">

    <!--Google Font link-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="fonts/themify-icons.css">
    <link href="https://fortawesome.github.io/Font-Awesome/assets/font-awesome/css/font-awesome.css" rel="stylesheet">


    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slick-theme.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/fonticons.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/bootsnav.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">


    <!--For Plugins external css-->
    <!--<link rel="stylesheet" href="css/plugins.css" />-->

    <!--Theme custom css -->
    <link rel="stylesheet" href="css/style.css">
    <!--<link rel="stylesheet" href="css/colors/maron.css">-->

    <!--Theme Responsive css-->
    <link rel="stylesheet" href="css/responsive.css" />

    <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>

<body data-spy="scroll" data-target=".navbar-collapse">


    <!-- Preloader -->
    <div id="loading">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <div class="object" id="object_one"></div>
                <div class="object" id="object_two"></div>
                <div class="object" id="object_three"></div>
                <div class="object" id="object_four"></div>
            </div>
        </div>
    </div><!--End off Preloader -->


    <div class="culmn">
        <!--Home page style-->


        <nav class="navbar navbar-default navbar-fixed white no-background bootsnav">
            <!-- Start Top Search -->
            <div class="top-search">
                <div class="container">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-search"></i></span>
                        <input type="text" class="form-control" placeholder="Search">
                        <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
                    </div>
                </div>
            </div>
            <!-- End Top Search -->

            <div class="container">

                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand text-white" href="#brand">

                        <img src="images/logo.png" class="logo logo-display m-top-10" alt="">
                        <img src="images/logo.jpg" class="logo logo-scrolled" alt="">
                    </a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">

                    <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                        @if (Route::has('login'))
                        @auth   
                        <li><a href="#hello">Hello</a></li>                    
                        <li><a href="{{ route('login') }}">Profile</a></li>
                        @else
                        <li><a href="#hello">Hello</a></li>                    
                        <li><a href="#about">About</a></li>                    
                        <li><a href="#service">Services</a></li>                    
                        <li><a href="#portfolio">Portfolio</a></li>                    
                        <li><a href="#pricing">Pricing</a></li>                    
                        <li><a href="#contact">Contact</a></li>      
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>
                        @endauth
                        @endif

                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>  


            <!-- Start Side Menu -->
            <div class="side">
                <a href="#" class="close-side"><i class="fa fa-times"></i></a>
                <div class="widget">
                    <h6 class="title">Custom Pages</h6>
                    <ul class="link">
                        <li><a href="#">About</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Portfolio</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
                <div class="widget">
                    <h6 class="title">Additional Links</h6>
                    <ul class="link">
                        <li><a href="#">Retina Homepage</a></li>
                        <li><a href="#">New Page Examples</a></li>
                        <li><a href="#">Parallax Sections</a></li>
                        <li><a href="#">Shortcode Central</a></li>
                        <li><a href="#">Ultimate Font Collection</a></li>
                    </ul>
                </div>
            </div>
            <!-- End Side Menu -->

        </nav>


        <!--Home Sections-->

        <section id="hello" class="home bg-mega">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="main_home">
                        <div class="home_text">
                            <h1 class="text-white">OUR WORK <br/>IS ALL FOR YOU</h1>
                        </div>
                        <div class="main_subscribe">
                            <div class="subscribe_btns">
                                <form class="form-inline">
                                    <div class="form-group">
                                        <select class="form-control" placeholder="SELECT A CITY" style="width: 100%;">
                                            <optgroup label="Tokyo">
                                                <option>Area 1</option>
                                                <option>Area 1</option>
                                                <option>Area 1</option>
                                            </optgroup>
                                            <optgroup label="Ho Chi Minh">
                                                <option>Area 1</option>
                                                <option>Area 1</option>
                                                <option>Area 1</option>
                                                <option>Area 2</option>
                                            </optgroup>
                                            <optgroup label="Melbourne">
                                                <option>Area 1</option>
                                                <option>Area 1</option>
                                                <option>Area 1</option>
                                                <option>Area 1</option>
                                            </optgroup>
                                            <optgroup label="Seoul">
                                                <option>Area 1</option>
                                                <option>Area 1</option>
                                                <option>Area 1</option>
                                                <option>Area 1</option>
                                            </optgroup>
                                        </select>
                                    </div>

                                    <button type="submit" class="btn btn-primary">SEEK OFFICE</button>
                                </form>
                            </div>
                            
                        </div>
                        <div>
                            <a href="https://bootstrapthemes.co" target="_blank" class="btn btn-primary m-top-20">GET STARTED</a>
                            <a href="https://bootstrapthemes.co" target="_blank" class="btn btn-default m-top-20">DOWNLOAD NOW</a>
                        </div>

                    </div>
                </div><!--End off row-->
            </div><!--End off container -->
        </section> <!--End off Home Sections-->


        <!--About Sections-->
        <section id="about" class="about roomy-100">
            <div class="container">
                <div class="row">
                    <div class="main_about">
                        <div class="col-md-6">
                            <div class="about_content">
                                <h2>ABOUT US</h2>
                                <div class="separator_left"></div>

                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, 
                                    sed diam nonummy nibh euismod tincidunt ut laoreet dolore 
                                    magna aliquam erat volutpat. Ut wisi enim ad minim veniam, 
                                    quis nostrud exerci tation ullamcorper suscipit lobortis 
                                    nisl ut aliquip ex ea commodo consequat. Lorem ipsum dolor
                                    sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                                    euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                    Ut wisi enim ad minim veniam, quis nostrud exerci tation 
                                    ullamcorper suscipit lobortis nisl ut aliquip 
                                ex ea commodo consequat. </p>

                                <div class="about_btns m-top-40">
                                    <a href="" class="btn btn-primary">DOWNLOAD NOW</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="about_accordion wow fadeIn">
                                <div id="faq_main_content" class="faq_main_content">
                                    <h6><i class="fa fa-angle-right"></i> UNIQUE DESIGN </h6>
                                    <div>
                                        <div class="content">
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                                                sed diam nonummy nibh euismod tincidunt ut laoreet dolore 
                                            magna aliquam erat volutpat. Ut wisi enim ad minim veniam, </p>

                                        </div>
                                    </div> <!-- End off accordion item-1 -->

                                    <h6 class="open"><i class="fa fa-angle-right"></i> EXPERIENCE TEAM</h6>
                                    <div class="open">
                                        <div class="content">
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                                                sed diam nonummy nibh euismod tincidunt ut laoreet dolore 
                                            magna aliquam erat volutpat. Ut wisi enim ad minim veniam, </p>
                                        </div>
                                    </div> <!-- End off accordion item-2 -->

                                    <h6> <i class="fa fa-angle-right"></i> GREAT SERVICE </h6>
                                    <div>
                                        <div class="content">
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                                                sed diam nonummy nibh euismod tincidunt ut laoreet dolore 
                                            magna aliquam erat volutpat. Ut wisi enim ad minim veniam, </p>
                                        </div>
                                    </div> <!-- End off accordion item-3 -->

                                    <h6><i class="fa fa-angle-right"></i> FREE UPDATES </h6>
                                    <div>
                                        <div class="content">
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                                                sed diam nonummy nibh euismod tincidunt ut laoreet dolore 
                                            magna aliquam erat volutpat. Ut wisi enim ad minim veniam, </p>
                                        </div>
                                    </div> <!-- End off accordion item-4 -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--End off row-->
            </div><!--End off container -->
            <br />
            <br />
            <br />
            <br />
            <hr />
            <br />
            <br />
            <div class="container">
                <div class="row">
                    <div class="about_bottom_content">
                        <div class="col-md-4">
                            <div class="about_bottom_item m-top-20">
                                <div class="ab_head">
                                    <div class="ab_head_icon">
                                        <i class="icofont icofont-fire-burn"></i>
                                    </div>
                                    <h6 class="m-top-20"> WE’RE CREATIVE</h6>
                                </div>
                                <p class="m-top-20">Lorem ipsum dolor sit amet, consectetuer adipiscing ealit, 
                                    sed diaim nonummy nibsih euismod tincidiunt laorieet doloire
                                magna diam aliquafm erat voluitpati. </p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="about_bottom_item m-top-20">
                                <div class="ab_head">
                                    <div class="ab_head_icon">
                                        <i class="icofont icofont-speech-comments"></i>
                                    </div>
                                    <h6 class="m-top-20">WE'RE FRIENDLY</h6>
                                </div>
                                <p class="m-top-20">Lorem ipsum dolor sit amet, consectetuer adipiscing ealit, 
                                    sed diaim nonummy nibsih euismod tincidiunt laorieet doloire
                                magna diam aliquafm erat voluitpati. </p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="about_bottom_item m-top-20">
                                <div class="ab_head">
                                    <div class="ab_head_icon">
                                        <i class="icofont icofont-heart"></i>
                                    </div>
                                    <h6 class="m-top-20">WE LOVE MINIMALISM</h6>
                                </div>
                                <p class="m-top-20">Lorem ipsum dolor sit amet, consectetuer adipiscing ealit, 
                                    sed diaim nonummy nibsih euismod tincidiunt laorieet doloire
                                magna diam aliquafm erat voluitpati. </p>
                            </div>
                        </div>
                    </div>
                </div><!--End off row-->
            </div><!--End off container -->
        </section> <!--End off About section -->


        <!--Video section-->
        <section id="video" class="video">
            <div class="overlay"></div>
            <div class="main_video roomy-100 m-top-100 m-bottom-100 text-center">
                <div class="video_text text-center">
                    <a href="http://www.youtube.com/watch?v=7HKoqNJtMTQ" class="video-link"><span class="fa fa-play"></span></a>
                </div>
            </div>
        </section><!--End off video section -->


        <div class="container">
            <div class="row">
                <div class="main_featured m-top-100">
                    <div class="col-sm-12">
                        <div class="head_title text-center">
                            <h2>FEATURED WORK</h2>
                            <div class="separator_auto"></div>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, 
                                sed diam nonummy nibh euismod nostrud exerci tation ullamcorper 
                            suscipit lobortis nisl ut aliquip ex ea commodo consequat. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="featured_slider">
            <div>
                <div class="featured_img">
                    <img src="images/fprojects/1.jpg" alt="" />
                    <a href="images/fprojects/1.jpg" class="popup-img"></a>
                </div>
            </div>
            <div>
                <div class="featured_img">
                    <img src="images/fprojects/2.jpg" alt="" />
                    <a href="images/fprojects/2.jpg" class="popup-img"></a>
                </div>
            </div>
            <div>
                <div class="featured_img">
                    <img src="images/fprojects/3.jpg" alt="" />
                    <a href="images/fprojects/3.jpg" class="popup-img"></a>
                </div>
            </div>
            <div>
                <div class="featured_img">
                    <img src="images/fprojects/4.jpg" alt="" />
                    <a href="images/fprojects/4.jpg" class="popup-img"></a>
                </div>
            </div>
            <div>
                <div class="featured_img">
                    <img src="images/fprojects/5.jpg" alt="" />
                    <a href="images/fprojects/5.jpg" class="popup-img"></a>
                </div>
            </div>
        </div><!-- End off featured slider -->



        <!--Service Section-->
        <section id="service" class="service">
            <div class="container">
                <div class="row">
                    <div class="main_service roomy-100">
                        <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                            <div class="head_title text-center">
                                <h2>OUR SERVICES</h2>
                                <div class="separator_auto"></div>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, 
                                    sed diam nonummy nibh euismod nostrud exerci tation ullamcorper 
                                suscipit lobortis nisl ut aliquip ex ea commodo consequat. </p>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="service_item">
                                <i class="icofont icofont-light-bulb"></i>
                                <h6 class="m-top-30">BRANDING</h6>
                                <div class="separator_small"></div>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, 
                                    sed diam nonummy nibh euismod tincidunt ut laoreet dolore 
                                magna aliquam erat volutpat. </p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="service_item">
                                <i class="icofont icofont-imac"></i>
                                <h6 class="m-top-30">BRANDING</h6>
                                <div class="separator_small"></div>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, 
                                    sed diam nonummy nibh euismod tincidunt ut laoreet dolore 
                                magna aliquam erat volutpat. </p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="service_item">
                                <i class="icofont icofont-video"></i>
                                <h6 class="m-top-30">BRANDING</h6>
                                <div class="separator_small"></div>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, 
                                    sed diam nonummy nibh euismod tincidunt ut laoreet dolore 
                                magna aliquam erat volutpat. </p>
                            </div>
                        </div>
                    </div>
                </div><!--End off row -->
            </div><!--End off container -->
        </section> <!--End off Featured section-->


        <!--Impress section-->
        <section id="impress" class="impress roomy-100">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="main_impress text-center">
                        <div class="col-sm-8 col-sm-offset-2">
                            <h2 class="text-white text-uppercase">Impressed?  Let’s work together</h2>
                            <p class="m-top-40 text-white">At vero eos et accusamus et iusto odio dignissimos ducimus qui ditqs praesentium 
                            voluptatum deleniti atque corrupti quos dolores et quas molestias</p>

                            <div class="impress_btns m-top-30">
                                <a href="" class="btn btn-primary m-top-20">HIRE US</a>
                                <a href="" class="btn btn-default m-top-20">HIRE US</a>
                            </div>
                        </div>
                    </div>
                </div><!--End off row -->
            </div><!--End off container -->
        </section><!-- End off Impress section-->




        <!--Portfolio Section-->
        <section id="portfolio" class="portfolio lightbg">
            <div class="container">
                <div class="row">
                    <div class="main_portfolio roomy-100">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="head_title text-center">
                                <h2>OUR PORTOFLIO</h2>
                                <div class="separator_auto"></div>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, 
                                    sed diam nonummy nibh euismod nostrud exerci tation ullamcorper 
                                suscipit lobortis nisl ut aliquip ex ea commodo consequat. </p>
                            </div>
                        </div>

                        <div class="portfolio_content">
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="portfolio_item">
                                            <img src="images/Portfolio/2.jpg" alt="" />
                                            <div class="portfolio_hover text-center">
                                                <h6 class="text-uppercase text-white">Title</h6>
                                                <p class=" text-white">Lorem ipsum dolor sit amet</p>
                                                <div class="portfolio_hover_icon">
                                                    <a href="images/Portfolio/2.jpg" class="popup-img"><i class="fa fa-expand"></i></a>
                                                    <a href=""><i class="fa fa-search"></i></a>
                                                </div>
                                            </div>
                                        </div>  
                                    </div>
                                    <div class="col-md-6 m-top-30">
                                        <div class="portfolio_item portfolio_item2">
                                            <img src="images/Portfolio/3.jpg" alt="" />
                                            <div class="portfolio_hover text-center">
                                                <h6 class="text-uppercase text-white">Title</h6>
                                                <p class=" text-white">Lorem ipsum dolor sit amet</p>
                                                <div class="portfolio_hover_icon">
                                                    <a href="images/Portfolio/3.jpg" class="popup-img"><i class="fa fa-expand"></i></a>
                                                    <a href=""><i class="fa fa-search"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 m-top-30">
                                        <div class="portfolio_item portfolio_item2">
                                            <img src="images/Portfolio/5.jpg" alt="" />
                                            <div class="portfolio_hover text-center">
                                                <h6 class="text-uppercase text-white">Title</h6>
                                                <p class=" text-white">Lorem ipsum dolor sit amet</p>
                                                <div class="portfolio_hover_icon">
                                                    <a href="images/Portfolio/5.jpg" class="popup-img"><i class="fa fa-expand"></i></a>
                                                    <a href=""><i class="fa fa-search"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="portfolio_item portfolio_item3 sm-m-top-30">
                                    <img src="images/Portfolio/1.jpg" alt="" />
                                    <div class="portfolio_hover text-center">
                                        <h6 class="text-uppercase text-white">Title</h6>
                                        <p class=" text-white">Lorem ipsum dolor sit amet</p>
                                        <div class="portfolio_hover_icon">
                                            <a href="images/Portfolio/1.jpg" class="popup-img"><i class="fa fa-expand"></i></a>
                                            <a href=""><i class="fa fa-search"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 m-top-30">
                                <div class="portfolio_item portfolio_item2">
                                    <img src="images/Portfolio/6.jpg" alt="" />
                                    <div class="portfolio_hover text-center">
                                        <h6 class="text-uppercase text-white">Title</h6>
                                        <p class=" text-white">Lorem ipsum dolor sit amet</p>
                                        <div class="portfolio_hover_icon">
                                            <a href="images/Portfolio/6.jpg" class="popup-img"><i class="fa fa-expand"></i></a>
                                            <a href=""><i class="fa fa-search"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8 m-top-30">
                                <div class="portfolio_item">
                                    <img src="images/Portfolio/4.jpg" alt="" />
                                    <div class="portfolio_hover text-center">
                                        <h6 class="text-uppercase text-white">Title</h6>
                                        <p class=" text-white">Lorem ipsum dolor sit amet</p>
                                        <div class="portfolio_hover_icon">
                                            <a href="images/Portfolio/4.jpg" class="popup-img"><i class="fa fa-expand"></i></a>
                                            <a href=""><i class="fa fa-search"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div><!--End off row -->
            </div><!--End off container -->
        </section><!-- End off Portfolio section-->


        <!--Skill Sections-->
        <section id="skill" class="skill roomy-100">
            <div class="container">

                <div class="main_skill">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="skill_content wow fadeIn">
                                <h2>Our skill</h2>
                                <div class="separator_left"></div>

                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, 
                                    sed diam nonummy nibh euismod tincidunt ut laoreet dolore 
                                    magna aliquam erat volutpat. Ut wisi enim ad minim veniam, 
                                    quis nostrud exerci tation ullamcorper suscipit lobortis 
                                    nisl ut aliquip ex ea commodo consequat. Lorem ipsum dolor
                                    sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                                    euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                    Ut wisi enim ad minim veniam, quis nostrud exerci tation 
                                    ullamcorper suscipit lobortis nisl ut aliquip 
                                ex ea commodo consequat. </p>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="skill_bar sm-m-top-50">    
                                <div class="teamskillbar clearfix m-top-20" data-percent="80%">
                                    <h6>GRAPHIC DESIGN</h6>
                                    <div class="teamskillbar-bar"></div>
                                </div> <!-- End Skill Bar -->

                                <div class="teamskillbar clearfix m-top-50" data-percent="75%">
                                    <h6>TYPOGRAPHY</h6>
                                    <div class="teamskillbar-bar"></div>
                                </div> <!-- End Skill Bar -->

                                <div class="teamskillbar clearfix m-top-50" data-percent="90%">
                                    <h6>HTML / CSS</h6>
                                    <div class="teamskillbar-bar"></div>
                                </div> <!-- End Skill Bar -->
                            </div>
                        </div>
                    </div><!--End off row-->
                </div>
                
            </div><!--End off container -->
            <br />
            <br />
            <br />
            <hr />
            <br />
            <br />
            <br />
            <div class="container">
                <div class="skill_bottom_content text-center">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="skill_bottom_item">
                                <h2 class="statistic-counter">3468</h2>
                                <div class="separator_small"></div>
                                <h5><em>Projects Finished</em></h5>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="skill_bottom_item">
                                <h2 class="statistic-counter">4638</h2>
                                <div class="separator_small"></div>
                                <h5><em>Happy Clients</em></h5>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="skill_bottom_item">
                                <h2 class="statistic-counter">3468</h2>
                                <div class="separator_small"></div>
                                <h5><em>Hours of work</em></h5>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="skill_bottom_item">
                                <h2 class="statistic-counter">3468</h2>
                                <div class="separator_small"></div>
                                <h5><em>Cup of coffee</em></h5>
                            </div>
                        </div>
                    </div><!--End off row-->
                </div>  
            </div><!--End off container -->
        </section> <!--End off Skill section -->



        <!--Testimonial Section-->
        <section id="testimonial" class="testimonial fix">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="main_testimonial roomy-100">
                        <div class="head_title text-center">
                            <h2 class="text-white">OUR TESTIMONIALS</h2>
                        </div>
                        <div class="testimonial_slid text-center">
                            <div class="testimonial_item">
                                <div class="col-sm-10 col-sm-offset-1">
                                    <p class="text-white">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy 
                                        nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. 
                                        Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper 
                                    suscipit lobortis nisl ut aliquip ex ea commodo consequat. </p>

                                    <div class="test_authour m-top-30">
                                        <h6 class="text-white m-bottom-20">JOHN DOE - THEMEFOREST USER</h6>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial_item">
                                <div class="col-sm-10 col-sm-offset-1">
                                    <p class="text-white">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy 
                                        nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. 
                                        Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper 
                                    suscipit lobortis nisl ut aliquip ex ea commodo consequat. </p>

                                    <div class="test_authour m-top-30">
                                        <h6 class="text-white m-bottom-20">JOHN DOE - THEMEFOREST USER</h6>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial_item">
                                <div class="col-sm-10 col-sm-offset-1">
                                    <p class="text-white">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy 
                                        nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. 
                                        Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper 
                                    suscipit lobortis nisl ut aliquip ex ea commodo consequat. </p>

                                    <div class="test_authour m-top-30">
                                        <h6 class="text-white m-bottom-20">JOHN DOE - THEMEFOREST USER</h6>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial_item">
                                <div class="col-sm-10 col-sm-offset-1">
                                    <p class="text-white">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy 
                                        nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. 
                                        Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper 
                                    suscipit lobortis nisl ut aliquip ex ea commodo consequat. </p>

                                    <div class="test_authour m-top-30">
                                        <h6 class="text-white m-bottom-20">JOHN DOE - THEMEFOREST USER</h6>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--End off row-->
            </div><!--End off container -->
        </section> <!--End off Testimonial section -->


        <!--Pricing Section-->
        <section id="pricing" class="pricing lightbg">
            <div class="container">

                <div class="main_pricing roomy-100">
                    <div class="col-md-12 col-md-offset-2 col-sm-12">
                        <div class="head_title text-center">
                            <h2>OUR PRICING</h2>
                            <div class="separator_auto"></div>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                                sed diam nonummy nibh euismod tincidunt tation ullamcorper 
                            suscipit lobortis nisl ut aliquip ex ea commodo consequat. </p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4 col-sm-12">
                            <div class="pricing_item">
                                <div class="pricing_head p-top-30 p-bottom-100 text-center">
                                    <h3 class="text-uppercase">STARTER</h3>
                                </div>
                                <div class="pricing_price_border text-center">
                                    <div class="pricing_price">
                                        <h3 class="text-white">$19</h3>
                                        <p class="text-white">per month</p>
                                    </div>
                                </div>

                                <div class="pricing_body bg-white p-top-110 p-bottom-60">
                                    <ul>
                                        <li><i class="fa fa-check-circle text-primary"></i> <span>10</span> user</li>
                                        <li class="disabled"><i class="fa fa-times-circle"></i> Unlimited Bandwidth</li>
                                        <li class="disabled"><i class="fa fa-times-circle"></i> Full Statistics</li>

                                    </ul>
                                    <div class="pricing_btn text-center m-top-40">
                                        <a href="" class="btn btn-primary">CHOOSE PLAN</a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End off col-md-4 -->

                        <div class="col-md-4 col-sm-12">
                            <div class="pricing_item sm-m-top-30">
                                <div class="pricing_top_border"></div>
                                <div class="pricing_head p-top-30 p-bottom-100 text-center">
                                    <h3 class="text-uppercase">PREMIUM</h3>
                                </div>
                                <div class="pricing_price_border text-center">
                                    <div class="pricing_price">
                                        <h3 class="text-white">$39</h3>
                                        <p class="text-white">per month</p>
                                    </div>
                                </div>

                                <div class="pricing_body bg-white p-top-110 p-bottom-60">
                                    <ul>
                                        <li><i class="fa fa-check-circle text-primary"></i> <span>50</span> user</li>
                                        <li><i class="fa fa-check-circle text-primary"></i> Unlimited Bandwidth</li>
                                        <li class="disabled"><i class="fa fa-times-circle"></i> Full Statistics</li>
                                    </ul>
                                    <div class="pricing_btn text-center m-top-40">
                                        <a href="" class="btn btn-primary">CHOOSE PLAN</a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End off col-md-4 -->

                        <div class="col-md-4 col-sm-12">
                            <div class="pricing_item sm-m-top-30">
                                <div class="pricing_head p-top-30 p-bottom-100 text-center">
                                    <h3 class="text-uppercase">bUSINESS</h3>
                                </div>
                                <div class="pricing_price_border text-center">
                                    <div class="pricing_price">
                                        <h3 class="text-white">$99</h3>
                                        <p class="text-white">per month</p>
                                    </div>
                                </div>

                                <div class="pricing_body bg-white p-top-110 p-bottom-60">
                                    <ul>
                                        <li><i class="fa fa-check-circle text-primary"></i> Unlimited Users</li>
                                        <li><i class="fa fa-check-circle text-primary"></i> Unlimited Bandwidth</li>
                                        <li><i class="fa fa-check-circle text-primary"></i> Full Statistics</li>
                                    </ul>
                                    <div class="pricing_btn text-center m-top-40">
                                        <a href="" class="btn btn-primary">CHOOSE PLAN</a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End off col-md-4 -->
                    </div>

                </div>
                
            </div><!--End off container -->
        </section> <!--End off Pricing section -->



        <!--client brand section-->
        <section id="cbrand" class="cbrand">
            <div class="container">

                <div class="main_cbrand text-center roomy-100">
                    <div class="row">
                        <div class="col-md-2 col-sm-4 col-xs-6">
                            <div class="cbrand_item m-bottom-10">
                                <a href=""><img src="images/clients/1.jpg" alt="" /></a>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-6">
                            <div class="cbrand_item m-bottom-10">
                                <a href=""><img src="images/clients/2.jpg" alt="" /></a>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-6">
                            <div class="cbrand_item m-bottom-10">
                                <a href=""><img class="" src="images/clients/5.jpg" alt="" /></a>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-6">
                            <div class="cbrand_item m-bottom-10">
                                <a href=""><img src="images/clients/4.jpg" alt="" /></a>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-6">
                            <div class="cbrand_item m-bottom-10">
                                <a href=""><img src="images/clients/3.jpg" alt="" /></a>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-6">
                            <div class="cbrand_item m-bottom-10">
                                <a href=""><img src="images/clients/1.jpg" alt="" /></a> 
                            </div>
                        </div>
                    </div>
                </div>
                
            </div><!-- End off container -->
        </section><!-- End off Cbrand section -->


        <!--Subscribe section-->
        <section id="subscribe" class="subscribe roomy-100 fix">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="main_subscribe text-center">
                        <div class="col-sm-8 col-sm-offset-2">
                            <h2 class="text-white">SUBSCRIBE US</h2>
                            <p class="m-top-30 text-white">At vero eos et accusamus et iusto odio dignissimos 
                            ducimus qui blanditiis praesentium</p>
                        </div>
                        <div class="col-sm-10 col-sm-offset-1">
                            <div class="subscribe_btns m-top-40">

                                <form class="form-inline">
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="inputEmail2" placeholder="Email Address">
                                    </div>
                                    <button type="submit" class="btn btn-primary">SUBSCRIBE</button>
                                </form>
                            </div>
                        </div>

                    </div>
                </div><!--End off row -->
            </div><!--End off container -->
        </section><!-- End off Impress section-->



        <!--Blog Section-->
        <section id="blog" class="blog">
            <div class="container">
                
                    <div class="main_blog text-center roomy-100">
                        <div class="col-sm-12 col-sm-offset-2">
                            <div class="head_title text-center">
                                <h2>RECENT BLOGS</h2>
                                <div class="separator_auto"></div>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                                    sed diam nonummy nibh euismod tincidunt tation ullamcorper 
                                suscipit lobortis nisl ut aliquip ex ea commodo consequat. </p>
                            </div>
                        </div>
                        <div class="row">
                        <div class="col-md-4">
                            <div class="blog_item m-top-20">
                                <div class="blog_item_img">
                                    <img src="images/Blog/1.jpg" alt="" />
                                </div>
                                <div class="blog_text roomy-40">
                                    <h6>PLEASUARE WITHOUT CONSCIENCE</h6>
                                    <p><em><a href="">May 15, 2016</a> /<a href="">admin</a>/<a href=""> Co-working</a></em></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="blog_item m-top-20">
                                <div class="blog_item_img">
                                    <img src="images/Blog/2.jpg" alt="" />
                                </div>
                                <div class="blog_text roomy-40">
                                    <h6>PLEASUARE WITHOUT CONSCIENCE</h6>
                                    <p><em><a href="">May 15, 2016</a> /<a href="">admin</a>/<a href=""> Co-working</a></em></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="blog_item m-top-20">
                                <div class="blog_item_img">
                                    <img src="images/Blog/3.jpg" alt="" />
                                </div>
                                <div class="blog_text roomy-40">
                                    <h6>PLEASUARE WITHOUT CONSCIENCE</h6>
                                    <p><em><a href="">May 15, 2016</a> /<a href="">admin</a>/<a href=""> Co-working</a></em></p>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                
            </div><!--End off container -->
        </section><!-- End off Blog section-->



        <!--Maps Section-->
        <div class="main_maps text-center fix">
            <div class="overlay"></div>
            <div class="maps_text">
                <h3 class="text-white" onclick="showmap()">FIND US ON THE MAP <i class="fa fa-angle-down"></i></h3>
                <div id="map_canvas" class="mapheight"></div>
            </div>
        </div><!-- End off Maps Section-->



        <!--Contact Us Section-->
        <section id="contact" class="contact bg-mega fix">
            <div class="container">

                <div class="main_contact roomy-100 text-white">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="rage_widget">
                                <div class="widget_head">
                                    <h3 class="text-white">RAGE</h3>
                                    <div class="separator_small"></div>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, 
                                    sed diam nonummy nibh euismod tincidunt ut laoreet dolore 
                                    magna aliquam erat volutpat. Ut wisi enim ad minim veniam, 
                                    quis nostrud exerci tation ullamcorper suscipit lobortis nisl
                                ut aliquip ex ea commodo consequat. </p>

                                <div class="widget_socail m-top-30">
                                    <ul class="list-inline">
                                        <div class="row">
                                            <li class="col-md-2"><a href=""><i class="fa fa-facebook"></i></a></li>
                                            <li class="col-md-2"><a href=""><i class="fa fa-twitter"></i></a></li>
                                            <li class="col-md-2"><a href=""><i class="fa fa-linkedin"></i></a></li>
                                            <li class="col-md-2"><a href=""><i class="fa fa-vimeo"></i></a></li>
                                            <li class="col-md-2"><a href=""><i class="fa fa-instagram"></i></a></li>
                                        </div>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 sm-m-top-30">
                            <form class="" action="subcribe.php">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group"> 
                                            <input id="first_name" name="first_name" type="text" placeholder="Name" class="form-control" required="">
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">  
                                            <input id="phone" name="phone" type="text" placeholder="Phone" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="form-group">  
                                            <textarea class="form-control" rows="6" placeholder="Message"></textarea>
                                        </div>
                                        <div class="form-group text-center">
                                            <a href="" class="btn btn-primary">SEND MESSAGE</a>
                                        </div>
                                    </div>

                                </div>

                            </form>
                        </div>
                    </div>
                </div>
                
            </div><!--End off container -->
        </section><!--End off Contact Section-->


        <!-- scroll up-->
        <div class="scrollup">
            <a href="#"><i class="fa fa-chevron-up"></i></a>
        </div><!-- End off scroll up -->

        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 footerleft">
                        <div class="logofooter"> Logo</div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.</p>
                        <p><i class="ti-location-pin"></i> Dorm B, Vietnam National University - University of Information Technology</p>
                        <p><i class="ti-mobile"></i> +84 947 402 164</p>
                        <p><i class="ti-email"></i> admin@request.com</p>

                    </div>
                    <div class="col-md-2 col-sm-6 paddingtop-bottom">
                        <h6 class="heading7">General links</h6>
                        <ul class="footer-ul">
                            <li><a href="#"> Career</a></li>
                            <li><a href="#"> Privacy Policy</a></li>
                            <li><a href="#"> Terms & Conditions</a></li>
                            <li><a href="#"> Client Gateway</a></li>
                            <li><a href="#"> Ranking</a></li>
                            <li><a href="#"> Case Studies</a></li>
                            <li><a href="#"> Frequently Ask Questions</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-6 paddingtop-bottom">
                        <h6 class="heading7">Notifications</h6>
                        <div class="post">
                            <p>lorem ipsum dolor sit amet consectetur adipiscing elit sed diam<span>August 8, 2017</span></p>
                            <p>lorem ipsum dolor sit amet consectetur adipiscing elit sed diam<span>August 8, 2017</span></p>
                            <p>lorem ipsum dolor sit amet consectetur adipiscing elit sed diam<span>August 8, 2017</span></p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 paddingtop-bottom">
                        <ul class="footer-ul">
                            <div class="container">
                                <a class="btn-social btn-google-plus"><i class="ti-google"></i></a>
                                <a class="btn-social btn-jsfiddle"><i class="ti-jsfiddle"></i></a>
                                <a class="btn-social btn-github"><i class="ti-github"></i></a>
                                <a class="btn-social btn-facebook"><i class="ti-facebook"></i></a>
                                <a class="btn-social btn-linkedin"><i class="ti-linkedin"></i></a>
                            </div>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>

        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p>© DuytanProject 2016 - All right reserved </p>
                    </div>
                    <div class="col-md-6">
                        <ul class="bottom_ul">
                            <li><a href="#">DuytanProject</a></li>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Faq's</a></li>
                            <li><a href="#">Contact us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>




    </div>



    <!-- JS includes -->

    <script src="js/vendor/jquery-1.11.2.min.js"></script>
    <script src="js/vendor/bootstrap.min.js"></script>

    <script src="js/jquery.magnific-popup.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/jquery.collapse.js"></script>
    <script src="js/bootsnav.js"></script>


    <!-- paradise slider js -->


    <script src="http://maps.google.com/maps/api/js?key=AIzaSyD_tAQD36pKp9v4at5AnpGbvBUsLCOSJx8"></script>
    <script src="js/gmaps.min.js"></script>

    <script>
        function showmap() {
            var mapOptions = {
                zoom: 8,
                scrollwheel: false,
                center: new google.maps.LatLng(-34.397, 150.644),
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            var map = new google.maps.Map(document.getElementById('map_canvas'), mapOptions);
            $('.mapheight').css('height', '350');
            $('.maps_text h3').hide();
        }

    </script>





    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

</body>
</html>