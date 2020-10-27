<?php
    require 'config.php';
    session_start();
?>
<!DOCTYPE html>
<html>
<style>

#mainwrapper{
	width:600px;
	margin:0 auto;
	background: white;
	padding: 10px;
	border-radius: 10px;
	border: 1px solid #2c3e50;
}

.myform{
	width:450px;
	margin: 0 auto;
	padding: 5px;
}

.inputvalues{
	margin-top: 10px;
	width: 415px ;
	margin:5px;
	padding: 5px;
	height: 33px;
	font-size: 20px;
	border:1.2px solid #ccc;
}

.login_btn{
	margin-left: 50px;
	margin-top:0px;
	margin-bottom:10px;
	background-color: #283655;
	padding:5px;
	color:white;
	width:30%;
	text-align:center;
	font-size:18px;
	font-weight:bold;
	border-radius:5px;
	height: 40px;		
}

.enter{
	margin-top:0px;
	margin-bottom:10px;
	background-color: #283655;
	padding:5px;
	color:white;
	width:34%;
	text-align:center;
	font-size:18px;
	font-weight:bold;
	border-radius:5px;
	height: 40px;		
}


</style>
<head>
	<title>Ambulance</title>
<!--
Conquer Template
http://www.templatemo.com/tm-476-conquer
-->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>                        
				</button>
			</div>   
			<div class="single-page-nav sticky-wrapper" id="tmNavbar">
				<ul class="nav navbar-nav">
					<li><a href="#section1">Homepage</a></li>
					<li><a href="#section3">Services</a></li>
					<li><a href="#section2">About Us</a></li>
					<li><a href="#section4">Contact</a></li>
					
				</ul>
			</div>   
		</div>
    </nav>
    <div id="section1">
		<header id="header-area" class="intro-section">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 text-center">
						<div class="header-content">
							<h1>Hospital Login</h1>
							<h4>Online <span style="color: red;">Ambulance</span> Allotment Management</h4>
						</div>
					</div>
				</div>
			</div>
		</header>
    </div>

    <div id="mainwrapper">
		<center>
			<h1>Login</h1>
		</center>

		<form method="post" class="myform">
			<!-- Username-->
			<input type="text" placeholder="Employee ID" name="username" id="username" class="inputvalues" autocomplete="off" required/><br/>
			<br/>

			<!-- Pass-->
			<input type="password" placeholder="Password" name="pass" id="pass" class="inputvalues" autocomplete="off" required/><br/>
			<br/>
        <hr>
			<center><input type="submit" name="enter" id="enter" class="enter" value="Click to Login"/></center>
		</form>
		<hr>
		
		<?php
			if (isset($_POST['enter'])){

				$username=$_POST['username'];
                $password=$_POST['pass'];
                
                if ($username == 'admin' && $password == 'admin')
                {
                    echo '<script type="text/javascript">Confirm("Login succesfully")</script>';
                    $_SESSION['username']=$username;
                    header('location:hospital/logadmin.php');
                    return;
                }
                else{

                    $query="select * from signup where eid='$username' and password='$password'";
                    $run_query=mysqli_query($con,$query);

                    if (mysqli_num_rows($run_query)==1)
                    {
                        //valid
                        $_SESSION['username']=$username;
                        echo '<script type="text/javascript">alert("Login succesfully")</script>';
                        header('location:hospital/logempl.php');
                    }else{
                        //invalid
                        echo '<script type="text/javascript">alert("Invalid credential. Try Again...")</script>';
                    }
                }
			}

		?>
	</div>
    <!-- Start Footer Area -->
    <footer id="footer-area">
						<div class="container">
							<div class="row text-center">
								<div class="col-sm-12">
									<div class="footer-content">
										<h1>Use it free!</h1>
										<p>“Conquer is free Bootstrap template from templatemo website. 
											<br>No backlink is required to use this layout.”</p>
										</div>                
									</div>
								</div>
							</div>
							<hr>
							<div class="container">
								<div class="row">
									<div class="col-sm-12 text-center">             
										<p class="copy">Copyright © 2020 Kunal	 
                                        
                                        | Design: templatemo</p>
									</div>
								</div>
							</div>
						</footer>
						<!-- End Footer Area -->
    <script src="js/jquery-1.11.2.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script> <!-- https://github.com/markgoodyear/scrollup -->
	<script src="js/jquery.singlePageNav.min.js"></script> <!-- https://github.com/ChrisWojcik/single-page-nav -->
	<script src="js/parallax.js-1.3.1/parallax.js"></script> <!-- http://pixelcog.github.io/parallax.js/ -->
	<script>

    // HTML document is loaded. DOM is ready.
    $(function() {  

    // Parallax
        // $('.intro-section').parallax({
        // 	imageSrc: 'img/top2.jpg',
        // 	speed: 0.2
        // });
        // $('.services-section').parallax({
        // 	imageSrc: 'img/bg-2.jpg',
        // 	speed: 0.2
    	// });
        // $('.contact-section').parallax({
        // 	imageSrc: 'img/bg-3.jpg',
        // 	speed: 0.2
        // });    

        // jQuery Scroll Up / Back To Top Image
        $.scrollUp({
                scrollName: 'scrollUp',      // Element ID
		        scrollDistance: 300,         // Distance from top/bottom before showing element (px)
		        scrollFrom: 'top',           // 'top' or 'bottom'
		        scrollSpeed: 1000,            // Speed back to top (ms)
		        easingType: 'linear',        // Scroll to top easing (see http://easings.net/)
		        animation: 'fade',           // Fade, slide, none
		        animationSpeed: 300,         // Animation speed (ms)		        
		        scrollText: '', // Text for element, can contain HTML		        
		        scrollImg: true            // Set true to use image		        
            });

        // ScrollUp Placement
        $( window ).on( 'scroll', function() {

            // If the height of the document less the height of the document is the same as the
            // distance the window has scrolled from the top...
            if ( $( document ).height() - $( window ).height() === $( window ).scrollTop() ) {

                // Adjust the scrollUp image so that it's a few pixels above the footer
                $('#scrollUp').css( 'bottom', '80px' );

            } else {      
                // Otherwise, leave set it to its default value.
                $('#scrollUp').css( 'bottom', '30px' );        
            }
        });

        $('.single-page-nav').singlePageNav({
        	offset: $('.single-page-nav').outerHeight(),
        	speed: 1500,
        	filter: ':not(.external)',
        	updateHash: true
        });

        $('.navbar-toggle').click(function(){
        	$('.single-page-nav').toggleClass('show');
        });

        $('.single-page-nav a').click(function(){
        	$('.single-page-nav').removeClass('show');
        });
        
    });
</script>
</body>
</html>