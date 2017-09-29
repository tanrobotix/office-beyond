@extends('layouts.parent')

@section('title', 'Login')

@section('nav')
<nav class="navbar navbar-default no-background bootsnav">
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
                        <li><a href="{{ url('/home') }}">Hello</a></li>                    
                        <li><a href="{{ url('/home') }}">{{ Auth::user()->name }}</a></li>
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
@endsection

@section('content')
<div class="container padding">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('footer')
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
						<a class="btn-social btn-youtube"><i class="ti-youtube"></i></a>
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
@endsection