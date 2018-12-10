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
    <link href="{{asset('plugins/OwlCarousel2-2.2.1/animate.css')}}" rel="stylesheet"/>




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
		<div class="background_image" style="background-image:url(images/index_hero.jpg)"></div>

		<!-- Header -->

		<header class="header" id="header">
			<div>
				<div class="header_top">
					<div class="container">
						<div class="row">
							<div class="col">
								<div class="header_top_content d-flex flex-row align-items-center justify-content-start">
									<div class="logo">
									<img src="{{asset('images/matasanos.png')}}" style="width:300px">
									</div>
									<div class="header_top_extra d-flex flex-row align-items-center justify-content-start ml-auto">
										<div class="header_top_nav">
											<ul class="d-flex flex-row align-items-center justify-content-start">
												<li><a href="index.blade.php">Inicio</a></li>
												<li><a href="#">Servicios de emergencias</a></li>
												<li><a href="#"><b>Iniciar sesión</b></a></li>
											</ul>
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
                            <a href="#registro"><button type="button" class="btn btn-default  dim" data-toggle="modal" data-target="#myModal">
                                Agenda tu cita aquí
                            </button></a>


					</div>
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
    <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/footer.jpg" data-speed="0.8"></div>
    <div class="footer_content">
        <div class="container">
            <div class="row">

                <!-- Footer Hours -->
                <div class="col-lg-4 footer_col">
                    <div class="footer_hours">
                        <div class="footer_hours_title">Horarios de apertura</div>
                        <ul class="hours_list">
                            <li class="d-flex flex-row align-items-center justify-content-start">
                                <div>Lunes – Martes</div>
                                <div class="ml-auto">8.00 – 19.00</div>
                            </li>
                            <li class="d-flex flex-row align-items-center justify-content-start">
                                <div>Miercoles- Jueves</div>
                                <div class="ml-auto">8.00 - 18.30</div>
                            </li>
                            <li class="d-flex flex-row align-items-center justify-content-start">
                                <div>Viernes - Sabados</div>
                                <div class="ml-auto">9.30 – 17.00</div>
                            </li>
                            <li class="d-flex flex-row align-items-center justify-content-start">
                                <div>Domingo</div>
                                <div class="ml-auto">9.30 – 15.00</div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer_bar">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="footer_bar_content d-flex flex-sm-row flex-column align-items-lg-center align-items-start justify-content-start">
                        <nav class="footer_nav">
                            <ul class="d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start">
                                <li class="active"><a href="">Inicio</a></li>
                                <li><a href="about.html">Servicios de emergencias</a></li>
                                <li><a href="services.html">Iniciar sesión</a></li>
                            </ul>
                        </nav>
                        <div class="footer_links">
                            <ul class="d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start">
                                <li><a href="#">Acerca de nosotros</a></li>
                                <li><a href="#">Servicios</a></li>
                                <li><a href="#">Contacto</a></li>
                            </ul>
                        </div>
                        <div class="footer_phone ml-lg-auto">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <span>+01 800 778 maton</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

</div>

<script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('styles/bootstrap4/popper.js')}}"></script>
<script src="{{asset('styles/bootstrap4/bootstrap.min.js')}}"></script>
<script src="{{asset('plugins/parallax-js-master/parallax.min.js')}}"></script>
<script src="{{asset('plugins/js/custom.js')}}"></script>
</body>
</html>
