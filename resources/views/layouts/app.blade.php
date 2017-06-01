<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>GoAds</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        body {
                background-color: #FFE8DF;
                /*background-color: #DD120B;*/
                color:black;
            }
        .strong {
            
              
            color: black;
            font-family: "Times New Roman", Times, serif;
            font-style: normal;
            font-size: 17px;
            font-weight: bold;
        }
        .navbar-default .navbar-nav>li>a, .navbar-default .navbar-text {
            color: black!important;
        }

        .footer{
          background-color: red;
          padding-top: 10px;
          padding-bottom: 10px;
          color: black;
        }


/* Floating Social Media Bar Style Starts Here */

.fl-fl {
  background: #000000;
  text-transform: uppercase;
  letter-spacing: 3px;
  padding: 4px;
  width: 190px;
  position: fixed;
  right: -160px;
  z-index: 1000;
  font: normal normal 10px Arial;
  -webkit-transition: all .25s ease;
  -moz-transition: all .25s ease;
  -ms-transition: all .25s ease;
  -o-transition: all .25s ease;
  transition: all .25s ease;
}

.fa {
  font-size: 20px;
  color: #fff;
  padding: 10px 0;
  width: 40px;
  margin-left: 8px;
}

.fl-fl:hover {
  right: 0;
}

.fl-fl a {
  color: #fff !important;
  text-decoration: none;
  text-align: center;
  line-height: 43px!important;
  vertical-align: top!important;
}

.float-fb {
  top: 160px;
}

.float-tw {
  top: 215px;
}

.float-gp {
  top: 270px;
}

.float-rs {
  top: 325px;
}

.float-ig {
  top: 380px;
}

.float-pn {
  top: 435px;
}
/* Floating Social Media Bar Style Ends Here */
    </style>

</head>
<body>

<div class="float-sm">
  <div class="fl-fl float-fb">
    <i class="fa fa-facebook"></i>
    <a href="https://www.facebook.com/goads.co/" target="_blank"> Like us!</a>
  </div>
  <div class="fl-fl float-tw">
    <i class="fa fa-twitter"></i>
    <a href="https://twitter.com/GoAds15" target="_blank">Follow us!</a>
  </div>
  <div class="fl-fl float-gp">
    <i class="fa fa-google-plus"></i>
    <a href="https://plus.google.com/u/0/115647691198924079756" target="_blank">Recommend us!</a>
  </div>
  <div class="fl-fl float-rs">
    <i class="fa fa-linkedin"></i>
    <a href="https://www.linkedin.com/in/go-ads-84977413b/" target="_blank">Follow via LinkedIn</a>
  </div>
  <div class="fl-fl float-ig">
    <i class="fa fa-instagram"></i>
    <a href="" target="_blank">like us!</a>
  </div>
  
  <div class="fl-fl float-pn">
    <i class="fa fa-youtube"></i>
    <a href="https://www.youtube.com/channel/UCYWuaU4q8kJb2-l2nLkXfcw" target="_blank">Subscribe us!</a>
  </div>
</div>
<!-- Floating Social Media bar Ends -->
	
    <div id="app">
    <div class="strong">
        <nav class="navbar navbar-default navbar-static-top" style="background-color:#DD120B;">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <div class="strong">
                            <img src="logo.png" width="25%" >

                        
                        </div>
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp; 
						
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right"> 
                        <!-- Authentication Links -->
                         
						@if (Auth::guest())
                            <li><a href="/">Home</a></li>
						  <li><a href="aboutus">About Us</a></li>
                            <li><a href="traffic">Tariffs</a></li>
                            <li><a href="faq">FAQ</a></li>
                            <li><a href="contact-us">Contact Us</a></li>
                            
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li><a href="/">Home</a></li>
                            <li><a href="aboutus">About Us</a></li>
                            <li><a href="traffic">Tariffs</a></li>
                            <li><a href="faq">FAQ</a></li>
                            <li><a href="contact-us">Contact Us</a></li>
                            
                            
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="/myprofile">Profile</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="/myads">My ads</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="/createads">Create ads</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ route('customer/chat') }}">Chat</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ route('customer/chat') }}">Meet</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="/wallet">wallet</a></li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
        </div >

        @yield('content')
    </div>
    <hr>
    <div class="col-sm-12 footer">
        <div class="col-sm-12 row">
            <div class="col-sm-1">
                <a href="/privacy" style="color: black;">Privacy</a>
            </div>
            <div class="col-sm-1">
                Support
            </div>
            <div class="col-sm-1">
                Careers
            </div>
            <div class="col-sm-1">
                Log In 
            </div>
            <div class="col-sm-2">
                Social media
            </div>
            <div class="col-sm-1">
                Contact Us
            </div>
            <div class="col-sm-2">
                Terms and conditions 
            </div>
            <div class="col-sm-1">
                Copy Right
            </div>
            
        </div>
        <div class="col-sm-1">
        </div>
        <div class="col-sm-5 pull-left">
          <div><label>GoAds</label></div>  
          <div><label>info@goads.co</label></div>
          <div><label>marketing@goads.co </label></div> 
          
           <div class="input-group col-sm-5">
            <input type="text" class="form-control" placeholder="sign-up for news letter...">
            <span class="input-group-btn">
              <button class="btn btn-success" type="button">sGo!</button>
            </span>
          </div>
        </div>
        <div  class="col-sm-3"></div>
        <div class="col-sm-3 pull-right">
          <div class="pull-right">
          Copyright © 2017 Go Ads.
          All Rights Reserved.
           <div class="input-group">
              <input type="text" class="form-control" placeholder="Search for...">
              <span class="input-group-btn">
                <button class="btn btn-secondary" type="button">Go!</button>
              </span>
            </div>
          </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
