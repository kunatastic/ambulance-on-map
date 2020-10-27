<?php
    require '../config.php';
    session_start();
?>
<!DOCTYPE html>
<html>
<style>
body {
	background: #fafafa url(https://jackrugile.com/images/misc/noise-diagonal.png);
	color: #444;
	font: 100%/30px 'Helvetica Neue', helvetica, arial, sans-serif;
	text-shadow: 0 1px 0 #fff;
}

strong {
	font-weight: bold; 
}

em {
	font-style: italic; 
}

table {
	background: #f5f5f5;
	border-collapse: separate;
	box-shadow: inset 0 1px 0 #fff;
	font-size: 15px;
	line-height: 24px;
	margin: 30px auto;
	text-align: left;
	width: 800px;
}	

th {
	background: url(https://jackrugile.com/images/misc/noise-diagonal.png), linear-gradient(#777, #444);
	border-left: 1px solid #555;
	border-right: 1px solid #777;
	border-top: 1px solid #555;
	border-bottom: 1px solid #333;
	box-shadow: inset 0 1px 0 #999;
	color: #fff;
  font-weight: bold;
	padding: 10px 15px;
	position: relative;
	text-shadow: 0 1px 0 #000;	
}

th:after {
	background: linear-gradient(rgba(255,255,255,0), rgba(255,255,255,.08));
	content: '';
	display: block;
	height: 25%;
	left: 0;
	margin: 1px 0 0 0;
	position: absolute;
	top: 25%;
	width: 100%;
}

th:first-child {
	border-left: 1px solid #777;	
	box-shadow: inset 1px 1px 0 #999;
}

th:last-child {
	box-shadow: inset -1px 1px 0 #999;
}

td {
	border-right: 1px solid #fff;
	border-left: 1px solid #e8e8e8;
	border-top: 1px solid #fff;
	border-bottom: 1px solid #e8e8e8;
	padding: 10px 15px;
	position: relative;
	transition: all 300ms;
}

td:first-child {
	box-shadow: inset 1px 0 0 #fff;
}	

td:last-child {
	border-right: 1px solid #e8e8e8;
	box-shadow: inset -1px 0 0 #fff;
}	

tr {
	background: url(https://jackrugile.com/images/misc/noise-diagonal.png);	
}

tr:nth-child(odd) td {
	background: #f1f1f1 url(https://jackrugile.com/images/misc/noise-diagonal.png);	
}

tr:last-of-type td {
	box-shadow: inset 0 -1px 0 #fff; 
}

tr:last-of-type td:first-child {
	box-shadow: inset 1px -1px 0 #fff;
}	

tr:last-of-type td:last-child {
	box-shadow: inset -1px -1px 0 #fff;
}	

tbody:hover td {
	color: transparent;
	text-shadow: 0 0 3px #aaa;
}

tbody:hover tr:hover td {
	color: #444;
	text-shadow: 0 1px 0 #fff;
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
            <th><h1 >Name</h1></th>
            <th><h1 >Email ID</h1></th>
            <th><h1 >Subject</h1></th>
            <th><h1 >Message</h1></th>
         </tr>
      </thead>
      <tbody>
         <?php
               $query = "SELECT * FROM feedback;";
               $query_run = mysqli_query($con,$query);


               while($row = mysqli_fetch_array($query_run))
               {
                  echo "<tr>";
                  echo "<td>" . $row['name'] . "</td>";
                  echo "<td>" . $row['email_id'] . "</td>";
                  echo "<td>" . $row['subject'] . "</td>";
                  echo "<td>" . $row['msg'] . "</td>";
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