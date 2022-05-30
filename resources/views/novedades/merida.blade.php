@extends('layouts.app')
@section('content')
<section class="page_breadcrumbs ls ms ms_dark section_padding_25">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h1 class="highlight2 bold bottommargin_5">Próximamente, oficina virtual en Mérida</h1>
            </div>
        </div>
    </div>
</section>

<section class="ls section_padding_top_75 section_padding_bottom_100">
    <div class="container">
        <div class="row">

            <div class="col-md-10 col-md-push-1 text-center">

                <h1 class="entry-title gallery-single-title">
                    <strong>Visítanos</strong>
                </h1>

                <div class="vertical-item gallery-extended-item content-padding with_background">
                    <div class="item-media">
                        <img src="{{ asset('images/merida.jpg') }}" alt="">
                    </div>
                    <div class="item-content text-center">

                        <p class="entry-excerpt" style="color: #0eb0ee">
                            Es nuestra prioridad brindar la mejor atención y servicio a ustedes, por eso es un
                            honor y un orgullo anunciarles que próximamente podrán comunicarse con nosotros
                            en nuestra oficina virtual ubicada en Mérida, Yucatán y así poder tener un
                            acercamiento más directo.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
