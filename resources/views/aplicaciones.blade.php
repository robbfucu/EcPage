@extends('layouts.app')
@section('content')
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
                                <img src="./images/control-motores.jpeg" alt="" width="800" height="800">
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
                                <img src="./images/generador-nitrogeno.jpeg" alt="" width="800" height="800">
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
                                <img src="./images/tablero.jpeg" alt="" width="800" height="800">
                                <div class="media-links">
                                    <a class="abs-link" title="" href="gallery-single.html"></a>
                                </div>
                            </div>
                            <div class="item-content">
                                <h3 class="item-title">
                                    <a href="galllery-single.html">Tablero de control para motor a Gas</a>
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
                                <img src="./images/tablero2.jpeg" alt="" width="800" height="800">
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
            </div>
        </div>
    </div>
</section>
@endsection
