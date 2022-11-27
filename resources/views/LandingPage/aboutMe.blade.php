<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>About - Tunis Personal Portfolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,600i,700" rel="stylesheet">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/preloader.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/circle.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/fm.revealator.jquery.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/skins/yellow.css') }}" rel="stylesheet">
    <link rel="alternate stylesheet" type="text/css" title="blue" href="css/skins/blue.css" />
    <link rel="alternate stylesheet" type="text/css" title="green" href="css/skins/green.css" />
    <link rel="alternate stylesheet" type="text/css" title="yellow" href="css/skins/yellow.css" />
    <link rel="alternate stylesheet" type="text/css" title="blueviolet" href="css/skins/blueviolet.css" />
    <link rel="alternate stylesheet" type="text/css" title="goldenrod" href="css/skins/goldenrod.css" />
    <link rel="alternate stylesheet" type="text/css" title="magenta" href="css/skins/magenta.css" />
    <link rel="alternate stylesheet" type="text/css" title="orange" href="css/skins/orange.css" />
    <link rel="alternate stylesheet" type="text/css" title="purple" href="css/skins/purple.css" />
    <link rel="alternate stylesheet" type="text/css" title="red" href="css/skins/red.css" />
    <link rel="alternate stylesheet" type="text/css" title="yellowgreen" href="css/skins/yellowgreen.css" />
    <link rel="stylesheet" type="text/css" href="css/styleswitcher.css" />
    <script src="{{ asset('assets/js/modernizr.custom.js') }}"></script>
</head>

