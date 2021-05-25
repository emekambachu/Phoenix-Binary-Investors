@extends('layouts.main')

@section('title')
    Contact us
@endsection

@section('content')
    <div class="page-head section row-vm light has-bg-image">
        <div class="imagebg bg-image-loaded" style="background-image: url(&quot;{{ asset('main/images/page-inside-bg.jpg') }}&quot;);">
            <img src="{{ asset('main/images/page-inside-bg.jpg') }}" alt="page-head">
        </div>
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12">
                    <h2>Contact</h2>
                    <div class="page-breadcrumb">
                        <ul class="breadcrumb">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li class="active"><span>Contact</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section section-pad">
        <div class="container">
            <div class="row">
                <div class="col-md-12 res-m-bttm">
                    <div class="contact-information">
                        <h4>Contact Information</h4>
                        <div class="row">
                            <div class="col-sm-4 res-m-bttm">
                                <div class="contact-entry">
                                    <h6>Address</h6>
                                    <p>34 south franklin road<br>santa ana,ca 8975,usa</p>
                                </div>
                            </div>
                            <div class="col-sm-4 res-m-bttm">
                                <div class="contact-entry">
                                    <h6>Contact Number</h6>
                                    <p>+1(409)681-4405<br>
                                        +1(740)524-9675<br>
                                        +1(720)599-0087
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-4 res-m-bttm">
                                <div class="contact-entry">
                                    <h6>Email</h6>
                                    <p>info@phoenixbinaryinvestors.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="contact-form">
                        <p>Complete and submit the form below</p>
                        <form id="contact-form" class="form-message" action="" method="post" novalidate="novalidate">
                            <div class="form-results"></div>
                            <div class="form-group row">
                                <div class="form-field col-sm-6 form-m-bttm">
                                    <input name="contact-name" type="text" placeholder="Full Name *" class="form-control required" aria-required="true">
                                </div>
                                <div class="form-field col-sm-6">
                                    <input name="contact-email" type="email" placeholder="Email *" class="form-control required email" aria-required="true">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="form-field col-sm-6 form-m-bttm">
                                    <input name="contact-phone" type="text" placeholder="Phone Number *" class="form-control required" aria-required="true">
                                </div>
                                <div class="form-field col-sm-6">
                                    <input name="contact-subject" type="text" placeholder="Subject *" class="form-control required" aria-required="true">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="form-field col-md-12">
                                    <textarea name="contact-message" placeholder="Messages *" class="txtarea form-control required" aria-required="true"></textarea>
                                </div>
                            </div>
                            <input type="text" class="hidden" name="form-anti-honeypot" value="">
                            <button type="submit" class="btn btn-alt">Submit</button>
                        </form>
                    </div>
                </div><!-- .col  -->
            </div>
        </div>
    </div>
@endsection
