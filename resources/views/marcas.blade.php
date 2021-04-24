@extends('layouts.app')
@section('content')
<section class="page_breadcrumbs ls ms ms_dark section_padding_25">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h1 class="highlight2 bold bottommargin_5">Representamos marcas con alto estándar de calidad</h1>
                <p style="color: #30355d; font-size: 16px">
                    <strong>ICI Industrial</strong>, integra a los mejores fabricantes para <strong>suministro de refaccionamiento
                    para sus procesos y sistemas de control.</strong> Además de contar con un área de ventas especialistas en las marcas que representamos,
                    ofreciendo al cliente, el mejor producto para <strong>controlar, monitorear y medir su proceso.</strong>
                </p>
            </div>
        </div>
    </div>
</section>
@foreach($marcas as $marca)

<section>
<div class="row columns_padding_0 topmargin_20 cs main_color2" style="padding-bottom:120px; vertical-align:middle">
            <div class="col-md-6 col-lg-5">
                <img src="{{$marca->logo_url}}" alt="" width="500" height="600" style="margin-top: 50px">
            </div>
            <div class="col-md-6 col-lg-5 col-lg-offset-1 topmargin_60" style="">
                <h1 class="text-uppercase">{{$marca->nombre}}</h1>
                <hr class="divider_2_30 left main_bg_color">
                <p class="bottommargin_10" style="font-size: 24px; text-align: justify">{{$marca->descripcion}}</p>
                <a href="{{$marca->url}}">{{$marca->nombre}}</a>
            </div>
        </div>
</section>

@endforeach
@endsection