<body class="about">
    <div id="switcher" class="">
        <div class="content-switcher">
            <h4>STYLE SWITCHER</h4>
            <ul>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('purple');" title="purple" class="color"><img
                            src="img/styleswitcher/purple.png" alt="purple" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('red');" title="red" class="color"><img
                            src="img/styleswitcher/red.png" alt="red" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('blueviolet');" title="blueviolet"
                        class="color"><img src="img/styleswitcher/blueviolet.png" alt="blueviolet" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('blue');" title="blue" class="color"><img
                            src="img/styleswitcher/blue.png" alt="blue" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('goldenrod');" title="goldenrod" class="color"><img
                            src="img/styleswitcher/goldenrod.png" alt="goldenrod" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('magenta');" title="magenta" class="color"><img
                            src="img/styleswitcher/magenta.png" alt="magenta" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('yellowgreen');" title="yellowgreen"
                        class="color"><img src="img/styleswitcher/yellowgreen.png" alt="yellowgreen" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('orange');" title="orange" class="color"><img
                            src="img/styleswitcher/orange.png" alt="orange" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('green');" title="green" class="color"><img
                            src="img/styleswitcher/green.png" alt="green" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('yellow');" title="yellow" class="color"><img
                            src="img/styleswitcher/yellow.png" alt="yellow" /></a>
                </li>
            </ul>

            <a href="https://themeforest.net/item/tunis-personal-portfolio/26761598?irgwc=1&amp;clickid=UBs0rDX6YxyJWfewUx0Mo3E1UkiwozXD10XATw0&amp;iradid=275988&amp;irpid=1327395&amp;iradtype=ONLINE_TRACKING_LINK&amp;irmptype=mediapartner&amp;mp_value1=&amp;utm_campaign=af_impact_radius_1327395&amp;utm_medium=affiliate&amp;utm_source=impact_radius"
                class="waves-effect waves-light font-weight-700 purchase"><i class="fa fa-shopping-cart"></i>
                Purchase</a>
            <div id="hideSwitcher">&times;</div>
        </div>
    </div>
    <div id="showSwitcher" class="styleSecondColor"><i class="fa fa-cog fa-spin"></i></div>
    <header class="header" id="navbar-collapse-toggle">
        <ul class="icon-menu d-none d-lg-block revealator-slideup revealator-once revealator-delay1">
            <li class="icon-box">
                <i class="fa fa-home"></i>
                <a href="index.html">
                    <h2>Home</h2>
                </a>
            </li>
            <li class="icon-box active">
                <i class="fa fa-user"></i>
                <a href="about.html">
                    <h2>About</h2>
                </a>
            </li>
            <li class="icon-box">
                <i class="fa fa-briefcase"></i>
                <a href="portfolio.html">
                    <h2>Portfolio</h2>
                </a>
            </li>
            <li class="icon-box">
                <i class="fa fa-envelope-open"></i>
                <a href="contact.html">
                    <h2>Contact</h2>
                </a>
            </li>
            <li class="icon-box">
                <i class="fa fa-comments"></i>
                <a href="blog.html">
                    <h2>Blog</h2>
                </a>
            </li>
        </ul>
        <nav role="navigation" class="d-block d-lg-none">
            <div id="menuToggle">
                <input type="checkbox" />
                <span></span>
                <span></span>
                <span></span>
                <ul class="list-unstyled" id="menu">
                    <li><a href="index.html"><i class="fa fa-home"></i><span>Home</span></a></li>
                    <li class="active"><a href="about.html"><i class="fa fa-user"></i><span>About</span></a></li>
                    <li><a href="portfolio.html"><i class="fa fa-folder-open"></i><span>Portfolio</span></a></li>
                    <li><a href="contact.html"><i class="fa fa-envelope-open"></i><span>Contact</span></a></li>
                    <li><a href="blog.html"><i class="fa fa-comments"></i><span>Blog</span></a></li>
                </ul>
            </div>
        </nav>
    </header>
    <section class="title-section text-left text-sm-center revealator-slideup revealator-once revealator-delay1">
        <h1>ABOUT <span>ME</span></h1>
        <span class="title-bg">Resume</span>
    </section>
    <section class="main-content revealator-slideup revealator-once revealator-delay1">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-5 col-xl-6">
                    <div class="row">
                        <div class="col-12">
                            <h3 class="text-uppercase custom-title mb-0 ft-wt-600">personal infos</h3>
                        </div>
                        <div class="col-12 d-block d-sm-none">
                            <img src="img/img-mobile.jpg" class="img-fluid main-img-mobile" alt="my picture" />
                        </div>
                        <div class="col-6">
                            <ul class="about-list list-unstyled open-sans-font">
                                <li> <span class="title">first name :</span> <span
                                        class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">Steve</span>
                                </li>
                                <li> <span class="title">last name :</span> <span
                                        class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">Milner</span>
                                </li>
                                <li> <span class="title">Age :</span> <span
                                        class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">27
                                        Years</span> </li>
                                <li> <span class="title">Nationality :</span> <span
                                        class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">Tunisian</span>
                                </li>
                                <li> <span class="title">Freelance :</span> <span
                                        class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">Available</span>
                                </li>
                            </ul>
                        </div>
                        <div class="col-6">
                            <ul class="about-list list-unstyled open-sans-font">
                                <li> <span class="title">Address :</span> <span
                                        class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">Tunis</span>
                                </li>
                                <li> <span class="title">phone :</span> <span
                                        class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">+21621184010</span>
                                </li>
                                <li> <span class="title">Email :</span> <span
                                        class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">you@mail.com</span>
                                </li>
                                <li> <span class="title">Skype :</span> <span
                                        class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">steve.milner</span>
                                </li>
                                <li> <span class="title">langages :</span> <span
                                        class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">French,
                                        English</span> </li>
                            </ul>
                        </div>
                        <div class="col-12 mt-3">
                            <a class="button" href="#">
                                <span class="button-text">Download CV</span>
                                <span class="button-icon fa fa-download"></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-7 col-xl-6 mt-5 mt-lg-0">
                    <div class="row">
                        <div class="col-6">
                            <div class="box-stats with-margin">
                                <h3 class="poppins-font position-relative">12</h3>
                                <p class="open-sans-font m-0 position-relative text-uppercase">years of <span
                                        class="d-block">experience</span></p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="box-stats with-margin">
                                <h3 class="poppins-font position-relative">97</h3>
                                <p class="open-sans-font m-0 position-relative text-uppercase">completed <span
                                        class="d-block">projects</span></p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="box-stats">
                                <h3 class="poppins-font position-relative">81</h3>
                                <p class="open-sans-font m-0 position-relative text-uppercase">Happy<span
                                        class="d-block">customers</span></p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="box-stats">
                                <h3 class="poppins-font position-relative">53</h3>
                                <p class="open-sans-font m-0 position-relative text-uppercase">awards <span
                                        class="d-block">won</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="separator">
            <div class="row">
                <div class="col-12">
                    <h3
                        class="text-uppercase pb-4 pb-sm-5 mb-3 mb-sm-0 text-left text-sm-center custom-title ft-wt-600">
                        My Skills</h3>
                </div>
                <div class="col-6 col-md-3 mb-3 mb-sm-5">
                    <div class="c100 p25">
                        <span>25%</span>
                        <div class="slice">
                            <div class="bar"></div>
                            <div class="fill"></div>
                        </div>
                    </div>
                    <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">html</h6>
                </div>
                <div class="col-6 col-md-3 mb-3 mb-sm-5">
                    <div class="c100 p89">
                        <span>89%</span>
                        <div class="slice">
                            <div class="bar"></div>
                            <div class="fill"></div>
                        </div>
                    </div>
                    <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">javascript</h6>
                </div>
                <div class="col-6 col-md-3 mb-3 mb-sm-5">
                    <div class="c100 p70">
                        <span>70%</span>
                        <div class="slice">
                            <div class="bar"></div>
                            <div class="fill"></div>
                        </div>
                    </div>
                    <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">css</h6>
                </div>
                <div class="col-6 col-md-3 mb-3 mb-sm-5">
                    <div class="c100 p66">
                        <span>66%</span>
                        <div class="slice">
                            <div class="bar"></div>
                            <div class="fill"></div>
                        </div>
                    </div>
                    <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">php</h6>
                </div>
                <div class="col-6 col-md-3 mb-3 mb-sm-5">
                    <div class="c100 p95">
                        <span>95%</span>
                        <div class="slice">
                            <div class="bar"></div>
                            <div class="fill"></div>
                        </div>
                    </div>
                    <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">wordpress</h6>
                </div>
                <div class="col-6 col-md-3 mb-3 mb-sm-5">
                    <div class="c100 p50">
                        <span>50%</span>
                        <div class="slice">
                            <div class="bar"></div>
                            <div class="fill"></div>
                        </div>
                    </div>
                    <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">jquery</h6>
                </div>
                <div class="col-6 col-md-3 mb-3 mb-sm-5">
                    <div class="c100 p65">
                        <span>65%</span>
                        <div class="slice">
                            <div class="bar"></div>
                            <div class="fill"></div>
                        </div>
                    </div>
                    <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">angular</h6>
                </div>
                <div class="col-6 col-md-3 mb-3 mb-sm-5">
                    <div class="c100 p45">
                        <span>45%</span>
                        <div class="slice">
                            <div class="bar"></div>
                            <div class="fill"></div>
                        </div>
                    </div>
                    <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">react</h6>
                </div>
            </div>
            <hr class="separator mt-1">
            <div class="row">
                <div class="col-12">
                    <h3 class="text-uppercase pb-5 mb-0 text-left text-sm-center custom-title ft-wt-600">Experience
                        <span>&</span> Education</h3>
                </div>
                <div class="col-lg-6 m-15px-tb">
                    <div class="resume-box">
                        <ul>
                            <li>
                                <div class="icon">
                                    <i class="fa fa-briefcase"></i>
                                </div>
                                <span class="time open-sans-font text-uppercase">2018 - Present</span>
                                <h5 class="poppins-font text-uppercase">Web Developer <span
                                        class="place open-sans-font">Envato</span></h5>
                                <p class="open-sans-font">Lorem ipsum dolor sit amet, consectetur tempor incididunt ut
                                    labore adipisicing elit, </p>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fa fa-briefcase"></i>
                                </div>
                                <span class="time open-sans-font text-uppercase">2013 - 2018</span>
                                <h5 class="poppins-font text-uppercase">UI/UX Designer <span
                                        class="place open-sans-font">Themeforest</span></h5>
                                <p class="open-sans-font">Lorem incididunt dolor sit amet, consectetur eiusmod dunt
                                    doldunt dol elit, tempor incididunt</p>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fa fa-briefcase"></i>
                                </div>
                                <span class="time open-sans-font text-uppercase">2005 - 2013</span>
                                <h5 class="poppins-font text-uppercase">Consultant <span
                                        class="place open-sans-font">Videohive</span></h5>
                                <p class="open-sans-font">Lorem ipsum dolor sit amet, tempor incididunt ut
                                    laboreconsectetur elit, sed do eiusmod tempor duntt</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 m-15px-tb">
                    <div class="resume-box">
                        <ul>
                            <li>
                                <div class="icon">
                                    <i class="fa fa-graduation-cap"></i>
                                </div>
                                <span class="time open-sans-font text-uppercase">2015</span>
                                <h5 class="poppins-font text-uppercase">Engineering Degree <span
                                        class="place open-sans-font">Oxford University</span></h5>
                                <p class="open-sans-font">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                                    do tempor incididunt ut labore</p>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fa fa-graduation-cap"></i>
                                </div>
                                <span class="time open-sans-font text-uppercase">2012</span>
                                <h5 class="poppins-font text-uppercase">Master Degree <span
                                        class="place open-sans-font">Kiev University</span></h5>
                                <p class="open-sans-font">Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod
                                    tempor incididunt ut adipisicing</p>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fa fa-graduation-cap"></i>
                                </div>
                                <span class="time open-sans-font text-uppercase">2009</span>
                                <h5 class="poppins-font text-uppercase">Bachelor Degree <span
                                        class="place open-sans-font">Tunis High School</span></h5>
                                <p class="open-sans-font">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                                    do eiusmod tempor ut labore</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="{{ asset('assets/js/jquery-3.5.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/styleswitcher.js') }}"></script>
    <script src="{{ asset('assets/js/preloader.min.js') }}"></script>
    <script src="{{ asset('assets/js/fm.revealator.jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/masonry.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/classie.js') }}"></script>
    <script src="{{ asset('assets/js/cbpGridGallery.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.hoverdir.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>

</body>

</html>
