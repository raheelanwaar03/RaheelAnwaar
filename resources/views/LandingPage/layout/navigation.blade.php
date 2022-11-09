<!DOCTYPE html>
<html lang="en">
    {{-- This website is developed by Raheel Awaar.Whats app (03167007156) --}}
<head>
    <meta charset="utf-8">
    <title>Raheel Anwaar Laravel full-stack Developer.</title>
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
    <link rel="alternate stylesheet" type="text/css" title="blue" href="{{ asset('assets/css/skins/blue.css') }}" />
    <link rel="alternate stylesheet" type="text/css" title="green" href="{{ asset('assets/css/skins/green.css') }}" />
    <link rel="alternate stylesheet" type="text/css" title="yellow" href="{{ asset('assets/css/skins/yellow.css') }}" />
    <link rel="alternate stylesheet" type="text/css" title="blueviolet" href="{{ asset('assets/css/skins/blueviolet.css') }}" />
    <link rel="alternate stylesheet" type="text/css" title="goldenrod" href="{{ asset('assets/css/skins/goldenrod.css') }}" />
    <link rel="alternate stylesheet" type="text/css" title="magenta" href="{{ asset('assets/css/skins/magenta.css') }}" />
    <link rel="alternate stylesheet" type="text/css" title="orange" href="{{ asset('assets/css/skins/orange.css') }}" />
    <link rel="alternate stylesheet" type="text/css" title="purple" href="{{ asset('assets/css/skins/purple.css') }}" />
    <link rel="alternate stylesheet" type="text/css" title="red" href="{{ asset('assets/css/skins/red.css') }}" />
    <link rel="alternate stylesheet" type="text/css" title="yellowgreen" href="{{ asset('assets/css/skins/yellowgreen.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/styleswitcher.css') }}" />
    <script src="{{ asset('assets/js/modernizr.custom.js') }}"></script>
</head>

<body class="home">
    <div id="switcher" class="">
        <div class="content-switcher">
            <h4>STYLE SWITCHER</h4>
            <ul>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('purple');" title="purple" class="color"><img
                            src="{{ asset('assets/img/styleswitcher/purple.png') }}" alt="purple" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('red');" title="red" class="color"><img
                            src="{{ asset('assets/img/styleswitcher/red.png') }}" alt="red" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('blueviolet');" title="blueviolet"
                        class="color"><img src="{{ asset('assets/img/styleswitcher/blueviolet.png') }}" alt="blueviolet" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('blue');" title="blue" class="color"><img
                            src="{{ asset('assets/img/styleswitcher/blue.png') }}" alt="blue" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('goldenrod');" title="goldenrod" class="color"><img
                            src="{{ asset('assets/img/styleswitcher/goldenrod.png') }}" alt="goldenrod" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('magenta');" title="magenta" class="color"><img
                            src="{{ asset('assets/img/styleswitcher/magenta.png') }}" alt="magenta" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('yellowgreen');" title="yellowgreen"
                        class="color"><img src="{{ asset('assets/img/styleswitcher/yellowgreen.png') }}" alt="yellowgreen" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('orange');" title="orange" class="color"><img
                            src="{{ asset('assets/img/styleswitcher/orange.png') }}" alt="orange" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('green');" title="green" class="color"><img
                            src="{{ asset('assets/img/styleswitcher/green.png') }}" alt="green" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('yellow');" title="yellow" class="color"><img
                            src="{{ asset('assets/img/styleswitcher/yellow.png') }}" alt="yellow" /></a>
                </li>
            </ul>
            <div id="hideSwitcher">&times;</div>
        </div>
    </div>
