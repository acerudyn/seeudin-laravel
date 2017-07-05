
<!DOCTYPE html>
<html lang="en">
<head>
<title class="title">Akhirudin | Home</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Smart Page Responsive, Web Design, Web Development, Responsive Web, Web Personal, Flat Web,
 Responsive Web Template, Smartphone Compatible Web, Free Web Designs, Jasa Pembuatan Web" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="css/style.css" type="text/css" rel="stylesheet" media="all">
<link href="css/font-awesome.css" type="text/css" rel="stylesheet">		<!-- font-awesome icons -->
<link rel="stylesheet" href="css/swipebox.css">    <!-- swipebox -->
<link rel="stylesheet" type="text/css" href="css/sweetalert.css"> <!-- Sweet Alerts -->
<!-- //Custom Theme files -->
<!-- js -->
<script src="js/jquery-2.2.3.min.js"></script>
<script src="js/sweetalert.min.js"></script>  <!-- JS Sweet Alert -->
<!-- //js -->
<!-- web-fonts -->
<link href="https://fonts.googleapis.com/css?family=Indie+Flower|Roboto" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- //web-fonts -->
<link rel="shortcut icon" type="image/ico" href="css/favicon.png">
</head>
<body>
	<!-- main -->
	<div class="buttons-wrapper">
		<input id="slide1" class="w3slider-input" type="radio" name="slider" checked>
		<input id="slide2" class="w3slider-input" type="radio" name="slider">
		<input id="slide3" class="w3slider-input" type="radio" name="slider">
		<input id="slide4" class="w3slider-input" type="radio" name="slider">
		<ul class="slider">
			<li class="agileits">

