@extends('layouts.main')

@section('title')
Home
@endsection

@section('content')
        <!-- Banner/Slider -->
        <div id="header" class="banner header-slider">
            <div class="single-slide light row-vm" style="background-image:url({{ asset('main/slider/slide1.jpg') }})">
                <div class="container">
                    <div class="banner-content">
                        <div class="row">
                            <div class="col-md-6">
                                <h1 class="animate-bottom delayms5">Phoenix Binary Investors</h1>
                                <p class="lead animate-bottom delayms7">
                                    You have ideas, goals, and dreams. We have a culturally diverse, forward thinking team looking to manage your investment portfolio
                                </p>
                                <ul class="btns animate-bottom delayms9">
                                    <li><a href="{{ route('register') }}" class="btn">Sign up</a></li>
                                    <li><a href="{{ route('login') }}" class="btn btn-outline">Login</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slide light row-vm" style="background-image:url({{ asset('main/slider/slide2.jpg') }})">
                <div class="container">
                    <div class="banner-content">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 text-center">
                                <h1 class="animate-bottom delayms5">Bitcoin Exchange <br /><span class="ucap">YOu can trust</span></h1>
                                <p class="lead animate-bottom delayms7">
                                    Our Customer care team are ready to solve your financial problems via our live chat
                                </p>
                                <ul class="btns animate-bottom delayms9">
                                    <li><a href="{{ url('services') }}" class="btn">Services</a></li>
                                    <li><a href="{{ url('contact') }}" class="btn btn-outline">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Banner/Slider -->
    </header>
    <!-- End Header -->

    <!-- BTC Ticker -->
    <div class="btc-ticker">
        <div class="ticker-item">
            <div class="btcwdgt-price" bw-cur="usd"></div>
        </div>
        <div class="ticker-item">
            <div class="btcwdgt-price" bw-cur="eur"></div>
        </div>
        <div class="ticker-item">
            <div class="btcwdgt-price" bw-cur="jpy"></div>
        </div>
        <div class="ticker-item">
            <div class="btcwdgt-price" bw-cur="gbp"></div>
        </div>
        <div class="ticker-item">
            <div class="btcwdgt-price" bw-cur="chf"></div>
        </div>
        <div class="ticker-item">
            <div class="btcwdgt-price" bw-cur="aud"></div>
        </div>
        <div class="ticker-item">
            <div class="btcwdgt-price" bw-cur="cad"></div>
        </div>
        <div class="ticker-item">
            <div class="btcwdgt-price" bw-cur="nzd"></div>
        </div>
        <div class="ticker-item">
            <div class="btcwdgt-price" bw-cur="nzd"></div>
        </div>
    </div>
    <!-- End BTC Ticker -->

    <!-- Features Box -->
    <div class="features-box section" style="padding:50px;">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-3 col-sm-6 res-m-bttm">
                    <div class="box box-alt-bg round shadow">
                        <img src="{{ asset('main/images/box-icon-a.png') }}" alt="box-icon" class="box-icon">
                        <h6 class="ucap">Constant Progression</h6>
                        <p class="small">
                            Interest is applied to your account 24/7. Once it has been added to your account balance, you can either reinvest it to increase your daily profit, or you can withdraw it.
                        </p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 res-m-bttm">
                    <div class="box box-alt-bg round shadow">
                        <img src="{{ asset('main/images/box-icon-b.png') }}" alt="box-icon" class="box-icon">
                        <h6 class="ucap">Unique Platform</h6>
                        <p class="small">
                            Our team has developed a unique platform for user-friendly and safe to work with investments.</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 res-m-bttm">
                    <div class="box box-alt-bg round shadow">
                        <img src="{{ asset('main/images/box-icon-c.png') }}" alt="box-icon" class="box-icon">
                        <h6 class="ucap">Quickly and Instantly</h6>
                        <p class="small">
                            All actions occur on the page immediately - payment process, withdrawal request, and more.</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="box box-alt-bg round shadow">
                        <img src="{{ asset('main/images/box-icon-d.png') }}" alt="box-icon" class="box-icon">
                        <h6 class="ucap">Secure and Trusted</h6>
                        <p class="small">Comodo RSA SSL will protect coinzinc investorâ€™s all the time ,so dont worry about your investment and privacy.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Features Box -->

    <!--Section -->
    <div class="section bg-grey" style="padding:50px;">
        <div class="container">
            <div class="row row-vm">
                <div class="col-md-5">
                    <div class="round mgr--30 res-m-bttm">
                        <img src="{{ asset('main/images/photo-md-a.jpg') }}" alt="photo-md" class="img-shadow"></div>
                </div>
                <div class="col-md-6 col-md-offset-1 ">
                    <div class="text-block">
                        <h2>About Phoenix Binary Investors</h2>
                        <p>After gaining knowledge and experience for years our mission was apparent, we needed to clear a path for small to mid-sized investors to smarter innovative trading and increased profits. Cryptocurrency market is developing in a rapid pace and is one of promising options of economy.<br>
                            To that end we provide support to our investors with a stable and easy-to-use technology built to manage their investment , from trading to making profits. Margin traders are not left behind in this.</p>
                        <a href="{{ url('about') }}" class="btn btn-alt">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Section -->


    <!--Section -->
    <div class="section has-bg light dark-filter" style="padding:40px;">
        <div class="imagebg has-parallax">
            <img src="{{ asset('main/images/calc-bg.jpg') }}" alt="calc-bg">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- TradingView Widget BEGIN -->
                    <div class="tradingview-widget-container">
                        <div class="tradingview-widget-container__widget"></div>
                        <div class="tradingview-widget-copyright"></div>
                        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-screener.js" async>
                            {
                                "width": "100%",
                                "height": "600",
                                "defaultColumn": "overview",
                                "screener_type": "crypto_mkt",
                                "displayCurrency": "USD",
                                "colorTheme": "light",
                                "locale": "en"
                            }
                        </script>
                    </div>
                    <!-- TradingView Widget END -->
                </div>
            </div>
            <div class="row row-vm">
                <div class="col-md-5">
                    <div class="text-block">
                        <h2>Currency Calculator</h2>
                    </div>
                </div>
                <div class="col-md-6 col-md-offset-1">
                    <div class="bitcoin-calculator">
                        <script>
                            baseUrl = "https://widgets.cryptocompare.com/";
                            var scripts = document.getElementsByTagName("script");
                            var embedder = scripts[ scripts.length - 1 ];
                            (function (){
                                var appName = encodeURIComponent(window.location.hostname);
                                if(appName===""){appName="local";}
                                var s = document.createElement("script");
                                s.type = "text/javascript";
                                s.async = true;
                                var theUrl = baseUrl+'serve/v1/coin/converter?fsym=BTC&tsyms=USD,EUR,CNY,GBP';
                                s.src = theUrl + ( theUrl.indexOf("?") >= 0 ? "&" : "?") + "app=" + appName;
                                embedder.parentNode.appendChild(s);
                            })();
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Section -->

    <!--Section -->
    <div class="section" style="padding:50px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h4 class="heading-section">How it works</h4>
                </div>
            </div>
            <div class="row text-center" style="margin-top:20px;">
                <div class="col-md-4 res-m-bttm-lg">
                    <div class="box-alt box-dot box-direction box-direction-one">
                        <div class="image-icon">
                            <img src="{{ asset('main/images/box-icon-i.png') }}" alt="box-icon">
                        </div>
                        <h5>Sign up</h5>
                        <p>Sign up to our account and fill all relevant details including your bitcoin wallet address.</p>
                    </div>
                </div>
                <div class="col-md-4 res-m-bttm-lg">
                    <div class="box-alt box-dot box-direction box-direction-two">
                        <div class="image-icon">
                            <img src="{{ asset('main/images/box-icon-j.png') }}" alt="box-icon">
                        </div>
                        <h5>Select Investment Package</h5>
                        <p>Select investment package, create new investment and fund your wallet</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box-alt box-dot">
                        <div class="image-icon">
                            <img src="{{ asset('main/images/box-icon-k.png') }}" alt="box-icon">
                        </div>
                        <h5>Get Paid</h5>
                        <p>Receive payment with bonus, profit or commission.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Section -->

    <!-- Section -->
    <div class="section bg-grey" style="padding:50px;">
        <div class="container">
            <div class="section-head">
                <div class="row text-center">
                    <div class="col-md-6 col-md-offset-3">
                        <h2 class="heading-section">Investment Plans</h2>
                    </div>
                </div>
            </div>
            <div class="gaps size-3x"></div>
            <div class="row text-center">

                @foreach($packages as $package)
                    <div class="col-md-3 col-sm-6 res-m-bttm">
                        <div class="pricing-box hover-scale highlited light ucap shadow">
                            <span class="pricing-title">{{ $package->name }}</span>
                            <span class="pricing-sub-title">For</span>
                            <span class="pricing-sap"></span>
                            @if(!empty($package->min))
                                <p style="font-size: 18px;">Minimum: {{ '$'.number_format($package->min) }}</p>
                            @endif

                            @if(!empty($package->max))
                                <p style="font-size: 18px;">Maximum: {{ '$'.number_format($package->max) }}</p>
                            @else
                                <p style="font-size: 18px;">and above</p>
                            @endif

                            <ul>
                                @if(!empty($package->option1))
                                    <li style="font-size: 15px;">{{ $package->option1 }}</li>
                                @endif

                                @if(!empty($package->option2))
                                    <li style="font-size: 15px;">{{ $package->option2 }}</li>
                                @endif

                                @if(!empty($package->option3))
                                    <li style="font-size: 15px;">{{ $package->option3 }}</li>
                                @endif

                                @if(!empty($package->referral_bonus))
                                    <li style="font-size: 15px;">{{ $package->referral_bonus }}% Referral Bonus</li>
                                @endif

                                @if(!empty($package->expert_advice))
                                    <li style="font-size: 15px;">{{ $package->expert_advice }}</li>
                                @endif
                            </ul>
                            <a href="{{ route('register') }}" class="btn btn-xs btn-outline btn-alt">Sign up</a>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
    <!-- End Section -->

        <div class="section section-pad cta-section light has-bg dark-filter has-bg-image">
            <div class="imagebg has-parallax bg-image-loaded"
                 style="background-image: url(&quot;{{ asset('main/images/cta-bg.jpg') }}&quot;); background-size: cover;
              background-repeat: no-repeat; background-attachment: fixed; background-position: center 81px;">
                <img src="{{ asset('main/images/cta-bg.jpg') }}" alt="cta-bg">
            </div>
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-8 col-md-offset-2">
                        <h3>Our Guiding Principles</h3>
                        <p>Put the interests of DTO’s investors first in everything the firm does. Acting as a fiduciary is a sacred trust that can never be broken. Act with the highest level of integrity in every action DTO takes. The firm’s reputation is its most important asset. Approach public investing with the same philosophy as if purchasing entire companies, by acquiring high-quality businesses that generate large amounts of compounding free cash flow at prices well below their intrinsic value.<br><br>

                            Focus on building a world-class team and culture. The firm cares deeply about being regarded in the industry as first rate and as the best at every touch point. Communicate with investment partners candidly and be as transparent as required for them to always understand what DMI is doing and why.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="section section-pad">
            <div class="container">
                <div class="section-head">
                    <div class="row text-center">
                        <div class="col-md-12">
                            <h2 class="heading-section">Purchase cryptocurrencies online</h2>
                        </div>
                        <div class="gaps size-1x"></div>
                        <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                        </div>
                    </div>
                </div>
                <div class="gaps size-3x"></div>
                <div class="row">

                    <div class="col-md-4 col-md-offset-0 col-sm-8 col-sm-offset-2 res-m-bttm">
                        <div class="box-miner">
                            <h4 class="box-miner-title text-center">Paxful</h4>
                            <div class="box-miner-image">
                                <img src="{{ asset('buy_btc1.jpg') }}" alt="photo-sm">
                            </div>
                            <ul class="box-miner-list">
                                <li>
                                    <a class="box-miner-action" href="https://paxful.com/buy-bitcoin">Sign Up</a>
                                </li>
                            </ul>
                        </div>
                    </div><!-- col -->

                    <div class="col-md-4 col-md-offset-0 col-sm-8 col-sm-offset-2 res-m-bttm">
                        <div class="box-miner">
                            <h4 class="box-miner-title text-center">Binance</h4>
                            <div class="box-miner-image">
                                <img src="{{ asset('buy_btc2.jpg') }}" alt="photo-sm">
                            </div>
                            <ul class="box-miner-list">
                                <li>
                                    <a class="box-miner-action" href="https://www.binance.com/en/buy-sell-crypto?channel=hzBankcard&fiat=USD">Sign Up</a>
                                </li>
                            </ul>
                        </div>
                    </div><!-- col -->

                    <div class="col-md-4 col-md-offset-0 col-sm-8 col-sm-offset-2 res-m-bttm">
                        <div class="box-miner">
                            <h4 class="box-miner-title text-center">Coinbase</h4>
                            <div class="box-miner-image">
                                <img src="{{ asset('buy_btc3.jpg') }}" alt="photo-sm">
                            </div>
                            <ul class="box-miner-list">
                                <li>
                                    <a class="box-miner-action" href="https://www.coinbase.com/signup">Sign Up</a>
                                </li>
                            </ul>
                        </div>
                    </div><!-- col -->

                </div>
                <div class="gaps size-2x"></div>
                <div class="gaps size-4x hidden-xs hidden-sm"></div>
                <div class="row text-center">
                    <div class="col-md-4 res-m-bttm-lg">
                        <div class="box-alt box-dot box-direction box-direction-one">
                            <div class="image-icon">
                                <img src="{{ asset('main/images/box-icon-i.png') }}" alt="box-icon">
                            </div>
                            <h5>Sign up</h5>
                            <p>Create an account and fill in all relevant details.</p>
                        </div>
                    </div>
                    <div class="col-md-4 res-m-bttm-lg">
                        <div class="box-alt box-dot box-direction box-direction-two">
                            <div class="image-icon">
                                <img src="{{ asset('main/images/box-icon-j.png') }}" alt="box-icon">
                            </div>
                            <h5>Add Bitcoin to a Walet</h5>
                            <p>Include your bitcoin/Ethereum wallet upon signing up</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box-alt box-dot">
                            <div class="image-icon">
                                <img src="{{ asset('main/images/box-icon-k.png') }}" alt="box-icon">
                            </div>
                            <h5>Start Investing</h5>
                            <p>Login and start investing</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <!--Section -->
    <div class="section" style="padding:50px;">
        <div class="container">
            <div class="section-head">
                <div class="row text-center">
                    <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                        <h2 class="heading-section">Media</h2>
                    </div>
                </div>
            </div>
            <div class="gaps size-3x"></div>
            <div class="row text-center">
                <div class="col-md-6 col-md-offset-3">
                    <div class="testimonial-carousel has-carousel" data-items="1" data-loop="true" data-dots="true" data-auto="true">
                        <div class="testimonial-item">
                            <div class="client-photo circle">
                                <img src="{{ asset('main/testimonial/cnbc.png') }}" alt="client">
                            </div>
                            <blockquote>Phoenix Binary Investors achieve 43% returns in revenue from Stocks, Cryptocurrencies and Forex Trading.</blockquote>
                            <div class="client-info">
                                <h6>CNBC International</h6>
                            </div>
                        </div>

                        <div class="testimonial-item">
                            <div class="client-photo circle">
                                <img src="{{ asset('main/testimonial/aljazeera.png') }}" alt="client">
                            </div>
                            <blockquote>Phoenix Binary Investors Financial performance continues to rise against the market's down trend. They have proven to have a solid plan for investors.</blockquote>
                            <div class="client-info">
                                <h6>Aljazeera Finance, 2019</h6>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Section -->

    <!--Section -->
    <div class="section" style="padding:50px;">
        <div class="container">
            <div class="section-head">
                <div class="row text-center">
                    <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                        <h2 class="heading-section">Our latest news</h2>
                    </div>
                </div>
            </div>
            <div class="gaps size-3x"></div>
            <div class="row text-center">
                <div class="col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-2 res-m-bttm-lg">
                    <!-- 24-7 Press Release Newswire Landing Page Widget Code Starts Here --> <script type="text/javascript" src="https://news.24-7pressrelease.com/247pr-news-widget.js?widgettitle=Cryptocurrency News&amp;categories=489,&amp;showRelease=1&amp;width=auto&amp;headlinebold=1&amp;headlinesonly=0&amp;headlinecolor=f7921a&amp;briefcolor=666666&amp;textcolor=333333&amp;typeface=arial&amp;fontsize=11&amp;width=auto&amp;headlinesepstyle=dotted&amp;showimages=1&amp;numstories=5&amp;bgcolor=ffffff&amp;urldest=247pr"></script> <!-- 24-7 Press Release Newswire Landing Page Widget Code Ends Here -->
                </div>
            </div>
        </div>
    </div>
    <!--End Section -->

    <!-- Section -->
    <div class="section section-pad-md bg-grey">
        <div class="container">
            <div class="content row">
                <div class="owl-carousel has-carousel no-dots"  data-items="6" data-loop="true" data-dots="false" data-auto="false">
                    <div class="logo-item"><img alt="" width="190" height="82" src="{{ asset('main/images/cl-logo1.png') }}"></div>
                    <div class="logo-item"><img alt="" width="190" height="82" src="{{ asset('main/images/cl-logo2.png') }}"></div>
                    <div class="logo-item"><img alt="" width="190" height="82" src="{{ asset('main/images/cl-logo3.png') }}"></div>
                    <div class="logo-item"><img alt="" width="190" height="82" src="{{ asset('main/images/cl-logo4.png') }}"></div>
                    <div class="logo-item"><img alt="" width="190" height="82" src="{{ asset('main/images/cl-logo5.png') }}"></div>
                    <div class="logo-item"><img alt="" width="190" height="82" src="{{ asset('main/images/cl-logo6.png') }}"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Section -->
@endsection
