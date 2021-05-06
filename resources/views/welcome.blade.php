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

            <section class="page_topline ls table_section table_section_md">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9 text-center text-md-left">
                            <span class="kanit text-uppercase bold fontsize_12">
                                <i class="icon-map-marker highlight fontsize_16"></i> Lightning Point Drive
                                <span class="highlight fontsize_14">27/2</span> Los angeles,
                                <span class="highlight">Inc -
                                    <span class="fontsize_14">4502</span>
                                </span>
                            </span>
                            <span class="kanit text-uppercase bold fontsize_12">
                                <i class="icon-phone highlight fontsize_16"></i> have a question call now
                                <span class="fontsize_14 highlight">1 (800) 300 2214</span>
                            </span>
                        </div>

                        <div class="col-md-3 text-center text-md-right">
                            <a href="#" class="theme_button block_button color1">
                                <i class="icon-quote"></i>
                                <span>Request a Quote</span>
                            </a>
                        </div>
                    </div>
                </div>
            </section>

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
                                                    <a href="#">MARCAS</a>
                                                </li>
                                                <li>
                                                    <a href="service-single.html">APLICACIONES</a>
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
                                            <a href="contact.html">Contacto</a>
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

            <section class="cs main_color2 section_padding_top_145 section_padding_bottom_130 columns_margin_bottom_30">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-offset-0 col-md-6 col-sm-offset-2 col-sm-8 text-center text-sm-left">
                            <h2 class="section_header">
                                Our blog
                            </h2>
                            <hr class="divider_2_30 left main_bg_color topmargin_30">
                            <div class="inline-block bottommargin_50">
                                <ul class="list1 middle-borders margin_0 bold greylinks">
                                    <li>
                                        <a href="#">Chemicals &amp; Refining</a>
                                    </li>
                                    <li>
                                        <a href="#">International Trade</a>
                                    </li>
                                    <li>
                                        <a href="#">Petrolium Engineering</a>
                                    </li>
                                    <li>
                                        <a href="#">Projects &amp; Achievements</a>
                                    </li>
                                    <li>
                                        <a href="#">Explore &amp; Produce</a>
                                    </li>
                                    <li>
                                        <a href="#">Transform &amp; Develop</a>
                                    </li>
                                </ul>
                            </div>
                            <br>
                            <a href="services.html" class="theme_button color1">Go to our blog</a>
                        </div>
                        <div class="col-lg-3 col-md-offset-0 col-md-6 col-sm-offset-2 col-sm-8">
                            <article class="vertical-item content-padding ls with_bottom_border topmargin_10">
                                <div class="item-media">
                                    <img src="./images/blog_post1.jpg" alt="">
                                    <div class="media-links">
                                        <div class="links-wrap">
                                            <a class="p-view prettyPhoto" title="" data-gal="prettyPhoto[gal]" href="./images/blog_post1.jpg"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-content">
                                    <div class="categories-links small-text big-spacing">
                                        <a href="#">Chemicals &amp; Refining</a>
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
                                    <img src="./images/blog_post2.jpg" alt="">
                                    <div class="media-links">
                                        <div class="links-wrap">
                                            <a class="p-view prettyPhoto" title="" data-gal="prettyPhoto[gal]" href="./images/blog_post2.jpg"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-content">
                                    <div class="categories-links small-text big-spacing">
                                        <a href="#">International Trade</a>
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
                                    <img src="./images/blog_post3.jpg" alt="">
                                    <div class="media-links">
                                        <div class="links-wrap">
                                            <a class="p-view prettyPhoto" title="" data-gal="prettyPhoto[gal]" href="./images/blog_post3.jpg"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-content">
                                    <div class="categories-links small-text big-spacing">
                                        <a href="#">Petrolium Engineering</a>
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

            <section class="cs main_color2 parallax section_subscribe section_padding_50">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <h2 class="section_header">
                                Newsletter
                            </h2>
                            <hr class="divider_2_30 left-important main_bg_color topmargin_30">
                        </div>
                        <div class="col-md-9">
                            <div class="widget widget_mailchimp">
                                <p class="roboto fontsize_18 bold black bottommargin_5">
                                    Subscribe to our newsletters to receive latest news and updates
                                </p>
                                <form class="signup row columns_padding_10" action="/" method="get">
                                    <div class="col-lg-8 col-md-7">
                                        <div class="form-group">
                                            <input class="mailchimp_email form-control" name="email" type="email" placeholder="Your email address">
                                        </div>
                                        <div class="response"></div>
                                    </div>
                                    <div class="col-lg-4 col-md-5">
                                        <button type="submit" class="theme_button color1">subscribe to newsletter</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="page_copyright cs main_color2 table_section section_padding_top_30 section_padding_bottom_30">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 text-center">
                        <p class="bold fontsize_12 text-uppercase kanit">
                                SOMOS UNA COMPAÑÍA DEDICADA A LA AUTOMATIZACIÓN
                                DE PROCESOS INDUSTRIALES, CON AMPLIA EXPERIENCIA EN INSTRUMENTACIÓN
                                DE CAMPO. INTEGRAMOS A LOS MEJORES FABRICANTES PARA SUMINISTRO DE
                                REFACCIONAMIENTO PARA SUS PROCESOS Y EQUIPOS DE CONTROL.
                                ESTAMOS COMPROMETIDOS CON LA CALIDAD EN NUESTROS SERVICIOS CON LA
                                CONVICCIÓN DE DEJAR UN TRABAJO QUE EXCEDA LAS EXPECTATIVAS DE NUESTROS
                                CLIENTES. ICI INDUSTRIAL
                            </p>
                        </div>
                    </div>
                </div>
            </section>

        </div>
        <!-- eof #box_wrapper -->
    </div>
    <!-- eof #canvas -->

    <script src="js/compressed.js"></script>
    <script src="js/main.js"></script>


    <!-- Google Map Script -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTwYSMRGuTsmfl2z_zZDStYqMlKtrybxo"></script>
</body>

</html>
