<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="pizza, delivery food, fast food, sushi, take away, chinese, italian food">
    <meta name="description" content="">
    <meta name="author" content="Ansonika">
    <title>QuickFood - Quality delivery or take away food</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="/img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="/img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="/img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="/img/apple-touch-icon-144x144-precomposed.png">
    
    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="/css/animate.min.css" rel="stylesheet">
	<link href="/css/bootstrap.min.css" rel="stylesheet">
	<link href="/css/menu.css" rel="stylesheet">
	<link href="/css/style.css" rel="stylesheet">
	<link href="/css/responsive.css" rel="stylesheet">
	<link href="/css/elegant_font/elegant_font.min.css" rel="stylesheet">
	<link href="/css/fontello/css/fontello.min.css" rel="stylesheet">
	<link href="/css/magnific-popup.css" rel="stylesheet">
	<link href="/css/pop_up.css" rel="stylesheet">
	
	<!-- YOUR CUSTOM CSS -->
	<link href="/css/custom.css" rel="stylesheet">
    
    <!-- Modernizr -->
	<script src="js/modernizr.js"></script> 
</head>




<body>

    <div id="preloader">
        <div class="sk-spinner sk-spinner-wave" id="status">
            <div class="sk-rect1"></div>
            <div class="sk-rect2"></div>
            <div class="sk-rect3"></div>
            <div class="sk-rect4"></div>
            <div class="sk-rect5"></div>
        </div>
    </div><!-- End Preload -->
    
    <!-- Header ================================================== -->
    <header>
    <div class="container-fluid">
        <div class="row">
            <div class="col--md-4 col-sm-4 col-xs-4">
                <a href="/" id="logo">
                <img src="/img/logo.png" width="190" height="23" alt="" data-retina="true" class="hidden-xs">
                <img src="/img/logo_mobile.png" width="59" height="23" alt="" data-retina="true" class="hidden-lg hidden-md hidden-sm">
                </a>
            </div>
            <nav class="col--md-8 col-sm-8 col-xs-8">
            <a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="javascript:void(0);"><span>Menu mobile</span></a>
            <div class="main-menu">
                <div id="header_menu">
                    <img src="/img/logo.png" width="190" height="23" alt="" data-retina="true">
                </div>
                <a href="#" class="open_close" id="close_in"><i class="icon_close"></i></a>
                <ul>
                    <li class="submenu">
                    <a class='{{ Request::path()==="/"? "select-menu": ''}}' href="/" class="show-submenu">Home<i class=""></i></a>
                   
                    </li>
                    
                <li class='{{ Request::path()==="menu"? "select-menu": ''}}'> <a href="/menu">Menu</a></li>
                    <li  class='{{ Request::path()==="about"? "select-menu": ''}}'><a href="/about">About us</a></li>
                    <li class='{{ Request::path()==="faq"? "select-menu": ''}}'><a href="/faq">FAQ</a></li>
                    <li class="submenu">
                        <li><a href="#1" data-toggle="modal" data-target="#register">Register</a></li>
                  
                    </li>
                    <li><a href="#0" data-toggle="modal" data-target="#login_2">Login</a></li>
                    
                </ul>
            </div><!-- End main-menu -->
            </nav>
        </div><!-- End row -->
    </div><!-- End container -->
    </header>
	<!-- End Header =============================================== -->
    
    
    
    @yield('content')
    
    

    <!-- Footer ================================================== -->
    <footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-3">
                <h3>Secure payments with</h3>
                <p>
                    <img src="/img/cards.png" alt="" class="img-responsive">
                </p>
            </div>
            <div class="col-md-3 col-sm-3">
                <h3>About</h3>
                <ul>
                    <li><a href="/about">About us</a></li>
                    <li><a href="/faq">Faq</a></li>
                    <li><a href="contacts.php">Contacts</a></li>
                    <li><a href="#0" data-toggle="modal" data-target="#login_2">Login</a></li>
                    <li><a href="#0" data-toggle="modal" data-target="#register">Register</a></li>
                    <li><a href="#0">Terms and conditions</a></li>
                </ul>
            </div>
            <div class="col-md-3 col-sm-3" id="newsletter">
                <h3>Newsletter</h3>
                <p>
                    Join our newsletter to keep be informed about offers and news.
                </p>
                <div id="message-newsletter_2">
                </div>
                <form method="post" action="assets/newsletter.php" name="newsletter_2" id="newsletter_2">
                    <div class="form-group">
                        <input name="email_newsletter_2" id="email_newsletter_2" type="email" value="" placeholder="Your mail" class="form-control">
                    </div>
                    <input type="submit" value="Subscribe" class="btn_1" id="submit-newsletter_2">
                </form>
            </div>
            <div class="col-md-2 col-sm-3">
                <h3>Settings</h3>
                <div class="styled-select">
                    <select class="form-control" name="lang" id="lang">
                        <option value="English" selected>English</option>
                        <option value="French">French</option>
                        <option value="Spanish">Spanish</option>
                        <option value="Russian">Russian</option>
                    </select>
                </div>
                <div class="styled-select">
                    <select class="form-control" name="currency" id="currency">
                        <option value="USD" selected>USD</option>
                        <option value="EUR">EUR</option>
                        <option value="GBP">GBP</option>
                        <option value="RUB">RUB</option>
                    </select>
                </div>
            </div>
        </div><!-- End row -->
        <div class="row">
            <div class="col-md-12">
                <div id="social_footer">
                    <ul>
                        <li><a href="#0"><i class="icon-facebook"></i></a></li>
                        <li><a href="#0"><i class="icon-twitter"></i></a></li>
                        <li><a href="#0"><i class="icon-google"></i></a></li>
                        <li><a href="#0"><i class="icon-instagram"></i></a></li>
                        <li><a href="#0"><i class="icon-pinterest"></i></a></li>
                        <li><a href="#0"><i class="icon-vimeo"></i></a></li>
                        <li><a href="#0"><i class="icon-youtube-play"></i></a></li>
                    </ul>
                    <p>
                        © Quick Food 2015
                    </p>
                </div>
            </div>
        </div><!-- End row -->
    </div><!-- End container -->
    </footer>
    <!-- End Footer =============================================== -->

