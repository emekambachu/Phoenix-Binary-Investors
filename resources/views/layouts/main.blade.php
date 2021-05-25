<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="CryptoCoin is a powerful Bitcoin Crypto Currency Wallet and Mining Template with full of customization options and features">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="{{ asset('phoenix_binary_investors_logoonly.png') }}">
    <!-- Site Title  -->
    <title>@yield('title') - Phoenix Binary Investors</title>
    <!-- Vendor Bundle CSS -->
    <link rel="stylesheet" href="{{ asset('main/assets/css/vendor.bundle.css') }}" >
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="{{ asset('main/assets/css/style5152.css') }}?ver=1.0">
    <link rel="stylesheet" id="layoutstyle" href="{{ asset('main/assets/css/theme5152.css') }}?ver=1.0">

    @yield('top-assets')

</head>
<body>

<!-- Header -->
<header class="site-header header-s1 is-sticky">
    <!-- Topbar -->
    <div class="topbar">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <ul class="social">
                        <li><a href="#"><em class="fa fa-facebook"></em></a></li>
                        <li><a href="#"><em class="fa fa-twitter"></em></a></li>
                        <li><a href="#"><em class="fa fa-linkedin"></em></a></li>
                    </ul>
                </div>
                <div class="col-sm-6 al-right">
                    <ul class="top-nav">
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>
                        <li><a href="{{ url('terms') }}">Terms and Conditions</a></li>
                        <li><a href="{{ url('legal') }}">Legal</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Topbar -->
    <!-- Navbar -->
    <div class="navbar navbar-primary">
        <div class="container relative">
            <!-- Logo -->
            <a class="navbar-brand" href="{{ url('/') }}">
                <img class="logo logo-dark" alt="logo" src="{{ asset('phoenix_binary_investors_logo.png') }}">
                <img class="logo logo-light" alt="logo" src="{{ asset('phoenix_binary_investors_logo.png') }}">
            </a>
            <!-- #end Logo -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mainnav" aria-expanded="false">
                    <span class="sr-only">Menu</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="quote-btn"><a class="btn" href=""><span>get started</span></a></div>
            </div>
            <!-- MainNav -->
            <nav class="navbar-collapse collapse" id="mainnav">
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle">Company <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ url('about') }}">About us</a></li>
                            <li><a href="{{ url('terms') }}">Terms and Conditions</a></li>
                            <li><a href="{{ url('legal') }}">Legal</a></li>
                            <li><a href="{{ url('faq') }}">FAQ</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ url('services') }}">Services</a></li>
                    <li><a href="{{ url('contact') }}">Contact us</a></li>
                    <li class="quote-btn">
                        <a class="btn" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="quote-btn">
                        <a class="btn" href="{{ route('register') }}">Sign up</a>
                    </li>
                </ul>
            </nav>
            <!-- #end MainNav -->
        </div>
    </div>
    <!-- End Navbar -->
@yield('content')

<!-- Section Footer -->
<div class="footer-section section section-pad-md light bg-footer">
    <div class="imagebg footerbg">
        <img src="{{ asset('images/footer-bg.png') }}" alt="footer-bg">
    </div>
    <div class="container">
        <div class="row">

            <div class="col-md-4 col-sm-6 wgs-box res-m-bttm-lg">
                <!-- Each Widget -->
                <div class="wgs-footer wgs-menu">
                    <h5 class="wgs-title ucap">Information</h5>
                    <div class="wgs-content">
                        <ul class="menu">
                            <li><a href="{{ url('about') }}">About us</a></li>
                            <li><a href="{{ url('terms') }}">Terms and condition</a></li>
                            <li><a href="{{ url('faq') }}">FAQ</a></li>
                            <li><a href="{{ url('legal') }}">Legal</a></li>
                        </ul>
                    </div>
                </div>
                <!-- End Widget -->
            </div>

            <div class="col-md-4 col-sm-6 wgs-box res-m-bttm-lg">
                <!-- Each Widget -->
                <div class="wgs-footer wgs-contact">
                    <h5 class="wgs-title ucap">Address</h5>
                    <div class="wgs-content">
                        <ul class="wgs-contact-list">
                            <li><span class="pe pe-7s-map-marker"></span>217 Summit Boulevard <br/>Birmingham, AL 35243</li>
                        </ul>
                    </div>
                </div>
                <!-- End Widget -->
            </div>

            <div class="col-md-4 col-sm-6 wgs-box res-m-bttm">
                <!-- Each Widget -->
                <div class="wgs-footer wgs-contact">
                    <h5 class="wgs-title ucap">Contact</h5>
                    <div class="wgs-content">
                        <ul class="wgs-contact-list">
                            <li><span class="pe pe-7s-call"></span>Telephone : +1(409)681-4405 <br/>Telephone : +1(740)524-9675 <br/>+1(720)599-0087</li>
                            <li><span class="pe pe-7s-global"></span>Email : <a href="mailto:info@phoenixbinaryinvestors.com">info@phoenixbinaryinvestors.com</a></li>
                        </ul>
                    </div>
                </div>
                <!-- End Widget -->
            </div>

        </div>
    </div>
</div>
<!-- End Section -->

<!-- Copyright -->
<div class="copyright light">
    <div class="container">
        <div class="row">
            <div class="site-copy col-sm-7">
                <p>Copyright &copy; {{ date('Y') }} Phoenix Binary Investors.</p>
            </div>
            <div class="col-sm-5 text-right mobile-left">
                <ul class="social">
                    <li><a href="#"><em class="fa fa-facebook"></em></a></li>
                    <li><a href="#"><em class="fa fa-twitter"></em></a></li>
                    <li><a href="#"><em class="fa fa-linkedin"></em></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Copyright -->

<!-- Preloader !remove please if you do not want -->
<div id="preloader"><div id="status">&nbsp;</div></div>
<!-- Preloader End -->

<!-- JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->

<script src="{{ asset('main/assets/js/jquery.bundle.js') }}"></script>
<script src="{{ asset('main/assets/js/script.js') }}"></script>
<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL}, 'google_translate_element');
    }
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<script>
    (function(b,i,t,C,O,I,N) {
        window.addEventListener('load',function() {
            if(b.getElementById(C))return;
            I=b.createElement(i),N=b.getElementsByTagName(i)[0];
            I.src=t;I.id=C;N.parentNode.insertBefore(I, N);
        },false)
    })(document,'script','../../widgets.bitcoin.com/widget.js','btcwdgt');
</script>
</body>

</html>
