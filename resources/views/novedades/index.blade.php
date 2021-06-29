@extends('layouts.app')
@section('content')

<section class="page_breadcrumbs ls ms ms_dark section_padding_25">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h1 class="highlight2 bold bottommargin_5">Novedades</h1>
            </div>
        </div>
    </div>
</section>

<section class="ls section_padding_75 columns_margin_0">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <article id="blog-gallery-slider" class="carousel slide parallax cs main_color2">

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item text-center active">
                            <h3 class="black roboto section_header big">
                                MOTORTECH,
                                <br> principales fabricantes de controladores de encendido
                            </h3>
                        </div>
                        <div class="item text-center">
                            <h3 class="black roboto section_header big">
                                Tipos de
                                <br>Mantenimiento Industrial
                            </h3>
                        </div>
                        <div class="item text-center">
                            <h3 class="black roboto section_header big">
                                La automatización
                                <br> y sus aplicaciones en la industria
                            </h3>
                        </div>
                    </div>

                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#blog-gallery-slider" data-slide-to="0" class="active"></li>
                        <li data-target="#blog-gallery-slider" data-slide-to="1"></li>
                        <li data-target="#blog-gallery-slider" data-slide-to="2"></li>
                    </ol>

                </article>
            </div>
        </div>
    </div>
</section>

<section class="cs main_color2 section_padding_top_145 section_padding_bottom_125 columns_margin_bottom_30">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-lg-3">
                <article class="vertical-item content-padding ls with_bottom_border">
                    <div class="item-media">
                        <img src="./images/accesoriosr-motortech.png" alt="">
                        <div class="media-links">
                            <div class="links-wrap">
                                <a class="p-link" title="" href="{{route('novedades.show', 'test')}}"></a>
                            </div>
                        </div>
                    </div>
                    <div class="item-content">
                        <div class="categories-links small-text big-spacing">
                            <a href="#">Controladores</a>
                        </div>
                        <h3 class="entry-title">
                            <a href="{{route('novedades.show', 'test')}}">MOTORTECH, principales fabricantes de controladores de encendido</a>
                        </h3>
                        <p>
                            MOTORTECH se ha convertido en uno de los principales fabricantes
                            de controladores de encendido en el mercado global para motores de gas
                            industriales.
                        </p>
                    </div>
                </article>
            </div>
            <div class="col-sm-6 col-lg-3">
                <article class="vertical-item content-padding ls with_bottom_border">
                    <div class="item-media">
                        <img src="./images/accesoriosr-motortech.png" alt="">
                        <div class="media-links">
                            <div class="links-wrap">
                                <a class="p-link" title="" href="{{route('novedades.show', 'test')}}"></a>
                            </div>
                        </div>
                    </div>
                    <div class="item-content">
                        <div class="categories-links small-text big-spacing">
                            <a href="#">Controladores</a>
                        </div>
                        <h3 class="entry-title">
                            <a href="{{route('novedades.show', 'test')}}">Tipos de Mantenimiento Industrial</a>
                        </h3>
                        <p>
                        Es básico que todo profesional conozca los tipos de mantenimiento industrial existentes.
                        Solo de esta forma podrá descubrir los pros y contras de cada uno y establecer un plan de mantenimiento adecuado para su empresa.
                        </p>
                    </div>
                </article>
            </div>
            <div class="col-sm-6 col-lg-3">
                <article class="vertical-item content-padding ls with_bottom_border">
                    <div class="item-media">
                        <img src="./images/accesoriosr-motortech.png" alt="">
                        <div class="media-links">
                            <div class="links-wrap">
                                <a class="p-link" title="" href="{{route('novedades.show', 'test')}}"></a>
                            </div>
                        </div>
                    </div>
                    <div class="item-content">
                        <div class="categories-links small-text big-spacing">
                            <a href="#">Controladores</a>
                        </div>
                        <h3 class="entry-title">
                            <a href="{{route('novedades.show', 'test')}}">La automatización y sus aplicaciones en la industria</a>
                        </h3>
                        <p>
                        El desarrollo e innovación de nuevas tecnologías,
                        la automatización de procesos industriales, a través de los años, ha dado lugar a diversos avances significativos.
                        </p>
                    </div>
                </article>
            </div>
            <div class="col-sm-6 col-lg-3">
                <article class="vertical-item content-padding ls with_bottom_border">
                    <div class="item-media">
                        <img src="./images/accesoriosr-motortech.png" alt="">
                        <div class="media-links">
                            <div class="links-wrap">
                                <a class="p-link" title="" href="{{route('novedades.show', 'test')}}"></a>
                            </div>
                        </div>
                    </div>
                    <div class="item-content">
                        <div class="categories-links small-text big-spacing">
                            <a href="#">Controladores</a>
                        </div>
                        <h3 class="entry-title">
                            <a href="{{route('novedades.show', 'test')}}">Motortech</a>
                        </h3>
                        <p>
                            MOTORTECH se ha convertido en uno de los principales fabricantes
                            de controladores de encendido en el mercado global para motores de gas
                            industriales.
                        </p>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>
@endsection
