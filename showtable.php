	<!doctype html>
	<html lang="">

	<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><meta http-equiv="x-ua-compatible" content="ie=edge"><meta name="description" content=""><meta name="viewport" content="width=device-width, initial-scale=1">
		<title>inFlynitet</title>
		<!-- Favicon -->
		<link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon" />
		<link href="images/favicon.ico" rel="icon" type="image/x-icon" /><!-- Google Web Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700|Lato:300,400,700,900" rel="stylesheet" /><!-- Bootstrap -->
		<link href="css/bootstrap.min.css" rel="stylesheet" /><!-- Font Aweosme -->
		<link href="css/font-awesome.min.css" rel="stylesheet" /><!-- Owl Carousel -->
		<link href="css/owl.carousel.min.css" rel="stylesheet" /><!-- Magnific Popup -->
		<link href="css/magnific-popup.css" rel="stylesheet" /><!-- Animate CSS -->
		<link href="css/animate.css" rel="stylesheet" /><!-- Custom Stylesheet -->
		<link href="css/normalize.css" rel="stylesheet" />
		<link href="css/style.css" rel="stylesheet" />
		<link href="css/responsive.css" rel="stylesheet" /><script src="js/vendor/modernizr-2.8.3.min.js"></script><!-- Color Switcher -->
		<link href="css/colors/red.css" id="color-switch" rel="stylesheet" />
	</head>
	<body><!-- Header -->
	<header id="home">
	<nav class="navbar navbar-default" id="main-nav">
	<div class="container">
	<div class="row">
	<div class="col-sm-12"><!-- Brand and toggle get grouped for better mobile display -->
	<div class="navbar-header"><button class="navbar-toggle" data-target=".navbar-morki" data-toggle="collapse" type="button"><span class="sr-only">Toggle navigation</span></button><a class="navbar-brand" href="index-2.html"><img src="images/001.gif" class="img-responsive img-circle margin" style="height: 75px;margin-top:-10px;" /></a>
	<h1 style="color: #3ED2D0;display:inline;font-family: Comic Sans MS;padding-top:20px;font-size:50px;">inFlynite</h1></div>
	<!-- Collect the nav links, forms, and other content for toggling -->

	<div class="collapse navbar-collapse navbar-morki">
	<form action="showtable.php" method="POST">
	<ul class="nav navbar-nav navbar-right">
		<li><a href="index.php#home">Home</a></li>
		<li><a data-scroll="" href="index.php#features">Features</a></li>
		<li><a data-scroll="" href="index.php#contact">Contact</a></li>
		<li class="nav-download-btn"><a href="flightables.php">Back</a></li>
	</form>
	</ul>
	</div>
	<!-- .navbar-collapse --></div>
	</div>
	</div>
	</nav>
	</header>
	<!-- Ends: header -->


	<!-- Arrival Table -->

	<section class="services service-style2" id="features" >
		<div class="container">
			<div class="row">
				<div class="col-sm-12 section-header" >
				<h2 class="featurehead">ARRIVALS</h2>
				</div>

				<div class="col-md-12 col-sm-12">
					<div class="service-box2" >
		 
		 <!--table-->
						 <div class="container-fluid" >
						<table class = "table table-hover">
							<thead>
							  <tr>
								<th>TIME</th>
								<th>FLIGHT</th>
								<th>FROM</th>
								<th>GATE</th>
								<th>STATUS</th>
							  </tr>
							</thead>
							<tbody>
							  <?php include('showtable2.php');?>				 
							</tbody>
						  </table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
		
	<!--Modal starts-->
					<div id="id01" class="modal">
					<form class="modal-content3 animate" action="/action_page.php">
						<div class="imgcontainer">
								  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
								  <img src="images/Aviation.png" alt="Avatar" class="avatar" style="background-color: white;">
						</div>
						<div class="container">
								  <h1 style="margin-left:200px;">Manage your flights</h1>
								  <p style="font-size:25px;"><b>Add a flight info to the table!</b></p><br>
								  <a href="arrivals2.php" class="insertbtn" style="background-color:white;color:#ef494d;border:1px solid white;padding:10px;"><b>Insert</b></a>
								  <br><br><br>
								  <div><p style="font-size:25px;"><b>Or you could search your flight to edit or delete!</b></p></div><br>
								  <a href="searchpagearrivals.php" style="background-color:white;color:#ef494d;border:1px solid white;padding:10px;" class="insertbtn"><b>Edit</b></a>&nbsp;
								  <a href="searchdeletearrivals.php" style="background-color:white;color:#ef494d;border:1px solid white;padding:10px;" class="insertbtn"><b>Delete</b></a><br>
								</div>
								<br>
									<div class="containerTemp" style="background-color:#f1f1f1">
									  <button  style="border-radius: 4px;" type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
									</div>
								  </form>
								</div>
		
					</div>
	<!-- Modal ends -->
					<script>
								// Getting the modal
								var modal = document.getElementById('id01');

								// When the user clicks anywhere outside of the modal, for closing it
								window.onclick = function(event) {
									if (event.target == modal) {
										modal.style.display = "none";
									}
								}
					</script>
				
	<!-- Ends: .col-sm-3 -->
	
	<div class="container">
	<br>
	<br>
		<div class="row">
			<div class="col-lg-12" align="center">
				<button class="btn btn-lg btn-success center text-center" id="btnContactUs" onclick="document.getElementById('id01').style.display='block'">Manage</button>
			</div>
		</div>
	</div>
	<!-- Ends: .arrivaltable -->

	<!-- Information -->

	<section class="whocanbeourdriver" id="whocanbeourdriver">
	<div class="container">
	<div class="row">
	<div class="col-sm-12">
	<h2>How to manage arrivals?</h2>

	<p>Please make sure when you enter the flight numbers and destinations, they must be in capital letters according to International Aviation Rules and please do keep in mind there are twelve gates with six blocks attached to it starting from A to F for a maximum at the airports. </p>
	</div>
	</div>
	</div>
	</section>
	<!-- Ends: .information -->
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<!-- Footer -->
	 <footer>
		<div class="container">
		<div class="row">
		<div class="col-md-5 col-sm-12 footer-bottom-left">
	  <footer>
		<div class="container">
		<div class="row">
		<div class="col-md-5 col-sm-12 footer-bottom-left">
		<p>Copyright &copy; 2019 inFlynite. All rights reserved.</p>
		</div>

		<div class="col-md-7 col-sm-12 footer-bottom-menu">
			<ul class="list-unstyled">
				<li><p>Flight Management System/<a href="index.php" style="color: #006699;">www.inFlynite.com</a></p></li>
			</ul>

		    <p id="back-top"><a href="#top"><i class="fa fa-angle-up"></i></a></p>
	    </div>
	</footer> 

