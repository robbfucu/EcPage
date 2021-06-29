@extends('layouts.app')
@section('content')
<section class="page_breadcrumbs ls ms ms_dark section_padding_25">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h1 class="highlight2 bold bottommargin_5">Contáctanos</h1>
            </div>
            <span>
                Si desea más información relacionada con la empresa o
                nuestros productos y servicios, puede contactarnos
                por cualquiera de los siguientes medios.
            </span>
        </div>
    </div>
</section>

<section id="map" class="ls" data-address="40 Blandford St Marylebone, London">
    <!-- marker description and marker icon goes here -->
    <div class="map_marker_description">
        <iframe id="map" style="border:0; width: 100%;" class="ls page_map" data-address="40 Blandford St Marylebone, London" loading="lazy" allowfullscreen src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d949.2798663248235!2d-92.9242673!3d17.8798666!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85edda890e4e81a3%3A0xb95f3b16ade2d69!2sICI%20INDUSTRIAL!5e0!3m2!1sen!2smx!4v1619731819276!5m2!1sen!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy">
        </iframe>
    </div>
</section>

<section class="ls section_padding_145">
    <div class="container">
        <div class="row">

            <div class="col-md-8 to_animate" data-animation="scaleAppear">

                <h2 class="section_header">Formulario de Contacto</h2>

                <hr class="divider_2_30 left-important main_bg_color divider_35">

                <form class="contact-form row columns_padding_20 columns_margin_0" method="post" action="/">


                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="name">Nombre Completo
                                <span class="required">*</span>
                            </label>
                            <input type="text" aria-required="true" size="30" value="" name="name" id="name" class="form-control" placeholder="Nombre Completo">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="subject">Asunto
                                <span class="required">*</span>
                            </label>
                            <input type="text" aria-required="true" size="30" value="" name="subject" id="subject" class="form-control" placeholder="Asunto">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="phone">Numero de Teléfono
                                <span class="required">*</span>
                            </label>
                            <input type="text" aria-required="true" size="30" value="" name="phone" id="phone" class="form-control" placeholder="Numero de Teléfono">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="email">E-Mail
                                <span class="required">*</span>
                            </label>
                            <input type="email" aria-required="true" size="30" value="" name="email" id="email" class="form-control" placeholder="E-Mail">
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="message">Mensaje</label>
                            <textarea aria-required="true" rows="11" cols="45" name="message" id="message" class="form-control" placeholder="Mensaje"></textarea>
                        </div>
                        <button type="submit" id="contact_form_submit" name="contact_submit" class="theme_button color1">Enviar Solicitud</button>
                    </div>

                </form>
            </div>

            <div class="col-md-4 to_animate" data-animation="scaleAppear">

                <h2 class="section_header">Datos de Contacto</h2>
                <hr class="divider_2_30 left-important main_bg_color divider_35">

                <div class="media thin_teaser topmargin_0">
                    <div class="media-left media-middle">
                        <div class="teaser_icon border_icon round">
                            <i class="icon-map-marker highlight2"></i>
                        </div>
                    </div>
                    <div class="media-body media-middle">
                        <p class="kanit text-uppercase bold fontsize_14">
                            Calle Senda de la lluvia
                            <span class="highlight2 fontsize_18">Manzana 5, Lote 2</span>
                            <br> Col. Villa Parrilla
                            <span class="highlight2">Villahermosa, Tab. Mexico
                                <span class="fontsize_18">86284</span>
                            </span>
                        </p>
                    </div>
                </div>

                <div class="media thin_teaser">
                    <div class="media-left media-middle">
                        <div class="teaser_icon border_icon round">
                            <i class="icon-phone highlight2"></i>
                        </div>
                    </div>
                    <div class="media-body media-middle">
                        <p class="kanit text-uppercase bold fontsize_14">
                            Teléfonos:
                            <br>
                            <span class="fontsize_18 highlight2">+52 (993) 338 20 49</span>
                            <br>
                            <span class="fontsize_18 highlight2">+52 (993) 338 21 92</span>
                            <br>
                        </p>
                    </div>
                </div>

                <div class="media thin_teaser">
                    <div class="media-left media-middle">
                        <div class="teaser_icon border_icon round">
                            <i class="icon-envelope highlight2"></i>
                        </div>
                    </div>
                    <div class="media-body media-middle">
                        <p class="kanit text-uppercase bold fontsize_14">
                            Nuestros correos:
                            <br>
                            <span class="highlight2">ventas@iciindustrial.com</span>
                            <br>
                            <span class="highlight2">serviciocliente@iciindustrial.com</span>
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>
@endsection