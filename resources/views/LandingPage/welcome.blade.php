@extends('LandingPage.layout.app')

@section('content')

<div id="showSwitcher" class="styleSecondColor"><i class="fa fa-cog fa-spin"></i></div>
<header class="header" id="navbar-collapse-toggle">
    <ul class="icon-menu d-none d-lg-block revealator-slideup revealator-once revealator-delay1">
        <li class="icon-box active">
            <i class="fa fa-home"></i>
            <a href="{{ route('LandingPage') }}">
                <h2>Dashboard</h2>
            </a>
        </li>
        <li class="icon-box">
            <i class="fa fa-user"></i>
            <a href="{{ route('LandingPage.About') }}">
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
                <li class="active"><a href="{{ route('LandingPage') }}"><i class="fa fa-home"></i><span>Dashboard</span></a></li>
                <li><a href="{{ route('LandingPage.About') }}"><i class="fa fa-user"></i><span>About</span></a></li>
                <li><a href="portfolio.html"><i class="fa fa-folder-open"></i><span>Portfolio</span></a></li>
                <li><a href="contact.html"><i class="fa fa-envelope-open"></i><span>Contact</span></a></li>
                <li><a href="blog.html"><i class="fa fa-comments"></i><span>Blog</span></a></li>
            </ul>
        </div>
    </nav>
</header>
<section
    class="container-fluid main-container container-home p-0 revealator-slideup revealator-once revealator-delay1">
    <div class="color-block d-none d-lg-block"></div>
    <div class="row home-details-container align-items-center">
        <div class="col-lg-4 bg position-fixed d-none d-lg-block"></div>
        <div class="col-12 col-lg-8 offset-lg-4 home-details text-left text-sm-center text-lg-left">
            <div>
                <img src="{{ asset('assets/img/raheelanwaar.jpg') }}" class="img-fluid main-img-mobile d-none d-sm-block d-lg-none"
                    alt="my picture" />
                <h1 class="text-uppercase poppins-font">I'm Raheel Anwaar<span>Web Developer</span></h1>
                <p class="open-sans-font">I'm a Professional back-end & front‑end developer focused on
                    crafting clean & user‑friendly experiences, I am passionate about building excellent website's
                    that improves the lives of those around me.</p>
                <a class="button" href="{{ route('LandingPage.About') }}">
                    <span class="button-text">more about me</span>
                    <span class="button-icon fa fa-arrow-right"></span>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