<!-- ========== Show Data From DB ================ -->

      <!-- banner -->
      <?php $__currentLoopData = $show; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $profil): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
				<div class="banner">
					<div class="banner-w3lsinfo">
						<h2><img src="images/seeudin-logo.png"></h2>
						<div class="container">
							<div class="col-md-4 header-w3left">
								<img src="images/me.png" alt=""/>
								<div class="header-imgtext-w3ls">
									<h1><?php echo e($profil->name); ?></h1>
									<div class="social-wthree-icons">
										<ul>
											<li><a href="https://www.facebook.com/bagoesragil.sapoetra" class="fa fa-facebook icon icon-border facebook" target="_blank"> </a></li>
											<li><a href="https://github.com/acerudyn" class="fa fa-github icon icon-border dribbble" target="_blank"> </a></li>
											<li><a href="https://plus.google.com/u/0/107794619100035550973" class="fa fa-google-plus icon icon-border googleplus" target="_blank"> </a></li>
											<li><a href="https://www.linkedin.com/in/acerudyn-muhamad-a56b5b126/" class="fa fa-linkedin icon icon-border twitter" target="_blank"> </a></li>
										</ul>
										<div class="clearfix"> </div>
									</div>
								</div>
							</div>
							<div class="col-md-8 header-w3right">
								<h3 class="agileits-title">About Me</h3>
								<div class="profile-agileinfo">
									<p><?php echo e($profil->about); ?></p>
										<div class="col-md-4 col-xs-4 profile-grids">
										<i class="fa fa-user"></i>
										<h5>Personal Info</h5>
										<ul class="address">
											<li>
												<b>D.O.B</b> : 01-07-1993
											</li>
											<li>
												<b>Hobbies</b> : Reading and Swimming
											</li>
											<li>
												<b>Job Title</b> : Graphic & Web Designer
											</li>
										</ul>
									</div>
									<div class="col-md-4 col-xs-4 profile-grids">
										<i class="fa fa-envelope"></i>
										<h5>Contact Me</h5>
										<ul class="address">
											<li>
												<b>Fax</b> :  +62 5695 4579
											</li>
											<li>
												<b>Phone</b> : +62 852 2805 3623
											</li>
											<li>
												<b>Address</b> : Bekasi, West Java
											</li>
										</ul>
									</div>
									<div class="col-md-4 col-xs-4 profile-grids">
										<i class="fa fa-share-alt"></i>
										<h5>Comments</h5>
										<ul class="address">
											<li>
												<b>Website</b> : <a href="#">www.seeudin.com</a>
											</li>
											<li>
												<b>Github</b> : <a href="https://github.com/acerudyn"> github.com/acerudyn</a>
											</li>
											<li>
											<b>Email</b> : <a href="mailto:acerudyn@yahoo.com.com"> acerudyn@yahoo.com.com</a>
											</li>
										</ul>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
				<!-- //banner -->
			</li>
			<li class="agileits">
				<!-- skills -->
				<div class="skills">
					<div class="container">
						<div class="col-md-8 skills-w3lsleft">
							<h3 class="agileits-title">My Skills</h3>
							<p><?php echo e($profil->skill); ?></p>
							<div class="skill-agileinfo">
								<div class="skillbar" data-percent="97">
									<span class="skillbar-title" style="background: #d35400;">HTML5</span>
									<p class="skillbar-bar" style="background: #e67e22;"></p>
									<span class="skill-bar-percent"></span>
								</div>
								<!-- End Skill Bar -->
								<div class="skillbar" data-percent="95">
									<span class="skillbar-title" style="background: #2980b9;">CSS3</span>
									<p class="skillbar-bar" style="background: #3498db;"></p>
									<span class="skill-bar-percent"></span>
								</div>
								<!-- End Skill Bar -->
								<div class="skillbar" data-percent="73">
									<span class="skillbar-title" style="background: #1d3a68;">SQL</span>
									<p class="skillbar-bar" style="background: #2c3e50;"></p>
									<span class="skill-bar-percent"></span>
								</div>
								<!-- End Skill Bar -->
								<div class="skillbar" data-percent="87">
									<span class="skillbar-title" style="background: #46465e;">PHP</span>
									<p class="skillbar-bar" style="background: #5a68a5;"></p>
									<span class="skill-bar-percent"></span>
								</div>
								<!-- End Skill Bar -->
								<div class="skillbar" data-percent="67">
									<span class="skillbar-title" style="background: #700a21">JAVA</span>
									<p class="skillbar-bar" style="background: #cc3d5d;"></p>
									<span class="skill-bar-percent"></span>
								</div>
								<!-- End Skill Bar -->
								<div class="skillbar" data-percent="81">
									<span class="skillbar-title" style="background: #1d6b2d;">C++</span>
									<p class="skillbar-bar" style="background: #3aa851;"></p>
									<span class="skill-bar-percent"></span>
								</div>
								<!-- End Skill Bar -->
							</div>
						</div>
						<div class="col-md-4 services">
							<h3 class="agileits-title">My Services</h3>
							<div class="serv-wthree-row w3layouts">
								<div class="col-xs-3 services-w3lsleft">
									<span class="glyphicon glyphicon-picture" aria-hidden="true"></span>
								</div>
								<div class="col-xs-9 services-w3lsright">
									<h4>Graphic Design</h4>
									<p>I can make a brand icon, logo, posters, business cards, and more.</p>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="serv-wthree-row w3layouts serv-wthree-rowmdl">
								<div class="col-xs-3 services-w3lsleft">
									<span class="glyphicon glyphicon-globe" aria-hidden="true"></span>
								</div>
								<div class="col-xs-9 services-w3lsright">
									<h4>Web Design</h4>
									<p>Personal website, e-coommerece, company profile and many others.</p>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="serv-wthree-row w3layouts">
								<div class="col-xs-3 services-w3lsleft">
									<span class="glyphicon glyphicon-console" aria-hidden="true"></span>
								</div>
								<div class="col-xs-9 services-w3lsright">
									<h4>Development</h4>
									<p>Desktop applications such as accounting programs, inventory, etc.</p>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="serv-wthree-row w3layouts">
								<div class="col-xs-3 services-w3lsleft">
									<span class="glyphicon glyphicon-blackboard" aria-hidden="true"></span>
								</div>
								<div class="col-xs-9 services-w3lsright">
									<h4>IT Consultant</h4>
									<p>I can give a solution to the problems of information technology.</p>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<!-- //skills -->
			</li>
			<li class="agileits">
				<!-- work -->
				<div class="work agileits-w3layouts">
					<div class="container">
						<div class="col-md-6 work-agile-left">
							<h3 class="agileits-title">Work Experience</h3>
							<div class="panel-group w3l_panel_group_faq" id="accordion" role="tablist" aria-multiselectable="true">

								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="headingOne">
										<h4 class="panel-title asd">
											<a class="pa_italic" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
												<span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i> 2016 - Now
											</a>
										</h4>
									</div>
									<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
										<div class="panel-body panel_text">
											<h5>PT. Surya Kencana Cipta Semesta </h5>
											As a Junior Programmer in the manufacture of EDC and ATM softwere.
										</div>
									</div>
								</div>

								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="headingTwo">
										<h4 class="panel-title asd">
											<a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
												<span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i> 2014 - 2016
											</a>
										</h4>
									</div>
									<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
										<div class="panel-body panel_text">
											<h5>PT. Haier Electrical Appliances Indonesia </h5>
											Worked as a Quality Control in the manufacture of refrigerators.
										</div>
									</div>
								</div>

								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="headingThree">
										<h4 class="panel-title asd">
											<a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
											<span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i> 2013 - 2014
											</a>
										</h4>
									</div>
									<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
										<div class="panel-body panel_text">
											<h5>PT. Tempo Scan Pasific, Tbk </h5>
											Worked as a Production Operator in a pharmaceutical company
										</div>
									</div>
								</div>

								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="headingsix">
										<h4 class="panel-title asd">
											<a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
											<span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i> 2012 - 2013
											</a>
										</h4>
									</div>
									<div id="collapsesix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingsix">
										<div class="panel-body panel_text">
											<h5>PT. Nippon Indosari Corpindo, Tbk </h5>
											Worked as a Production Operator in the food company
										</div>
									</div>
								</div>

								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="headingseven">
										<h4 class="panel-title asd">
											<a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseseven" aria-expanded="false" aria-controls="collapseseven">
											<span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i> 2011 - 2012
											</a>
										</h4>
									</div>
									<div id="collapseseven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingseven">
										<div class="panel-body panel_text">
											<h5>PT. Techno Indonesia </h5>
											Worked as a Warehouse Administrator in the Automotive and Electronic Components Company.
										</div>
									</div>
								</div>

							</div>
							<h3 class="agileits-title agileits-title2">My Education</h3>
							<div class="panel-group w3l_panel_group_faq" role="tablist" id="accordion1">
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="headingfour">
										<h4 class="panel-title asd">
											<a class="pa_italic" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsefour" aria-expanded="true" aria-controls="collapsefour">
												<span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i> Diploma III (2013 - 2016)
											</a>
										</h4>
									</div>
									<div id="collapsefour" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingfour">
										<div class="panel-body panel_text">
											<h5>Bina Sarana Informatika</h5>
											Passed Diploma in Informatics Management Majors with a GPA of 3.33
										</div>
									</div>
								</div>

								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="headingfive">
										<h4 class="panel-title asd">
											<a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
												<span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>Senior High School (2008 - 2011)
											</a>
										</h4>
									</div>
									<div id="collapsefive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfive">
										<div class="panel-body panel_text">
											<h5>SMK Cipta Karya</h5>
											High school graduation Majors in Electronics Engineering and Audio Video
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 work-agile-right">
							<h3 class="agileits-title">My Projects</h3>
							<!-- Projects -->
							<div class="Projects">
								<div class="col-md-6 col-sm-6 col-xs-6 agileits-img">
									<a href="images/yuk-ngaji.png" class="swipebox" title="Yuk Ngaji">
										<img class="img-responsive " src="images/yuk-ngaji.png" alt=""  />
										<div class="wthree-pcatn">
											<h4>Yuk Ngaji</h4>
										</div>
									</a>
								</div>
								<div class="col-md-6 col-sm-6 col-xs-6 agileits-img">
									<a href="images/asdr.png" class="swipebox" title="Ada Surga Dirumahmu">
										<img src="images/asdr.png" alt="" class="img-responsive" />
										<div class="wthree-pcatn">
											<h4>Ada Surga Di Rumahmu</h4>
										</div>
									</a>
								</div>
								<div class="col-md-6 col-sm-6 col-xs-6 agileits-img">
									<a href="images/cover.png" class="swipebox" title="Cover Makalah Web programming">
										<img src="images/cover.png" alt="" class="img-responsive" />
										<div class="wthree-pcatn">
											<h4>Cover Buku Web Programming</h4>
										</div>
									</a>
								</div>
								<div class="col-md-6 col-sm-6 col-xs-6 agileits-img">
									<a href="images/hijrah.png" class="swipebox" title="My Hijrah My Adventure">
										<img src="images/hijrah.png" alt="" class="img-responsive" />
										<div class="wthree-pcatn">
											<h4>My Hijrah My Adventure</h4>
										</div>
									</a>
								</div>
								<div class="col-md-6 col-sm-6 col-xs-6 agileits-img">
									<a href="images/quality.png" class="swipebox" title="Jaket Quality Assembly Production">
										<img src="images/quality.png" alt="" class="img-responsive" />
										<div class="wthree-pcatn">
											<h4>Quality Assembly</h4>
										</div>
									</a>
								</div>
								<div class="col-md-6 col-sm-6 col-xs-6 agileits-img">
									<a href="images/bookstore.png" class="swipebox" title="Vertical Bookstore">
										<img src="images/bookstore.png" alt="" class="img-responsive" />
										<div class="wthree-pcatn">
											<h4>Vertical Bookstore</h4>
										</div>
									</a>
								</div>
							</div>
							<!-- //Projects -->

							<div class="col-md-6 contact-wthree-right" style="padding: 0 5px 0 0; margin: 0px;">
								<a href="https://drive.google.com/file/d/0B8uFXBpr9m_FUUNKVXRxazVPRjA/view?usp=sharing" target="_blank"><input type="submit" value="DOWNLOAD CV" ></a>
							</div>
							<div class="col-md-6 contact-wthree-right" style="padding: 0 5px 0 0; margin: 0px;">
								<a href="<?php echo e('/projects'); ?>" target="_blank"><input type="submit" value="VIEW MORE PROJECTS" ></a>
							</div>

						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<!-- //work -->
			</li>
			<li class="agileits">
				<!-- contact -->
				<div class="contact agileits-w3layouts">
					<div class="container">
						<h3 class="agileits-title">Contact Me</h3>
						<div class="contact-w3lsrow">
							<div class="col-md-6 contact-wthree-left">
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.932085311053!2d107.14962101418303!3d-6.272661163149586!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6984ded385aa19%3A0x6558a643c034b4bf!2sKP.sempu+DARUSSALAM%2Ccikarang!5e0!3m2!1sen!2s!4v1487582714238" allowfullscreen></iframe>
								<div class="faddressw3-agileinfo">
									<div class="faddress-w3left">
										<p>Bekasi, West Java<br> 17750, North Cikarang </p>
									</div>
									<div class="faddress-w3right">
										<p>Call us :  +62 852 2805 3623</p>
										<p>E-mail : <a href="acerudyn@yahoo.com">acerudyn@yahoo.com</a></p>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
							<div class="col-md-6 contact-wthree-right">
								<form action="/create" method="post">
									<input type="text" name="name" placeholder="Name" value="<?php echo e(old('name')); ?>" required>
                    <?php if($errors->has('name')): ?>
                      <p style="color:red;"><?php echo e($errors->first('name')); ?></p>  <!-- Error validasi -->
                    <?php endif; ?>
									<input type="email" class="email" name="email" placeholder="Email" value="<?php echo e(old('email')); ?>" required>
                    <?php if($errors->has('email')): ?>
                      <p style="color:red;"><?php echo e($errors->first('email')); ?></p>  <!-- Error validasi -->
                    <?php endif; ?>
                  <input type="text" class="phone" name="phone" placeholder="Phone" value="<?php echo e(old('phone')); ?>" required>
                    <?php if($errors->has('phone')): ?>
                      <p style="color:red;"><?php echo e($errors->first('phone')); ?></p>  <!-- Error validasi -->
                    <?php endif; ?>
                  <textarea name="message" placeholder="Message" required><?php echo e(old('message')); ?></textarea>
                    <?php if($errors->has('message')): ?>
                      <p style="color:red;"><?php echo e($errors->first('message')); ?></p>  <!-- Error validasi -->
                    <?php endif; ?>
                  <input type="submit" name="submit" value="SUBMIT" >
                  <?php echo e(csrf_field()); ?>

								</form>
							</div>
							<div class="clearfix"> </div>
						</div>
						<!-- footer -->
						<div class="agile-footer">
							<p>Made with <i style="color: red;" class="fa fa-heart"></i> by <b><a href="http://seeudin.com/" target="_blank">seeudin</a></b> -
                © 2017 All rights reserved</p>
						</div>
						<!-- //footer -->
					</div>
				</div>
				<!-- //contact -->
			</li>
		</ul>
			<label for="slide1"></label>
			<label for="slide2"></label>
			<label for="slide3"></label>
			<label for="slide4"></label>
	</div>
	<!-- //main -->
	<!-- swipe box js -->
	<script src="js/jquery.swipebox.min.js"></script>
	<script type="text/javascript">
			jQuery(function($) {
				$(".swipebox").swipebox();
			});
	</script>
	<!-- //swipe box js -->
	<!-- Skill Bar js -->
	<script src="js/skill.bars.jquery.js"></script>
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
    <script src="js/bootstrap.js"></script>

<?php echo $__env->make('Alerts::sweetalerts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>; <!-- Sweet Alerts -->

</body>
</html>
