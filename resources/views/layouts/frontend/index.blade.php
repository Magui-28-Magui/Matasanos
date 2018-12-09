<!DOCTYPE html>
<html lang="en">
<head>
<title>Hospital Matasanos</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1"/>


    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('css/main_styles.css')}}" rel="stylesheet"/>
    <link href="{{asset('css/responsive.css')}}" rel="stylesheet"/>



</head>
<body>

<div class="super_container">

	<!-- Menu -->

	<div class="menu trans_500">
		<div class="menu_content d-flex flex-column align-items-center justify-content-center text-center">
			<div class="menu_close_container"><div class="menu_close"></div></div>
			<form action="#" class="menu_search_form">
				<input type="text" class="menu_search_input" placeholder="Search" required="required">
				<button class="menu_search_button"><i class="fa fa-search" aria-hidden="true"></i></button>
			</form>
			<ul>
				<li class="menu_item"><a href="index.blade.php">Home</a></li>
				<li class="menu_item"><a href="#">About us</a></li>
				<li class="menu_item"><a href="#">Services</a></li>
				<li class="menu_item"><a href="#">News</a></li>
				<li class="menu_item"><a href="#">Contact</a></li>
			</ul>
		</div>
		<div class="menu_social">
			<ul>
				<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
			</ul>
		</div>
	</div>
	
	<!-- Home -->

	<div class="home">
		<div class="background_image" style="background-image:url(/resources/images/index_hero.jpg)"></div>

		<!-- Header -->

		<header class="header" id="header">
			<div>
				<div class="header_top">
					<div class="container">
						<div class="row">
							<div class="col">
								<div class="header_top_content d-flex flex-row align-items-center justify-content-start">
									<div class="logo">
									<img src="/resources/images/matasanos.png" style="width:300px">
									</div>
									<div class="header_top_extra d-flex flex-row align-items-center justify-content-start ml-auto">
										<div class="header_top_nav">
											<ul class="d-flex flex-row align-items-center justify-content-start">
												<li><a href="index.blade.php">Inicio</a></li>
												<li><a href="#">Servicios de emergencias</a></li>
											</ul>
										</div>
										<div class="header_top_phone">
											<button class="btn btn-default  dim" type="button">Reserva  tu cita</button>

										</div>
									</div>
									<div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="header_nav" id="header_nav_pin" >
					<div class="header_nav_inner" >
						<div class="header_nav_container" style="background:#21D1C2">
							<div class="container">
								<div class="row">
									<div class="col">
										<div class="header_nav_content d-flex flex-row align-items-center justify-content-start">
											<nav class="main_nav">
												<ul class="d-flex flex-row align-items-center justify-content-start">
													<li class="active"><a href="index.blade.php">Inicio</a></li>
													<li><a href="#">Acerca de nosotros</a></li>
													<li><a href="#">Servicios</a></li><li><a href="#">Contacto</a></li>
												</ul>
											</nav>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>	
			</div>
		</header>

		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content">
							<div class="home_title">Servicios médicos en los que puedes confiar.</div>
							<div class="home_text">Coordinamos cada aspecto de tu atención médica y los equipos de expertos trabajan juntos para brindarte exactamente la atención que necesitas</div>
						
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Info Boxes -->

    @yield('content')

	<!-- Footer -->

	<footer class="footer">
		<div class="footer_bar">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="footer_bar_content d-flex flex-sm-row flex-column align-items-lg-center align-items-start justify-content-start">
							<nav class="footer_nav">
								<ul class="d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start">
									<li class="active"><a href="index.blade.php">Inicio</a></li>
									<li><a href="#">Acerca de nosotros</a></li>
									<li><a href="#">Servicios</a></li>
									<li><a href="#">Contacto</a></li>
								</ul>
							</nav>
							<div class="footer_links">
								<ul class="d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start">
									<li><a href="#">Inicio</a></li>
									<li><a href="#">Servicios de emergencias</a></li>
								</ul>
							</div>
							<div class="footer_phone ml-lg-auto">
								<i class="fa fa-phone" aria-hidden="true"></i>
								<span>+34 586 778 8892</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
</div>

<script src="/public/js/jquery-3.3.1.min.js"></script>
<script src="/public/styles/bootstrap4/popper.js"></script>
<script src="/public/styles/bootstrap4/bootstrap.min.js"></script>
<script src="/public/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="/public/plugins/easing/easing.js"></script>
<script src="/public/plugins/parallax-js-master/parallax.min.js"></script>
<script src="/public/js/custom.js"></script>
</body>
</html>
