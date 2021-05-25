@extends('layouts.main')

@section('title')
    About
@endsection

@section('content')
    <div class="page-head section row-vm light has-bg-image">
        <div class="imagebg bg-image-loaded" style="background-image: url(&quot;{{ asset('main/images/page-inside-bg.jpg') }}&quot;);">
            <img src="{{ asset('main/images/page-inside-bg.jpg') }}" alt="page-head">
        </div>
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12">
                    <h2>About Us</h2>
                    <div class="page-breadcrumb">
                        <ul class="breadcrumb">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li class="active"><span>About Us</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section section-pad">
        <div class="container">
            <div class="row row-vm">
                <div class="col-md-5 res-m-bttm">
                    <div class="text-block">
                        <h2>About Phoenix<span>Binary Investors</span></h2>
                        <p>We are a value-oriented investment firm that applies a private equity approach to investing in the public markets. Digital Trading Options manages long and Short term capital for Private investors, endowments, foundations, family, offices and other institutional investors.<br>
                            We invest in a concentrated long/short portfolio of equity securities of small to middle market companies. This strategy is the core of Digital Trading Options’s activities and has the flexibility to take advantage of the best public and private opportunities in this segment of the market. Digital Trading Options seeks to achieve investment gains through traditional trading with best rate in the the market.</p>
                    </div>
                </div>
                <div class="col-md-6 col-md-offset-1">
                    <div class="video-block round">
                        <img src="{{ asset('main/home/h1.jpg') }}" alt="photo-md" class="img-shadow">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section bg-grey" style="padding: 40px;">
        <div class="container">
            <div class="gaps size-3x"></div>
            <div class="row text-center">

                <div class="col-md-4 res-m-bttm-lg">
                    <div class="box-alt">
                        <h4>Values</h4>
                        <p>Digital Trading Options was founded on the principle of delivering superior long and short term returns at the lowest possible risk. DMI believes that having a world-class investor base of like-minded, high-quality organizations is key to investment success.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="box-alt">
                        <h4>Mission</h4>
                        <p>Offering comprehensive and flexible assets to investors within the Cryptocurrency market, with low friction, transparency and reliability and with highest possible return on investment.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="box-alt">
                        <h4>Partnerships</h4>
                        <p>We have built partnerships overtime with other successful companies with complimenting corporate and social goals as our company.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>

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
@endsection
