@extends('layout')
@section('content')
@foreach($marcas as $marca)
<section class="ls section_padding_145 service_single">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 margin_0">
                <div class="row">
                    <div class="col-lg-3 col-md-4">
                        <div class="teaser">
                            <div>
                                <img src="{{$marca->logo_url}}" alt="" width="500" height="600" style="vertical-align:middle">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-8">
                        <h4 class="text-uppercase">{{$marca->nombre}}</h4>
                        <hr class="divider_2_30 left main_bg_color">
                        <p class="bottommargin_10">{{$marca->descripcion}}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <a href="{{$marca->url}}">{{$marca->nombre}}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endforeach
@endsection