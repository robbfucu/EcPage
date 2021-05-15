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
                            <h1 class="highlight2 bold bottommargin_5">Services</h1>
                        </div>
                    </div>
                </div>
            </section>


            <section class="ls section_padding_top_135 section_padding_bottom_90 columns_padding_25 page_services">
                <div class="container">
                    <div class="row columns_margin_bottom_40 services-row">
                        <div class="col-md-6">
                            <div class="teaser">
                                <div class="main_bg_color2 size_normal round overlapped-icon">
                                    <!-- <i class="icon-thermal-power highlight"></i> -->
                                    <img src="./images/panel-de-control-3.png" alt="">
                                </div>
                                <h4 class="text-uppercase">TABLEROS DE CONTROL</h4>
                                <hr class="divider_2_30 left main_bg_color">
                                <p>
                                    Diseño de tableros de control para diferentes procesos,
                                    con capacidad de expansión a nuevas tecnologías en navegación web.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="teaser">
                                <div class="main_bg_color2 size_normal round overlapped-icon">
                                    <!-- <i class="icon-oil-platform highlight"></i> -->
                                    <img src="./images/informacion-1.png" alt="">
                                </div>
                                <h4 class="text-uppercase">DESARROLLO DE SOFTWARE</h4>
                                <hr class="divider_2_30 left main_bg_color">
                                <p>
                                    Desarrollamos e implementamos
                                    ingeniería de software dedicados para optimizar sus procesos.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="teaser">
                                <div class="main_bg_color2 size_normal round overlapped-icon">
                                    <!-- <i class="icon-gas-flaring highlight"></i> -->
                                    <img src="./images/administracion-1.png" alt="">
                                </div>
                                <h4 class="text-uppercase">INSTRUMENTACIÓN</h4>
                                <hr class="divider_2_30 left main_bg_color">
                                <p>
                                    Recomendación de instrumentación con última tecnología
                                    para garantizar su medición y control en procesos.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="teaser">
                                <div class="main_bg_color2 size_normal round overlapped-icon">
                                    <!-- <i class="icon-oil-pump highlight"></i> -->
                                    <img src="./images/mantenimiento-3.png" alt="">
                                </div>
                                <h4 class="text-uppercase">INSTALACIÓN</h4>
                                <hr class="divider_2_30 left main_bg_color">
                                <p>
                                    Instalación flexible de los instrumentos,
                                    para reducir horas de mantenimiento preventivo y correctivo..
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="teaser">
                                <div class="main_bg_color2 size_normal round overlapped-icon">
                                    <!-- <i class="icon-oil-refinery highlight"></i> -->
                                    <img src="./images/bombear-3.png" alt="">
                                </div>
                                <h4 class="text-uppercase">DESARROLLO DE APLICACIONES</h4>
                                <hr class="divider_2_30 left main_bg_color">
                                <p>
                                    Desarrollo de aplicaciones, como Bomba, Compresores, Generadores,
                                    líneas de producción, con datos de almacenamiento para mejorar su rendimiento.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="teaser">
                                <div class="main_bg_color2 size_normal round overlapped-icon">
                                    <!-- <i class="icon-factory highlight"></i> -->
                                    <img src="./images/mantenimiento-1.png" alt="">
                                </div>
                                <h4 class="text-uppercase">CALIBRACION Y MANTENIMIENTO</h4>
                                <hr class="divider_2_30 left main_bg_color">
                                <p>
                                    Servicios de calibración
                                    y mantenimiento con herramienta
                                    certificada con trazabilidad al CENAM.
                                </p>
                            </div>
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

        </div>
        <!-- eof #box_wrapper -->
    </div>
    <!-- eof #canvas -->

    <script src="js/compressed.js"></script>
    <script src="js/main.js"></script>


</body>

</html>