<div class="layer"></div><!-- Mobile menu overlay mask -->

<!-- Login modal -->   
<div class="modal fade" id="login_2" tabindex="-1" role="dialog" aria-labelledby="myLogin" aria-hidden="true">
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "food";

$conn = new mysqli($servername, $username, $password, $dbname);


if(isset($_POST["login"])){ 
   
    $pw=md5($_POST['Password']);
	$sql="SELECT * from user 
    where Email ='$_POST[Email]' and Password='$pw'  ";
    $result = mysqli_query($conn,$sql);
	if($row=mysqli_fetch_array($result))
	{

        echo '<script> alert("Login Successful") </script>';

    }

     else {

        header("Location:detail_page.php");
        echo'
		<script>
		alert( "Invalid Email or Password");
		</script>';
    }

    

}


?>
		<div class="modal-dialog">
			<div class="modal-content modal-popup">
                <a href="" class="close-link"><i class="icon_close_alt2"></i></a>
       
				<form action="" method="POST" class="popup-form" id="myLogin">
                	<div class="login_icon"><i class="icon_lock_alt"></i></div>
					<input type="Email" name='Email' class="form-control form-white" placeholder="Email">
                    <input type="password"name='Password' class="form-control form-white" placeholder="Password">
                    
					<div class="text-middle">
						<a href="#">Forgot Password?</a>
					</div>
					<button type="submit"  name='login' class="btn btn-submit">Submit</button>
				</form>
			</div>
		</div>
	</div><!-- End modal -->   
    
<!-- Register modal -->   
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "food";

$con = new mysqli($servername, $username, $password, $dbname);
if(isset($_POST['register']))
{
	$FirstName = mysqli_real_escape_string($con, $_POST['FirstName']);
	$LastName = mysqli_real_escape_string($con, $_POST['LastName']);
	$Email = mysqli_real_escape_string($con, $_POST['Email']);
	$PhoneNumber=mysqli_real_escape_string($con,$_POST['PhoneNumber']);
	$Gender=mysqli_real_escape_string($con,$_POST['Gender']);
	$Password = md5(mysqli_real_escape_string($con, $_POST['Password']));
	
	if(mysqli_query($con, "INSERT INTO user(FirstName,LastName,Gender,Email,Password,PhoneNumber) VALUES('".$FirstName."','".$LastName."','".$Gender."','".$Email."','".$Password."','".$PhoneNumber."')"))
	{	
            $msg = 'Congratulation you have successfully registered.';
		
        
       
	}
	else
	{
            $msg = 'Error while registering you...';
	
       
        
	}
}

?>
<div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="myRegister" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content modal-popup">
				<a href="" class="close-link"><i class="icon_close_alt2"></i></a>
				<form class="popup-form"method="POST" action="{{ route('register') }}">
                @csrf
                	<div class="login_icon"><i class="icon_lock_alt"></i></div>
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="First Name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror                   
                    <input id="lname" type="text" class="form-control @error('lname') is-invalid @enderror" placeholder="Last Name" name="lname" value="{{ old('lname') }}" required autocomplete="lname">
                    @error('lname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                    <input type="tel"  class="form-control @error('number') is-invalid @enderror" name="number" value="{{ old('number') }}" required autocomplete="number" placeholder="Phone Number" >
                    @error('number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="E-mail" >
                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">

                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                    <label for="Gender">Choose your Gender:</label>
                    <select class="form-control form-white" name="Gender" id="Gender">
                        <option style='color:black' value="M">Male</option>
                        <option style='color:black' value="F">Female</option>
                    
                      </select>
                    <div id="pass-info" class="clearfix"></div>
					<div class="checkbox-holder text-left">
						<div class="checkbox">
							<input type="checkbox" value="accept_2" id="check_2" name="check_2" />
							<label for="check_2"><span>I Agree to the <strong>Terms &amp; Conditions</strong></span></label>
						</div>
					</div>
					<button type="submit" name="register" class="btn btn-submit">Register</button>
				</form>
			</div>
		</div>
	</div><!-- End Register modal -->
    
<!-- COMMON SCRIPTS -->
<script src="/js/jquery-2.2.4.min.js"></script>
<script src="/js/common_scripts_min.js"></script>
<script src="/js/functions.js"></script>
<script src="/assets/validate.js"></script>

<!-- SPECIFIC SCRIPTS -->
<script src="/js/video_header.js"></script>
<script>
$(document).ready(function() {
	'use strict';
   	  HeaderVideo.init({
      container: $('.header-video'),
      header: $('.header-video--media'),
      videoTrigger: $("#video-trigger"),
      autoPlayVideo: true
    });    

});
</script>

</body>
</html>
