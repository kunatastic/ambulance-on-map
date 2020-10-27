<?php
    require '../config.php';
    session_start();
?>
<!DOCTYPE html>
<html>
<style>

@charset "UTF-8";
@import url(https://fonts.googleapis.com/css?family=Open+Sans:300,400,700);

body {
  font-family: 'Open Sans', sans-serif;
  font-weight: 300;
  line-height: 1.42em;
  color:#A7A1AE;
  background-color:#1F2739;
}

h1 {
  font-size:3em; 
  font-weight: 300;
  line-height:1em;
  text-align: center;
  color: #4DC3FA;
}

h2 {
  font-size:1em; 
  font-weight: 300;
  text-align: center;
  display: block;
  line-height:1em;
  padding-bottom: 2em;
  color: #FB667A;
}

h2 a {
  font-weight: 700;
  text-transform: uppercase;
  color: #FB667A;
  text-decoration: none;
}

.blue { color: #185875; }
.yellow { color: #FFF842; }

.ZZ th h1 {
	  font-weight: bold;
	  font-size: 1em;
  text-align: left;
  color: #185875;
}

.zz td {
	  font-weight: normal;
	  font-size: 1em;
  -webkit-box-shadow: 0 2px 2px -2px #0E1119;
	   -moz-box-shadow: 0 2px 2px -2px #0E1119;
	        box-shadow: 0 2px 2px -2px #0E1119;
}

.zz {
	  text-align: left;
	  overflow: hidden;
	  width: 80%;
	  margin: 0 auto;
  display: table;
  padding: 0 0 8em 0;
}

.zz td, .zz th {
	  padding-bottom: 2%;
	  padding-top: 2%;
  padding-left:2%;  
}

/* Background-color of the odd rows */
.zz tr:nth-child(odd) {
	  background-color: #323C50;
}

/* Background-color of the even rows */
.zz tr:nth-child(even) {
	  background-color: #2C3446;
}

.zz th {
	  background-color: #1F2739;
}

.zz td:first-child { color: #FB667A; }

.zz tr:hover {
   background-color: #464A52;
-webkit-box-shadow: 0 6px 6px -6px #0E1119;
	   -moz-box-shadow: 0 6px 6px -6px #0E1119;
	        box-shadow: 0 6px 6px -6px #0E1119;
}

.zz td:hover {
  background-color: #FFF842;
  color: #403E10;
  font-weight: bold;
  
  box-shadow: #7F7C21 -1px 1px, #7F7C21 -2px 2px, #7F7C21 -3px 3px, #7F7C21 -4px 4px, #7F7C21 -5px 5px, #7F7C21 -6px 6px;
  transform: translate3d(6px, -6px, 0);
  
  transition-delay: 0s;
	  transition-duration: 0.4s;
	  transition-property: all;
  transition-timing-function: line;
}

@media (max-width: 800px) {
.zz td:nth-child(4),
.zz th:nth-child(4) { display: none; }
}

</style>
<head>
	<title>Employee Details </title>
<!--
Conquer Template
http://www.templatemo.com/tm-476-conquer
-->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/style.css">
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
                    <li><a href="../index.php">Logout</a></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
					<li><a href="#">
                        <?php 
                            $user = $_SESSION['username'];
                            echo 'Welcome: '."<strong>".$user."<br></strong>";
                        ?>
                        </a>
                    </li>
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
							<h1>Emergency</h1>
							<h4>Online <span style="color: red;">Ambulance</span> Allotment Management</h4>
						</div>
					</div>
				</div>
			</div>
		</header>
    </div>
    
   

<table class="zz">
	<thead>
		<tr>
			<th><h1 style="color: lightyellow;">Name</h1></th>
			<th><h1 style="color: lightyellow;">Employee ID</h1></th>
			<th><h1 style="color: lightyellow;">Phone Number</h1></th>
            <th><h1 style="color: lightyellow;">Email ID</h1></th>
            <th><h1 style="color: lightyellow;">Password</h1></th>
		</tr>
    </thead>
	<tbody>
        <?php
            $query = "SELECT * FROM SIGNUP;";
            $query_run = mysqli_query($con,$query);


            while($row = mysqli_fetch_array($query_run))
            {
            echo "<tr>";
            echo "<td>" . $row['Name'] . "</td>";
            echo "<td>" . $row['eid'] . "</td>";
            echo "<td>" . $row['phone_no'] . "</td>";
            echo "<td>" . $row['email_id'] . "</td>";
            echo "<td>" . $row['password'] . "</td>";
            echo "</tr>";
            }
        ?>
	</tbody>
</table>
    
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
        $('.intro-section').parallax({
        	imageSrc: 'img/top2.jpg',
        	speed: 0.2
        });
        $('.services-section').parallax({
        	imageSrc: 'img/bg-2.jpg',
        	speed: 0.2
    	});
        $('.contact-section').parallax({
        	imageSrc: 'img/bg-3.jpg',
        	speed: 0.2
        });    

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