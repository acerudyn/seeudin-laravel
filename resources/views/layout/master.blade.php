
<!DOCTYPE html>
<html lang="en">
<head>
<title>@yield ('title')</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Smart Error Page Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="../css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="../css/style.css" type="text/css" rel="stylesheet" media="all">
<link href="../css/font-awesome.css" rel="stylesheet">		<!-- font-awesome icons -->
<link rel="stylesheet" href="../css/swipebox.css">    <!-- swipebox -->
<!-- //Custom Theme files -->
<!-- js -->
<script src="../js/jquery-2.2.3.min.js"></script>
<!-- //js -->
<!-- web-fonts -->
<link href="https://fonts.googleapis.com/css?family=Indie+Flower|Roboto" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- //web-fonts -->
<link rel="shortcut icon" type="image/ico" href="../css/favicon.png">
</head>
<body>
	<div class="buttons-wrapper">
		<!-- contact -->
		<div class="contact agileits-w3layouts" style="background: url(../images/slide5.jpg) no-repeat center center fixed;
																									-webkit-background-size: 100% 100%;	-moz-background-size: 100% 100%;
																									-o-background-size: 100% 100%;	background-size: 100% 100%;	padding-top: 3em;">
			<div class="container">
				<h3 class="agileits-title" style="margin-bottom: 0em; padding-bottom: 7px;">My Projects</h3>

				<ul class="portfolio-filter text-center">
					<li><a class="btn btn-default" href="{{'/projects'}}" data-filter="*">All Works</a></li>
					<li><a class="btn btn-default" href="{{'/project/card'}}" data-filter=".bootstrap">Bussines Card</a></li>
					<li><a class="btn btn-default" href="{{'/project/icon'}}" data-filter=".html">Brand & Icons</a></li>
					<li><a class="btn btn-default" href="{{'/project/web'}}" data-filter=".wordpress">Web Development</a></li>
					<li><a class="btn btn-default" href="{{'/project/poster'}}" data-filter=".bootstrap">Posters</a></li>
					<li><a class="btn btn-default" href="{{'/project/clothes'}}" data-filter=".bootstrap">Clothes</a></li>
				</ul><!--/#portfolio-filter-->

  @yield('content')

        </div> <!-- End Div Container -->
        </div> <!-- //contact -->

        </div>	<!-- End Div Wrapper -->
        <!-- //main -->
        <!-- swipe box js -->
        <script src="../js/jquery.swipebox.min.js"></script>
        <script type="text/javascript">
        jQuery(function($) {
        $(".swipebox").swipebox();
        });
        </script>
        <!-- //swipe box js -->
        <!-- Skill Bar js -->
        <script src="../js/skill.bars.jquery.js"></script>
        <script>
        $(document).ready(function(){

        $('.skillbar').skillBars({
        from: 0,
        speed: 4000,
        interval: 100,
        decimals: 0,
        });

        });
        </script>
        <!-- //End Skill Bar js -->
        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="../js/bootstrap.js"></script>
        </body>
        </html>
