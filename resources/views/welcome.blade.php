<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>{{config('app.name')}}</title>
    <meta charset="utf-8">
    <!--[if IE]>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<![endif]-->
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css" id="color-switcher-link">
    <link rel="stylesheet" href="css/animations.css">
    <link rel="stylesheet" href="css/fonts.css">
    <script src="js/vendor/modernizr-2.6.2.min.js"></script>

    <!--[if lt IE 9]>
		<script src="js/vendor/html5shiv.min.js"></script>
		<script src="js/vendor/respond.min.js"></script>
		<script src="js/vendor/jquery-1.12.4.min.js"></script>
	<![endif]-->

</head>

<body>
    <!--[if lt IE 9]>
		<div class="bg-danger text-center">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" class="highlight">upgrade your browser</a> to improve your experience.</div>
	<![endif]-->

    <div class="preloader">
        <div class="preloader_image"></div>
    </div>


    <!-- search modal -->
    <div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="search_modal">
        <div class="widget widget_search">
            <form method="get" class="searchform form-inline" action="/">
                <div class="form-group">
                    <input type="text" value="" name="search" class="form-control" placeholder="Search keyword" id="modal-search-input">
                </div>
                <button type="submit" class="theme_button">Search</button>
            </form>
        </div>
    </div>

    <!-- wrappers for visual page editor and boxed version of template -->
    <div id="canvas">
        <div id="box_wrapper">

            <!-- template sections -->
            <header class="page_header cs main_color2 theme_header bordered_items floating_logo table_section">
                        <div class="col-md-8 col-lg-9 text-right">
                            <!-- main nav start -->
                            <nav class="mainmenu_wrapper">
                                    <ul class="mainmenu nav sf-menu">
                                        <li class="active">
                                            <a href="welcome.blade.php">Inicio</a>
                                        </li>

                                        <li>
                                            <a href="about.html">QUIÉNES SOMOS</a>
                                        </li>
                                        <li>
                                            <a href="#">PRODUCTOS</a>
                                            <ul>
                                                <li>
                                                    <a href="service-single.html">MARCAS</a>
                                                </li>
                                                <li>
                                                    <a href="aplicaciones.html">APLICACIONES</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="services.html">SERVICIOS</a>
                                        </li>
                                        <!-- eof features -->

                                        <!-- blog -->
                                        <li>
                                            <a href="blog-full.html">NOVEDADES</a>
                                        </li>
                                        <!-- eof blog -->

                                        <!-- contacts -->
                                        <li>
                                            <a href="contact.html">Contáctanos</a>
                                        </li>
                                        <!-- eof contacts -->
                                        <li>
                                            <span>
                                                LOGO
                                            </span>
                                        </li>
                                    </ul>
                                </nav>
                            <!-- eof main nav -->
                            <span class="toggle_menu">
                                <span></span>
                            </span>
                        </div>
                    </div>
                </div>
            </header>

            <section class="intro_section page_mainslider cs">
                <div class="flexslider">
                    <img src="images/engineer.png" alt="" class="slide-person visible-lg-block to_animate" data-animation="fadeInRight">
                    <ul class="slides">
                        <li>
                            <img src="images/intro_bg.png" alt="" class="slide-bg">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="slide_description_wrapper">
                                            <div class="slide_description">
                                                <div class="intro-layer">
                                                    <h3 class="bold big">
                                                    DISEÑAMOS
                                                    </h3>
                                                    <p class="bold">
                                                        Tableros de Control para diferentes procesos,
                                                        con capacidad de expansión a nuevas tecnologías
                                                        en navegación web.
                                                    </p>
                                                </div>
                                            </div>
                                            <!-- eof .slide_description -->
                                        </div>
                                    </div>
                                    <!-- eof .col-* -->
                                </div>
                                <!-- eof .row -->
                            </div>
                            <!-- eof .container -->
                        </li>
                        <li>
                            <img src="images/intro_bg2.png" alt="" class="slide-bg">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="slide_description_wrapper">
                                            <div class="slide_description">
                                                <div class="intro-layer">
                                                    <h3 class="bold big">
                                                    ACTUALIZAMOS
                                                    </h3>
                                                    <p class="bold">Motores de gas para mejorar su rendimiento.</p>
                                                </div>
                                            </div>
                                            <!-- eof .slide_description -->
                                        </div>
                                    </div>
                                    <!-- eof .col-* -->
                                </div>
                                <!-- eof .row -->
                            </div>
                            <!-- eof .container -->
                        </li>
                        <li>
                            <img src="images/intro_bg.png" alt="" class="slide-bg">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="slide_description_wrapper">
                                            <div class="slide_description">
                                                <div class="intro-layer">
                                                    <h3 class="bold big">
                                                    UNA BUJÍA PARA TODOS
                                                    </h3>
                                                    <p class="bold">
                                                        La familia de bujías de DENSO no tiene igual en longevidad,
                                                        durabilidad, mayor potencia, economía y confiabilidad.
                                                    </p>
                                                </div>
                                            </div>
                                            <!-- eof .slide_description -->
                                        </div>
                                    </div>
                                    <!-- eof .col-* -->
                                </div>
                                <!-- eof .row -->
                            </div>
                            <!-- eof .container -->
                        </li>
                    </ul>
                </div>
                <!-- eof flexslider -->
            </section>

            <section class="ls section_padding_top_145 section_padding_bottom_90 columns_margin_bottom_60">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <h2 class="section_header">
                                Nosotros
                            </h2>
                            <hr class="divider_2_30 left-important main_bg_color divider_35">
                            <a href="about.html" class="theme_button color1 topmargin_10">Mas Informacion</a>
                        </div>
                        <div class="col-md-6">
                            <p class="entry-excerpt highlight2 bottommargin_30">
                                <a href="">
                                    Excelencia en el servicio de ingeniería y ventas.
                                </a>
                            </p>
                            <p>
                                ICI Industrial es una compañía dedicada a la automatización de procesos industriales,
                                con amplia experiencia en instrumentación de campo. Somos una empresa comprometida con
                                la calidad en nuestros servicios con la convicción de dejar un trabajo que exceda las
                                expectativas de nuestros clientes.
                            </p>
                        </div>
                        <div class="col-md-3">
                            <img src="./images/inge.png" alt="">
                        </div>
                    </div>
                </div>
            </section>

            <section class="ls ms section_padding_145">
				<div class="container">
					<div class="row">
						<div class="col-sm-offset-2 col-sm-8 col-md-offset-0 col-md-3 text-center text-sm-left">
							<h2 class="section_header">
								Nuestra Identidad
							</h2>
							<hr class="divider_2_30 left main_bg_color divider_35">
						</div>
						<div class="col-sm-offset-2 col-sm-8 col-md-offset-0 col-md-3">
							<div class="with_padding text-center cs main_color2 with_bottom_border">
								<span class="image_icon">
									<img src="./images/icon1.png" alt="">
								</span>
								<h3 class="highlight medium">Nuestra Misión</h3>
                                <div class="border-paragraphs middle-borders bold bottommargin_0 greylinks">
                                    <p>
                                        <a href="#">Automatizar todos los procesos.</a>
                                    </p>
                                    <p>
                                        <a href="#">Vender instrumentos de la mejor calidad en el mercado.</a>
                                    </p>
                                    <p>
                                        <a href="#">Excelencia en el servicio de ingeniería y ventas.</a>
                                    </p>
                                    <p>
                                        <a href="#">Diseñar y fabricar productos o proyectos de calidad
                                            <br>para el mercado nacional e internacional.</a>
                                    </p>
								</div>
							</div>
						</div>
						<div class="col-sm-offset-2 col-sm-8 col-md-offset-0 col-md-3">
							<div class="with_padding text-center cs main_color2 with_bottom_border">
								<span class="image_icon">
									<img src="./images/icon2.png" alt="">
								</span>
								<h3 class="highlight medium">Nuestra Visión</h3>
                                <div class="border-paragraphs middle-borders bold bottommargin_0 greylinks">
                                    <p>
                                        <a href="#">ICI Industrial será una empresa innovadora
                                            en tecnología, flexible al cambio, líderes en automatización.
                                        </a>
                                    </p>
                                    <p>
                                        <a href="#">Empresa comprometida con el servicio al cliente.</a>
                                    </p>
                                    <p>
                                        <a href="#">Expandir nuestros servicios y productos a diferentes sectores
                                            industriales.</a>
                                    </p>
                                    <p>
                                        <a href="#">Empresa confiable para distribuir instrumentos en el sector
                                            industrial.</a>
                                    </p>
                                    <p>
                                        <a href="#">Crecer nuestra fabricación de sistemas de control con el más alto
                                            estándar de calidad en nuestros productos fabricados</a>
                                    </p>
								</div>
							</div>
						</div>
						<div class="col-sm-offset-2 col-sm-8 col-md-offset-0 col-md-3">
							<div class="with_padding text-center cs main_color2 with_bottom_border">
								<span class="image_icon">
									<img src="./images/icon3.png" alt="">
								</span>
								<h3 class="highlight medium">Objetivos</h3>
                                <div class="border-paragraphs middle-borders bold bottommargin_0 greylinks">
                                    <p>
                                        <a href="#">Convertir nuestra empresa en una rentable para inversionistas.</a>
                                    </p>
                                    <p>
                                        <a href="#">Desarrollar a nuestro personal como primer paso al éxito.</a>
                                    </p>
                                    <p>
                                        <a href="#">Incrementar nuestra facturación al 20% anual./a>
                                    </p>
                                    <p>
                                        <a href="#">Desarrollar productos o proyectos sustentables y duraderos.</a>
                                    </p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>


            <section class="cs main_color2 section_padding_top_145 section_padding_bottom_130 columns_margin_bottom_30">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-offset-0 col-md-6 col-sm-offset-2 col-sm-8 text-center text-sm-left">
                            <h2 class="section_header">
                                Novedades
                            </h2>
                            <hr class="divider_2_30 left main_bg_color topmargin_30">
                            <div class="inline-block bottommargin_50">
                            </div>
                            <br>
                            <a href="blog-full.html" class="theme_button color1">Mas Informacion</a>
                        </div>
                        <div class="col-lg-3 col-md-offset-0 col-md-6 col-sm-offset-2 col-sm-8">
                            <article class="vertical-item content-padding ls with_bottom_border topmargin_10">
                                <div class="item-media">
                                    <img src="./images/accesoriosr-motortech.png" alt="">
                                    <div class="media-links">
                                        <div class="links-wrap">
                                            <a class="p-view prettyPhoto" title="" data-gal="prettyPhoto[gal]" href="./images/blog_post1.jpg"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-content">
                                    <div class="categories-links small-text big-spacing">
                                        <a href="#">Controladores</a>
                                    </div>
                                    <h3 class="entry-title">
                                        <a href="blog-single-right.html">Energy for the world</a>
                                    </h3>
                                    <p>
                                        Blinded by desire, that they can fo the pain and trouble that are bound to blame.
                                    </p>
                                </div>
                            </article>
                        </div>
                        <div class="col-lg-3 col-md-offset-0 col-md-6 col-sm-offset-2 col-sm-8">
                            <article class="vertical-item content-padding ls with_bottom_border topmargin_10">
                                <div class="item-media">
                                    <img src="./images/accesoriosr-motortech.png" alt="">
                                    <div class="media-links">
                                        <div class="links-wrap">
                                            <a class="p-view prettyPhoto" title="" data-gal="prettyPhoto[gal]" href="./images/blog_post2.jpg"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-content">
                                    <div class="categories-links small-text big-spacing">
                                        <a href="#">Controladores</a>
                                    </div>
                                    <h3 class="entry-title">
                                        <a href="blog-single-right.html">A brighter tomorrow starts today</a>
                                    </h3>
                                    <p>
                                        On the other hand enounce with righteous indignation.
                                    </p>
                                </div>
                            </article>
                        </div>
                        <div class="col-lg-3 col-md-offset-0 col-md-6 col-sm-offset-2 col-sm-8">
                            <article class="vertical-item content-padding ls with_bottom_border topmargin_10">
                                <div class="item-media">
                                    <img src="./images/accesoriosr-motortech.png" alt="">
                                    <div class="media-links">
                                        <div class="links-wrap">
                                            <a class="p-view prettyPhoto" title="" data-gal="prettyPhoto[gal]" href="./images/blog_post3.jpg"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-content">
                                    <div class="categories-links small-text big-spacing">
                                        <a href="#">Controladores</a>
                                    </div>
                                    <h3 class="entry-title">
                                        <a href="blog-single-right.html">Power for the future</a>
                                    </h3>
                                    <p>
                                        Curabitur sit amet lacinia to justo. In modo, eros eget a commodo condimentum.
                                    </p>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </section>

            <footer class="page_footer cs mx-auto section_padding_top_30 columns_margin_0">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-md-6">
							<a href="./" class="logo">
								<img src="images/logo.png" alt="">
								<span class="logo_text">
									<span class="highlight kanit bold">Oildrop
										<br> global</span>
									<span class="small-text">test with the best</span>
								</span>
							</a>
							<p class="topmargin_30">
								Everyday is a new day for us and we work really hard to satisfy our customer everywhere.
							</p>
							<div class="page_social_icons greylinks">
								<a class="social-icon border-icon rounded-icon soc-facebook" href="#" title="Facebook"></a>
							</div>
						</div>

						<div class="col-lg-offset-0 col-lg-6 col-md-offset-6 col-md-6">
							<div class="row topmargin_40">
								<div class="col-lg-12 col-md-6">
									<div class="media thin_teaser inline-block bottommargin_20">
										<div class="media-left media-middle">
											<div class="teaser_icon border_icon round">
												<i class="icon-phone black"></i>
											</div>
										</div>
										<div class="media-body media-middle">
											<p class="kanit text-uppercase bold highlight fontsize_14">
												A phone call from one of
												<br>
												<span class="fontsize_18 black">our consultants</span>
											</p>
										</div>
									</div>
								</div>

								<div class="col-lg-12 col-md-6">
									<div class="media thin_teaser inline-block bottommargin_20">
										<div class="media-left media-middle">
											<div class="teaser_icon border_icon round">
												<i class="icon-calculator black"></i>
											</div>
										</div>
										<div class="media-body media-middle">
											<p class="kanit text-uppercase bold highlight fontsize_14">
												Evaluation of
												<br>
												<span class="fontsize_18 black">your project cost</span>
											</p>
										</div>
									</div>
								</div>
								<div class="col-lg-12 col-md-6">
									<div class="media thin_teaser inline-block bottommargin_20">
										<div class="media-left media-middle">
											<div class="teaser_icon border_icon round">
												<i class="icon-meetings black"></i>
											</div>
										</div>
										<div class="media-body media-middle">
											<p class="kanit text-uppercase bold highlight fontsize_14">
												An in-person meeting to
												<br>
												<span class="fontsize_18 black">discuss the details</span>
											</p>
										</div>
									</div>
								</div>
								<div class="col-lg-12 col-md-6">
									<div class="media thin_teaser inline-block bottommargin_20">
										<div class="media-left media-middle">
											<div class="teaser_icon border_icon round">
												<i class="icon-lock black"></i>
											</div>
										</div>
										<div class="media-body media-middle">
											<p class="kanit text-uppercase bold highlight fontsize_14">
												Details are safe &amp; protected
												<br>
												<span class="fontsize_18 black">privacy guaranteed</span>
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</footer>
        <!-- eof #box_wrapper -->
    </div>
    <!-- eof #canvas -->

    <script src="js/compressed.js"></script>
    <script src="js/main.js"></script>


    <!-- Google Map Script -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTwYSMRGuTsmfl2z_zZDStYqMlKtrybxo"></script>
</body>

</html>
