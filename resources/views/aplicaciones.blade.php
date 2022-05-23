@extends('layouts.app')
@section('content')
<section class="page_breadcrumbs ls ms ms_dark section_padding_25">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h1 class="highlight2 bold bottommargin_5">Aplicaciones</h1>
                <p style="color: #30355d">
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

                    @foreach($aplicaciones as $aplicacion)
                    <div class="isotope-item col-lg-6 col-md-6 col-sm-12 photography">
                        <div class="vertical-item content-padding gallery-extended-item with_background text-center">
                            <div class="item-media">
                                <img src="{{$aplicacion->logo_url}}" alt="" width="800" height="800">
                                <div class="media-links">
                                    <a class="abs-link" title="" href="#"></a>
                                </div>
                            </div>
                            <div class="item-content">
                                <h3 class="item-title">
                                   {{$aplicacion->nombre}}
                                </h3>
                                <p style="color: #9B9290; text-align: justify; font-weight: 100">{{$aplicacion->descripcion}}</p>
                                @if($aplicacion->pdf)
                                <div class="item-button">
                                    <a href="{{$aplicacion->pdf_url}}" class="theme_button color1">
                                        Descargar información
                                    </a>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
