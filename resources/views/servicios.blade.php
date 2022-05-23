@extends('layouts.app')
@section('content')
<section class="page_breadcrumbs ls ms ms_dark section_padding_25">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h1 class="highlight2 bold bottommargin_5">Servicios</h1>
            </div>
        </div>
    </div>
</section>


<section class="ls section_padding_top_135 section_padding_bottom_90 columns_padding_25 page_services">
    <div class="container">
    <p class="entry-excerpt highlight2" style="text-align: justify">
        En ICI Industrial, contribuimos con nuestros clientes para mejorar los procesos de producción, así como garantizar la integridad de la aplicación, retribuyendo al cliente su inversión en ahorros a largo plazo.
        Esto se logra en integrar nuestra estructura ICI Core:
    </p>
        <div class="row columns_margin_bottom_40 services-row">
            <div class="col-md-6">
                <div class="teaser">
                    <div class="main_bg_color2 size_normal round overlapped-icon">
                        <!-- <i class="icon-thermal-power highlight"></i> -->
                        <img src="./images/PANEL.png" alt="">
                    </div>
                    <h4 class="text-uppercase">TABLEROS DE CONTROL</h4>
                    <hr class="divider_2_30 left main_bg_color">
                    <p style="color: #0eb0ee">
                        Diseño de tableros de control para diferentes procesos,
                        con capacidad de expansión a nuevas tecnologías en navegación web.
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="teaser">
                    <div class="main_bg_color2 size_normal round overlapped-icon">
                        <!-- <i class="icon-oil-platform highlight"></i> -->
                        <img src="./images/INFO.png" alt="">
                    </div>
                    <h4 class="text-uppercase">DESARROLLO DE SOFTWARE</h4>
                    <hr class="divider_2_30 left main_bg_color">
                    <p style="color: #0eb0ee">
                        Desarrollamos e implementamos
                        ingeniería de software dedicados para optimizar sus procesos.
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="teaser">
                    <div class="main_bg_color2 size_normal round overlapped-icon">
                        <!-- <i class="icon-gas-flaring highlight"></i> -->
                        <img src="./images/ADMIN.png" alt="">
                    </div>
                    <h4 class="text-uppercase">INSTRUMENTACIÓN</h4>
                    <hr class="divider_2_30 left main_bg_color">
                    <p style="color: #0eb0ee">
                        Recomendación de instrumentación con última tecnología
                        para garantizar su medición y control en procesos.
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="teaser">
                    <div class="main_bg_color2 size_normal round overlapped-icon">
                        <!-- <i class="icon-factory highlight"></i> -->
                        <img src="./images/MANT.png" alt="">
                    </div>
                    <h4 class="text-uppercase">CALIBRACION Y MANTENIMIENTO</h4>
                    <hr class="divider_2_30 left main_bg_color">
                    <p style="color: #0eb0ee">
                        Servicios de calibración
                        y mantenimiento con herramienta
                        certificada con trazabilidad al CENAM.
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection
