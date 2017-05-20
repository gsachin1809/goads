@extends('layouts.app')

@section('content')


    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<section id="contact" style="" >
            <div class="container" background-image="contactusbackground.jpg" >
                <div class="row">
                    <div class="about_our_company" style="margin-bottom: 20px;">
                        <h1 style="color:black;">Write Your Message</h1>
                        <div class="titleline-icon"></div>
                        <p style="color:black;">Lorem Ipsum is simply dummy text of the printing and typesetting </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <form name="sentMessage" id="contactForm" novalidate="">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Your Name *" id="name" required="" data-validation-required-message="Please enter your name.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Your Email *" id="email" required="" data-validation-required-message="Please enter your email address.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="form-group">
                                        <input type="tel" class="form-control" placeholder="Your Phone *" id="phone" required="" data-validation-required-message="Please enter your phone number.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <textarea class="form-control" placeholder="Your Message *" id="message" required="" data-validation-required-message="Please enter a message."></textarea>
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-lg-12 text-center">
                                    <div id="success"></div>
                                    <button type="submit" class="btn btn-xl get">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-4">
                        <p style="color:black;">
                            <strong><i class="fa fa-map-marker"></i> Name</strong><br>
                            GoAds
                        </p>
                        <!-- <p style="color:black;"><strong><i class="fa fa-phone"></i> Phone Number</strong><br>
                            (+8801)7123456</p>-->
                        <p style="color:black;">
                            <strong><i class="fa fa-envelope"></i>  Email Address</strong><br>
                            info@goads.co
                            <br>
                            marketing@goads.co</p>
                        <p></p>
                    </div>
                </div>
            </div>
        </section>
@endsection
