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
                            <h1 class="highlight2 bold bottommargin_5">ICI INDUSTRIAL</h1>
                        </div>
                    </div>
                </div>
            </section>

            <section class="ls section_padding_top_50 section_padding_bottom_145">
                <div class="container">
                    <div class="row columns_padding_25">
                        <div class="col-md-3">
                            <img src="./images/inge.png" alt="">
                        </div>
                        <div class="col-md-6">
                            <p class="entry-excerpt highlight2 topmargin_40 bottommargin_30">
                                <a href="">Es una compañía dedicada a la automatización de procesos
                                    industriales, con amplia experiencia en instrumentación de campo.
                                    Integramos a los mejores fabricantes para suministro de refaccionamiento
                                    para sus procesos y equipos de control.</a>
                            </p>
                            <p>
                                Estamos comprometidos con la calidad en nuestros servicios con la convicción
                                de dejar un trabajo que exceda las expectativas de nuestros clientes.
                            </p>
                        </div>
                        <div class="col-md-3">
                            <img src="./images/inge.png" alt="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <h1 class="highlight2 bold bottommargin_5">
                                FUNDACION ICI INDUSTRIAL
                            </h1>
                            <h4 class="highlight2">
                                Diseñando sistemas autónomos eficientes para los clientes
                            </h4>
                        </div>
                    </div>
                    <div class="row topmargin_10 bottommargin_30">
                        <p class="entry-excerpt highlight2 topmargin_5">
                            Fundada en febrero del 2008, con la oportunidad de integrar
                            equipos industriales de alta calidad, con marcas reconocidas
                            en el mercado, diseñando sistemas autónomos eficientes para
                            los clientes. En la actualidad ICI Industrial ha desarrollado
                            proyectos llave en mano, integrando las mejores tecnologías en el
                            mercado de petróleo y gas. Además de contar con un área de ventas
                            especialistas en las marcas que representamos, ofreciendo al cliente,
                            el mejor producto para controlar, monitorear y medir su proceso.
                        </p>
                    </div>
                    <hr>
                    <div class="row columns_padding_0 topmargin_60">
                        <div class="col-md-6 col-lg-5">
                            <p class="entry-excerpt highlight2 topmargin_5">
                                Siempre estamos interesados ​​en nuevos proyectos, grandes o pequeños.
                                No dude en ponerse en contacto con nosotros en relación con su proyecto.
                            </p>
                        </div>
                        <div class="col-md-6 col-lg-5 col-lg-offset-1">
                            <p>
                                Si desea contactarnos por favor llame al siguiente numero:
                                <span class="kanit fontsize_18 highlight bold">+52 (993) 338 20 49</span> o
                                <a href="#" class="bold highlight underlined">envienos un correo</a>.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="ls ms section_padding_145">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
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
                        <div class="col-md-4">
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
                        <div class="col-md-4">
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