<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

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
            @component('components.navbar')
            @endcomponent

            <section class="page_breadcrumbs ls ms ms_dark section_padding_25">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <h1 class="highlight2 bold bottommargin_5">Aplicaciones</h1>
                            <p>
                                ICI Industrial ha desarrollado proyectos
                                llave en mano, integrando las mejores tecnologías
                                en el mercado de petróleo y gas. Estamos comprometidos
                                con la calidad en nuestros servicios con la convicción
                                de dejar un trabajo que exceda las expectativas de nuestros clientes.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="ls page_portfolio section_padding_top_100 section_padding_bottom_75">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="isotope_container isotope row masonry-layout columns_margin_top_0 columns_margin_bottom_30" data-filters=".isotope_filters">

                                <div class="isotope-item col-lg-6 col-md-6 col-sm-12 photography">
                                    <div class="vertical-item content-padding gallery-extended-item with_background text-center">
                                        <div class="item-media">
                                            <img src="images/gallery/01.jpg" alt="">
                                            <div class="media-links">
                                                <a class="abs-link" title="" href="gallery-single.html"></a>
                                            </div>
                                        </div>
                                        <div class="item-content">
                                            <h3 class="item-title">
                                                <a href="gallery-single.html">Control de Velocidad para Motores a
                                                    Gas</a>
                                            </h3>
                                            <span class="categories-links small-text big-spacing">
                                                <p>Control compatible con una extensa librería de motores.</p>
                                            </span>
                                            <p>El control de velocidad diseñado por Motortech, fue instalado en un
                                                Caterpillar G3406
                                                para aumentar precisión en la aceleración paso a paso, sin afectar la
                                                carga del motor.</p>
                                            <div class="item-button">
                                                <a href="gallery-single.html" class="theme_button color1">Descargar
                                                    Informacion</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="isotope-item col-lg-6 col-md-6 col-sm-12 development programming">
                                    <div class="vertical-item content-padding gallery-extended-item with_background text-center">
                                        <div class="item-media">
                                            <img src="images/gallery/02.jpg" alt="">
                                            <div class="media-links">
                                                <a class="abs-link" title="" href="gallery-single.html"></a>
                                            </div>
                                        </div>
                                        <div class="item-content">
                                            <h3 class="item-title">
                                                <a href="gallery-single.html">Reacondicionamiento de una Unidad
                                                    Generadora de Nitrógeno por Membranas</a>
                                            </h3>
                                            <span class="categories-links small-text big-spacing">
                                            </span>
                                            <p>El tablero de control diseñado por ICI Industrial monitorea y protege una
                                                “MNGU”
                                                (por sus siglas en inglés), además de controlar la pureza del Nitrógeno,
                                                mediante un lazo de control de aceleración de motores y permanencia en
                                                la membrana…</p>
                                            <div class="item-button">
                                                <a href="gallery-single.html" class="theme_button color1">Descargar
                                                    Informacion</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="isotope-item col-lg-6 col-md-6 col-sm-12 development photography">
                                    <div class="vertical-item content-padding gallery-extended-item with_background text-center">
                                        <div class="item-media">
                                            <img src="images/gallery/03.jpg" alt="">
                                            <div class="media-links">
                                                <a class="abs-link" title="" href="gallery-single.html"></a>
                                            </div>
                                        </div>
                                        <div class="item-content">
                                            <h3 class="item-title">
                                                <a href="gallery-single.html">Tablero de control para motor a Gas</a>
                                            </h3>
                                            <p>El “Tablero de control para motor a gas” es un sistema de monitoreo y
                                                protección local para motores a gas</p>
                                            <p>Usado para distintas aplicaciones, los parámetros provenientes de los
                                                sensores son visualizados en una pantalla monocromática.</p>
                                            <div class="item-button">
                                                <a href="gallery-single.html" class="theme_button color1">Descargar
                                                    Informacion</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="isotope-item col-lg-6 col-md-6 col-sm-12 photography webdesign">
                                    <div class="vertical-item content-padding gallery-extended-item with_background text-center">
                                        <div class="item-media">
                                            <img src="images/gallery/04.jpg" alt="">
                                            <div class="media-links">
                                                <a class="abs-link" title="" href="gallery-single.html"></a>
                                            </div>
                                        </div>
                                        <div class="item-content">
                                            <h3 class="item-title">
                                                <a href="gallery-single.html">Tablero de control para compresores
                                                    reciprocantes con motor de combustión</a>
                                            </h3>
                                            <p>Tablero remanufacturado por ICI Industrial, para paquetes de compresores
                                                reciprocantes.</p>
                                            <p>El paquete de compresión tiene la capacidad de manejar determinado
                                                volumen de gas natural, sometido a presiones de hasta 5,000 Psig.</p>
                                            <div class="item-button">
                                                <a href="gallery-single.html" class="theme_button color1">Descargar
                                                    Informacion</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- eof .isotope_container.row -->

                            <div class="row">
                                <div class="col-sm-12 text-center">
                                    <i class="fa fa-circle-o-notch fa-spin loadmore_spinner"></i>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
        </div>

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
                                            Agenda una llamada con
                                            <br>
                                            <span class="fontsize_18 black">nuestros asesores</span>
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
                                            Cotiza tu
                                            <br>
                                            <span class="fontsize_18 black">proyecto</span>
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
                                            Agenda una reunion
                                            <br>
                                            <span class="fontsize_18 black">presencial</span>
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
                                            Tu informacion esta segura &amp; protegida
                                            <br>
                                            <span class="fontsize_18 black">garantia de privacidad</span>
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


</body>

</html>