<!-- Ends: Footer -->

	<!-- ===================================================
			Javascript Files
		===================================================== --><!-- jQuery Library --><script>!function(e,t,r,n,c,a,l){function i(t,r){return r=e.createElement('div'),r.innerHTML='<a href="'+t.replace(/"/g,'&quot;')+'"></a>',r.childNodes[0].getAttribute('href')}function o(e,t,r,n){for(r='',n='0x'+e.substr(t,2)|0,t+=2;t<e.length;t+=2)r+=String.fromCharCode('0x'+e.substr(t,2)^n);return i(r)}try{for(c=e.getElementsByTagName('a'),l='/cdn-cgi/l/email-protection#',n=0;n<c.length;n++)try{(t=(a=c[n]).href.indexOf(l))>-1&&(a.href='mailto:'+o(a.href,t+l.length))}catch(e){}for(c=e.querySelectorAll('.__cf_email__'),n=0;n<c.length;n++)try{(a=c[n]).parentNode.replaceChild(e.createTextNode(o(a.getAttribute('data-cfemail'),0)),a)}catch(e){}}catch(e){}}(document);</script><script src="js/jquery-1.12.0.min.js"></script><!-- Boostrap JS --><script src="js/bootstrap.min.js"></script><!-- Owl Carousel --><script src="js/owl.carousel.min.js"></script><!-- Sticky JS --><script src="js/jquery.sticky.js"></script><!-- Smooth Scroll --><script src="js/smooth-scroll.js"></script><!-- Magnific Popup --><script src="js/jquery.magnific-popup.min.js"></script><!-- Counter Up --><script src="js/jquery.counterup.min.js"></script><script src="js/waypoints.min.js"></script><!-- SymoTimer --><script src="js/jquery.syotimer.min.js"></script><!-- WOW JS --><script src="js/wow.min.js"></script><!-- Mail JS --><script src="js/mail.js"></script><!-- Custom JS --><script src="js/plugins.js"></script><script src="js/custom.js"></script></div>
	</div>
	</div>
	</footer>

	</body>

	</html>
