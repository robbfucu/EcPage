<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

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

            <section class="page_topline ls table_section table_section_md">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9 text-center text-md-left">
                            <span class="kanit text-uppercase bold fontsize_12">
                                <i class="icon-map-marker highlight fontsize_16"></i> Lightning Point Drive
                                <span class="highlight fontsize_14">27/2</span> Los angeles,
                                <span class="highlight">Inc -
                                    <span class="fontsize_14">4502</span>
                                </span>
                            </span>
                            <span class="kanit text-uppercase bold fontsize_12">
                                <i class="icon-phone highlight fontsize_16"></i> have a question call now
                                <span class="fontsize_14 highlight">1 (800) 300 2214</span>
                            </span>
                        </div>

                        <div class="col-md-3 text-center text-md-right">
                            <a href="#" class="theme_button block_button color1">
                                <i class="icon-quote"></i>
                                <span>Request a Quote</span>
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <header class="page_header cs main_color2 theme_header bordered_items floating_logo table_section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-lg-3">
                            <a href="./" class="logo">
                                <img src="images/logo.png" alt="">
                                <span class="logo_text">
                                    <span class="highlight kanit bold">Oildrop
                                        <br> global</span>
                                    <span class="small-text">test with the best</span>
                                </span>
                            </a>
                        </div>
                        <div class="col-md-8 col-lg-9 text-right">
                            <!-- main nav start -->
                            <nav class="mainmenu_wrapper">
                                <ul class="mainmenu nav sf-menu">
                                    <li class="active">
                                        <a href="index.html">Main Page</a>
                                        <ul>
                                            <li>
                                                <a href="index.html">Main Page</a>
                                            </li>
                                            <li>
                                                <a href="index2.html">Main Page 2</a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li>
                                        <a href="about.html">Pages</a>
                                        <ul>
                                            <!-- features -->
                                            <li>
                                                <a href="shortcodes_teasers.html">Shortcodes&amp;Widgets</a>
                                                <ul>

                                                    <li>
                                                        <a href="shortcodes_teasers.html">Teasers</a>
                                                    </li>
                                                    <li>
                                                        <a href="shortcodes_buttons.html">Buttons</a>
                                                    </li>
                                                    <li>
                                                        <a href="shortcodes_progress.html">Progress</a>
                                                    </li>
                                                    <li>
                                                        <a href="shortcodes_pricing.html">Pricing</a>
                                                    </li>
                                                    <li>
                                                        <a href="shortcodes_socialicons.html">Social Icons</a>
                                                    </li>
                                                    <li>
                                                        <a href="shortcodes_tabs.html">Tabs &amp; Collapse</a>
                                                    </li>
                                                    <li>
                                                        <a href="shortcodes_bootstrap.html">Bootstrap Elements</a>
                                                    </li>
                                                    <li>
                                                        <a href="shortcodes_typography.html">Typography</a>
                                                    </li>
                                                    <li>
                                                        <a href="shortcodes_widgets.html">Widgets</a>
                                                    </li>
                                                    <li>
                                                        <a href="shortcodes_animation.html">Animation</a>
                                                    </li>
                                                    <li>
                                                        <a href="shortcodes_icons.html">Template Icons</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <!-- eof features -->

                                            <!-- header -->
                                            <li>
                                                <a href="header1.html">Headers</a>
                                                <ul>
                                                    <li>
                                                        <a href="header1.html">Header 1</a>
                                                    </li>
                                                    <li>
                                                        <a href="header2.html">Header 2</a>
                                                    </li>
                                                    <li>
                                                        <a href="header3.html">Header 3</a>
                                                    </li>
                                                    <li>
                                                        <a href="header4.html">Header 4</a>
                                                    </li>
                                                    <li>
                                                        <a href="header5.html">Header 5</a>
                                                    </li>
                                                    <li>
                                                        <a href="header6.html">Header 6</a>
                                                    </li>
                                                    <li>
                                                        <a href="header7.html">Header 7</a>
                                                    </li>
                                                    <li>
                                                        <a href="header_side1.html">Side Headers</a>
                                                        <ul>
                                                            <li>
                                                                <a href="header_side1.html">Side Left Header</a>
                                                            </li>
                                                            <li>
                                                                <a href="header_side2.html">Side Right Header</a>
                                                            </li>
                                                            <li>
                                                                <a href="header_side3.html">Side Push Left Header</a>
                                                            </li>
                                                            <li>
                                                                <a href="header_side4.html">Side Push Right Header</a>
                                                            </li>
                                                        </ul>
                                                    </li>

                                                </ul>
                                            </li>
                                            <!-- eof header -->

                                            <!-- breadcrumbs -->
                                            <li>
                                                <a href="breadcrumbs1.html">Breadcrumbs</a>
                                                <ul>
                                                    <li>
                                                        <a href="breadcrumbs1.html">Breadcrumbs 1</a>
                                                    </li>
                                                    <li>
                                                        <a href="breadcrumbs2.html">Breadcrumbs 2</a>
                                                    </li>
                                                    <li>
                                                        <a href="breadcrumbs3.html">Breadcrumbs 3</a>
                                                    </li>
                                                    <li>
                                                        <a href="breadcrumbs4.html">Breadcrumbs 4</a>
                                                    </li>
                                                    <li>
                                                        <a href="breadcrumbs5.html">Breadcrumbs 5</a>
                                                    </li>
                                                    <li>
                                                        <a href="breadcrumbs6.html">Breadcrumbs 6</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <!-- eof breadcrumbs -->

                                            <!-- footer -->
                                            <li>
                                                <a href="footer1.html">Footer</a>
                                                <ul>
                                                    <li>
                                                        <a href="footer1.html">Footer 1</a>
                                                    </li>
                                                    <li>
                                                        <a href="footer2.html">Footer 2</a>
                                                    </li>
                                                    <li>
                                                        <a href="footer3.html">Footer 3</a>
                                                    </li>
                                                    <li>
                                                        <a href="footer4.html">Footer 4</a>
                                                    </li>
                                                    <li>
                                                        <a href="footer5.html">Footer 5</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <!-- eof footer -->

                                            <!-- copyright -->
                                            <li>
                                                <a href="copyright1.html">Copyright</a>
                                                <ul>
                                                    <li>
                                                        <a href="copyright1.html">Copyright 1</a>
                                                    </li>
                                                    <li>
                                                        <a href="copyright2.html">Copyright 2</a>
                                                    </li>
                                                    <li>
                                                        <a href="copyright3.html">Copyright 3</a>
                                                    </li>
                                                    <li>
                                                        <a href="copyright4.html">Copyright 4</a>
                                                    </li>
                                                    <li>
                                                        <a href="copyright5.html">Copyright 5</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <!-- eof copyright -->

                                            <!-- events -->
                                            <li>
                                                <a href="events-left.html">Events</a>
                                                <ul>
                                                    <li>
                                                        <a href="events-left.html">Left Sidebar</a>
                                                    </li>
                                                    <li>
                                                        <a href="events-right.html">Right Sidebar</a>
                                                    </li>
                                                    <li>
                                                        <a href="events-full.html">Full Width</a>
                                                    </li>
                                                    <li>
                                                        <a href="event-single-left.html">Single Event</a>
                                                        <ul>
                                                            <li>
                                                                <a href="event-single-left.html">Left Sidebar</a>
                                                            </li>
                                                            <li>
                                                                <a href="event-single-right.html">Right Sidebar</a>
                                                            </li>
                                                            <li>
                                                                <a href="event-single-full.html">Full Width</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <!-- eof events -->

                                            <!-- gallery -->
                                            <li>
                                                <a href="gallery-regular.html">Gallery</a>
                                                <ul>
                                                    <!-- Gallery regular -->
                                                    <li>
                                                        <a href="gallery-regular.html">Gallery Regular</a>
                                                        <ul>
                                                            <li>
                                                                <a href="gallery-regular.html">1 column</a>
                                                            </li>
                                                            <li>
                                                                <a href="gallery-regular-2-cols.html">2 columns</a>
                                                            </li>
                                                            <li>
                                                                <a href="gallery-regular-3-cols.html">3 columns</a>
                                                            </li>
                                                            <li>
                                                                <a href="gallery-regular-4-cols.html">4 columns</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <!-- eof Gallery regular -->

                                                    <!-- Gallery full width -->
                                                    <li>
                                                        <a href="gallery-fullwidth.html">Gallery Full Width</a>
                                                        <ul>
                                                            <li>
                                                                <a href="gallery-fullwidth.html">2 column</a>
                                                            </li>
                                                            <li>
                                                                <a href="gallery-fullwidth-3-cols.html">3 columns</a>
                                                            </li>
                                                            <li>
                                                                <a href="gallery-fullwidth-4-cols.html">4 columns</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <!-- eof Gallery full width -->

                                                    <!-- Gallery extended -->
                                                    <li>
                                                        <a href="gallery-extended.html">Gallery Extended</a>
                                                        <ul>
                                                            <li>
                                                                <a href="gallery-extended.html">1 column</a>
                                                            </li>
                                                            <li>
                                                                <a href="gallery-extended-2-cols.html">2 columns</a>
                                                            </li>
                                                            <li>
                                                                <a href="gallery-extended-3-cols.html">3 columns</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <!-- eof Gallery extended -->

                                                    <!-- Gallery carousel -->
                                                    <li>
                                                        <a href="gallery-carousel.html">Gallery Carousel</a>
                                                        <ul>
                                                            <li>
                                                                <a href="gallery-carousel.html">1 column</a>
                                                            </li>
                                                            <li>
                                                                <a href="gallery-carousel-2-cols.html">2 columns</a>
                                                            </li>
                                                            <li>
                                                                <a href="gallery-carousel-3-cols.html">3 columns</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <!-- eof Gallery carousel -->

                                                    <!-- Gallery tile -->
                                                    <li>
                                                        <a href="gallery-tile.html">Gallery Tile</a>
                                                    </li>
                                                    <!-- eof Gallery tile -->

                                                    <!-- Gallery left sidebar -->
                                                    <li>
                                                        <a href="gallery-left.html">Gallery Left Sidebar</a>
                                                        <ul>
                                                            <li>
                                                                <a href="gallery-left.html">1 column</a>
                                                            </li>
                                                            <li>
                                                                <a href="gallery-left-2-cols.html">2 columns</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <!-- eof Gallery left sidebar -->

                                                    <!-- Gallery right sidebar -->
                                                    <li>
                                                        <a href="gallery-right.html">Gallery Right Sidebar</a>
                                                        <ul>
                                                            <li>
                                                                <a href="gallery-right.html">1 column</a>
                                                            </li>
                                                            <li>
                                                                <a href="gallery-right-2-cols.html">2 columns</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <!-- eof Gallery right sidebar -->

                                                    <!-- Gallery item -->
                                                    <li>
                                                        <a href="gallery-single.html">Gallery Item</a>
                                                        <ul>
                                                            <li>
                                                                <a href="gallery-single.html">Style 1</a>
                                                            </li>
                                                            <li>
                                                                <a href="gallery-single2.html">Style 2</a>
                                                            </li>
                                                            <li>
                                                                <a href="gallery-single3.html">Style 3</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <!-- eof Gallery item -->
                                                </ul>
                                            </li>
                                            <!-- eof Gallery -->

                                            <li>
                                                <a href="about.html">About</a>
                                            </li>

                                            <li>
                                                <a href="team.html">Team</a>
                                                <ul>
                                                    <li>
                                                        <a href="team.html">Team</a>
                                                    </li>
                                                    <li>
                                                        <a href="team-single.html">Team member profile</a>
                                                    </li>
                                                </ul>
                                            </li>

                                            <li>
                                                <a href="comingsoon1.html">Comingsoon</a>
                                                <ul>
                                                    <li>
                                                        <a href="comingsoon1.html">Comingsoon</a>
                                                    </li>
                                                    <li>
                                                        <a href="comingsoon2.html">Comingsoon 2</a>
                                                    </li>
                                                </ul>
                                            </li>

                                            <li>
                                                <a href="timetable.html">Timetable</a>
                                            </li>

                                            <li>
                                                <a href="faq.html">FAQ</a>
                                                <ul>
                                                    <li>
                                                        <a href="faq.html">FAQ</a>
                                                    </li>
                                                    <li>
                                                        <a href="faq2.html">FAQ 2</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="404.html">404</a>
                                            </li>

                                        </ul>
                                    </li>
                                    <!-- eof pages -->

                                    <li>
                                        <a href="services.html">Services</a>
                                        <ul>
                                            <li>
                                                <a href="services.html">Services</a>
                                            </li>
                                            <li>
                                                <a href="service-single.html">Single service</a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li>
                                        <a href="#">Features</a>
                                        <div class="mega-menu">
                                            <ul class="mega-menu-row">
                                                <li class="mega-menu-col">
                                                    <a href="#">Headers</a>
                                                    <ul>
                                                        <li>
                                                            <a href="header1.html">Header Type 1</a>
                                                        </li>
                                                        <li>
                                                            <a href="header2.html">Header Type 2</a>
                                                        </li>
                                                        <li>
                                                            <a href="header3.html">Header Type 3</a>
                                                        </li>
                                                        <li>
                                                            <a href="header4.html">Header Type 4</a>
                                                        </li>
                                                        <li>
                                                            <a href="header5.html">Header Type 5</a>
                                                        </li>
                                                        <li>
                                                            <a href="header6.html">Header Type 6</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="mega-menu-col">
                                                    <a href="#">Side Menus</a>
                                                    <ul>
                                                        <li>
                                                            <a href="header_side1.html">Slide Left Light</a>
                                                        </li>
                                                        <li>
                                                            <a href="header_side2.html">Slide Right Light</a>
                                                        </li>
                                                        <li>
                                                            <a href="header_side3.html">Push Left Light</a>
                                                        </li>
                                                        <li>
                                                            <a href="header_side4.html">Push Right Light</a>
                                                        </li>
                                                        <li>
                                                            <a href="header_side5.html">Slide Left Dark</a>
                                                        </li>
                                                        <li>
                                                            <a href="header_side6.html">Slide Right Dark</a>
                                                        </li>
                                                        <li>
                                                            <a href="header_side7.html">Push Left Dark</a>
                                                        </li>
                                                        <li>
                                                            <a href="header_side8.html">Push Right Dark</a>
                                                        </li>
                                                        <li>
                                                            <a href="header_side_superfish.html">Superfish Menu</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="mega-menu-col">
                                                    <a href="breadcrumbs1.html">Breadcrumbs</a>
                                                    <ul>
                                                        <li>
                                                            <a href="breadcrumbs1.html">Breadcrumbs 1</a>
                                                        </li>
                                                        <li>
                                                            <a href="breadcrumbs2.html">Breadcrumbs 2</a>
                                                        </li>
                                                        <li>
                                                            <a href="breadcrumbs3.html">Breadcrumbs 3</a>
                                                        </li>
                                                        <li>
                                                            <a href="breadcrumbs4.html">Breadcrumbs 4</a>
                                                        </li>
                                                        <li>
                                                            <a href="breadcrumbs5.html">Breadcrumbs 5</a>
                                                        </li>
                                                        <li>
                                                            <a href="breadcrumbs6.html">Breadcrumbs 6</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="mega-menu-col">
                                                    <a href="footer1.html">Footers</a>
                                                    <ul>
                                                        <li>
                                                            <a href="footer1.html">Footer Type 1</a>
                                                        </li>
                                                        <li>
                                                            <a href="footer2.html">Footer Type 2</a>
                                                        </li>
                                                        <li>
                                                            <a href="footer3.html">Footer Type 3</a>
                                                        </li>
                                                        <li>
                                                            <a href="footer4.html">Footer Type 4</a>
                                                        </li>
                                                        <li>
                                                            <a href="footer5.html">Footer Type 5</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="mega-menu-col">
                                                    <a href="copyright1.html">Copyrights</a>

                                                    <ul>
                                                        <li>
                                                            <a href="copyright1.html">Copyrights 1</a>
                                                        </li>
                                                        <li>
                                                            <a href="copyright2.html">Copyrights 2</a>
                                                        </li>
                                                        <li>
                                                            <a href="copyright3.html">Copyrights 3</a>
                                                        </li>
                                                        <li>
                                                            <a href="copyright4.html">Copyrights 4</a>
                                                        </li>
                                                        <li>
                                                            <a href="copyright5.html">Copyrights 5</a>
                                                        </li>
                                                    </ul>
                                                </li>

                                            </ul>
                                        </div>
                                        <!-- eof mega menu -->
                                    </li>
                                    <!-- eof features -->

                                    <!-- blog -->
                                    <li>
                                        <a href="blog-right.html">Our Blog</a>
                                        <ul>

                                            <li>
                                                <a href="blog-right.html">Right Sidebar</a>
                                            </li>
                                            <li>
                                                <a href="blog-left.html">Left Sidebar</a>
                                            </li>
                                            <li>
                                                <a href="blog-full.html">No Sidebar</a>
                                            </li>
                                            <li>
                                                <a href="blog-mosaic.html">Blog Grid</a>
                                            </li>

                                            <li>
                                                <a href="blog-single-right.html">Post</a>
                                                <ul>
                                                    <li>
                                                        <a href="blog-single-right.html">Right Sidebar</a>
                                                    </li>
                                                    <li>
                                                        <a href="blog-single-left.html">Left Sidebar</a>
                                                    </li>
                                                    <li>
                                                        <a href="blog-single-full.html">No Sidebar</a>
                                                    </li>
                                                </ul>
                                            </li>

                                            <li>
                                                <a href="blog-single-video-right.html">Video Post</a>
                                                <ul>
                                                    <li>
                                                        <a href="blog-single-video-right.html">Right Sidebar</a>
                                                    </li>
                                                    <li>
                                                        <a href="blog-single-video-left.html">Left Sidebar</a>
                                                    </li>
                                                    <li>
                                                        <a href="blog-single-video-full.html">No Sidebar</a>
                                                    </li>
                                                </ul>
                                            </li>

                                        </ul>
                                    </li>
                                    <!-- eof blog -->

                                    <!-- contacts -->
                                    <li>
                                        <a href="contact.html">Contacts</a>
                                        <ul>
                                            <li>
                                                <a href="contact.html">Contact 1</a>
                                            </li>
                                            <li>
                                                <a href="contact2.html">Contact 2</a>
                                            </li>
                                            <li>
                                                <a href="contact3.html">Contact 3</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <!-- eof contacts -->
                                </ul>
                            </nav>
                            <!-- eof main nav -->
                            <span class="toggle_menu">
                                <span></span>
                            </span>
                        </div>
                    </div>
                </div>
            </header>

            <section class="intro_section page_mainslider cs">
                <div class="flexslider">
                    <img src="images/intro_person.png" alt="" class="slide-person visible-lg-block to_animate" data-animation="fadeInRight">
                    <ul class="slides">
                        <li>
                            <img src="images/intro_bg.png" alt="" class="slide-bg">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="slide_description_wrapper">
                                            <div class="slide_description">
                                                <div class="intro-layer">
                                                    <p class="text-uppercase bold fontsize_14 highlight kanit">
                                                        Producing the world's
                                                    </p>
                                                    <h3 class="bold big">
                                                        Vital oil and natural
                                                        <br> gas resources
                                                    </h3>
                                                    <p class="bold">See our commitment to safety and sustainability.</p>
                                                </div>
                                            </div>
                                            <!-- eof .slide_description -->
                                        </div>
                                    </div>
                                    <!-- eof .col-* -->
                                </div>
                                <!-- eof .row -->
                            </div>
                            <!-- eof .container -->
                        </li>
                        <li>
                            <img src="images/intro_bg2.png" alt="" class="slide-bg">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="slide_description_wrapper">
                                            <div class="slide_description">
                                                <div class="intro-layer">
                                                    <p class="text-uppercase bold fontsize_14 highlight kanit">
                                                        Our projects worldwide
                                                    </p>
                                                    <h3 class="bold big">
                                                        Discover our most
                                                        <br> successful projects
                                                    </h3>
                                                    <p class="bold">To meet the growing worldwide demand for energy while preparing for the future.</p>
                                                </div>
                                            </div>
                                            <!-- eof .slide_description -->
                                        </div>
                                    </div>
                                    <!-- eof .col-* -->
                                </div>
                                <!-- eof .row -->
                            </div>
                            <!-- eof .container -->
                        </li>
                        <li>
                            <img src="images/intro_bg.png" alt="" class="slide-bg">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="slide_description_wrapper">
                                            <div class="slide_description">
                                                <div class="intro-layer">
                                                    <p class="text-uppercase bold fontsize_14 highlight kanit">
                                                        Providing for today
                                                    </p>
                                                    <h3 class="bold big">
                                                        Future technologies
                                                        <br> and innovations
                                                    </h3>
                                                    <p class="bold">Discover how Oildrop produces the oil and gas essential to modern life.</p>
                                                </div>
                                            </div>
                                            <!-- eof .slide_description -->
                                        </div>
                                    </div>
                                    <!-- eof .col-* -->
                                </div>
                                <!-- eof .row -->
                            </div>
                            <!-- eof .container -->
                        </li>
                    </ul>
                </div>
                <!-- eof flexslider -->
            </section>

            <section class="ls section_padding_top_145 section_padding_bottom_90 columns_margin_bottom_60">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <h2 class="section_header">
                                About us
                            </h2>
                            <hr class="divider_2_30 left-important main_bg_color divider_35">
                            <a href="about.html" class="theme_button color1 topmargin_10">More information</a>
                        </div>
                        <div class="col-md-6">
                            <p class="entry-excerpt highlight2 bottommargin_30">
                                <a href="">We help interesting companies create and improve industry products and services through long lasting and mutually rewarding relationships.</a>
                            </p>
                            <p>
                                We work with our partners to streamline project plans that don’t just deliver on product perfection, but also delivers on time – crucial to success in a highly competitive market where every day counts.
                            </p>
                        </div>
                        <div class="col-md-3">
                            <h5 class="bottommargin_0 roboto fontsize_18 bold letter-spacing0">Sheldon Moreno</h5>
                            <p class="small-text highlight">Head of Operations</p>
                            <hr class="divider_2_30 left-important main_bg_color divider_35">
                            <img src="./images/signature.png" alt="">
                        </div>
                    </div>
                </div>
            </section>

            <section class="ls ms section_padding_145">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-offset-2 col-sm-8 col-md-offset-0 col-md-3 text-center text-sm-left">
                            <h2 class="section_header">
                                Our projects
                                <br>
                                <span class="highlight">&amp; missions</span>
                            </h2>
                            <hr class="divider_2_30 left main_bg_color divider_35">
                            <img src="./images/map-scheme.png" alt="" class="topmargin_100 bottommargin_20">
                            <br>
                            <div class="media thin_teaser inline-block">
                                <div class="media-left media-middle">
                                    <div class="teaser_icon border_icon round">
                                        <i class="icon-mar-marker2"></i>
                                    </div>
                                </div>
                                <div class="media-body media-middle">
                                    <p class="kanit text-uppercase bold fontsize_14">
                                        <span class="fontsize_18 highlight2">3560</span>
                                        <br> completed projects
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-offset-2 col-sm-8 col-md-offset-0 col-md-3">
                            <div class="with_padding text-center cs main_color2">
                                <span class="image_icon">
                                    <img src="./images/icon1.png" alt="">
                                </span>
                                <h3 class="highlight medium">Our commitment</h3>
                                <div class="border-paragraphs middle-borders bold bottommargin_0 greylinks">
                                    <p>
                                        <a href="#">Ambition: to become the responsible energy major</a>
                                    </p>
                                    <p>
                                        <a href="#">Protecting people</a>
                                    </p>
                                    <p>
                                        <a href="#">Responding to Environmental Challenges</a>
                                    </p>
                                    <p>
                                        <a href="#">Helping to foster shared development</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-offset-2 col-sm-8 col-md-offset-0 col-md-3">
                            <div class="with_padding text-center cs main_color2">
                                <span class="image_icon">
                                    <img src="./images/icon2.png" alt="">
                                </span>
                                <h3 class="highlight medium">Our group</h3>
                                <div class="border-paragraphs middle-borders bold bottommargin_0 greylinks">
                                    <p>
                                        <a href="#">Ambition</a>
                                    </p>
                                    <p>
                                        <a href="#">Thumbnail</a>
                                    </p>
                                    <p>
                                        <a href="#">Worldwide Presence</a>
                                    </p>
                                    <p>
                                        <a href="#">Organization</a>
                                    </p>
                                    <p>
                                        <a href="#">Corporate Governance</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-offset-2 col-sm-8 col-md-offset-0 col-md-3">
                            <div class="with_padding text-center cs main_color2">
                                <span class="image_icon">
                                    <img src="./images/icon3.png" alt="">
                                </span>
                                <h3 class="highlight medium">Our expertise</h3>
                                <div class="border-paragraphs middle-borders bold bottommargin_0 greylinks">
                                    <p>
                                        <a href="#">Explore and produce</a>
                                    </p>
                                    <p>
                                        <a href="#">Transform and develop</a>
                                    </p>
                                    <p>
                                        <a href="#">Ship and market</a>
                                    </p>
                                    <p>
                                        <a href="#">Projects &amp; Achievements</a>
                                    </p>
                                    <p class="black">
                                        <a href="#">Ship and market</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="cs main_color2 parallax page_info section_padding_bottom_40 section_padding_top_65">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 text-center text-sm-left">
                            <h2 class="section_header">
                                Oil company
                                <br>
                                <span class="highlight">that works</span>
                            </h2>
                            <hr class="divider_2_30 left main_bg_color topmargin_30 bottommargin_15">
                        </div>
                    </div>
                    <div class="row columns_margin_bottom_30">
                        <div class="col-md-3 col-sm-6 text-center text-sm-left">
                            <div class="media thin_teaser inline-block">
                                <div class="media-left media-middle">
                                    <div class="teaser_icon border_icon round">
                                        <i class="icon-globe black"></i>
                                    </div>
                                </div>
                                <div class="media-body media-middle">
                                    <p class="kanit text-uppercase bold black fontsize_14">
                                        <span class="fontsize_18 highlight">Expanding Provider</span>
                                        <br> Of Industrial Solutions
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 text-center text-sm-left">
                            <div class="media thin_teaser inline-block">
                                <div class="media-left media-middle">
                                    <div class="teaser_icon border_icon round">
                                        <i class="icon-certificate black"></i>
                                    </div>
                                </div>
                                <div class="media-body media-middle">
                                    <p class="kanit text-uppercase bold black fontsize_14">
                                        <span class="fontsize_18 highlight">Global Certificate</span>
                                        <br> ISO 9001:2015
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 text-center text-sm-left">
                            <div class="media thin_teaser inline-block">
                                <div class="media-left media-middle">
                                    <div class="teaser_icon border_icon round">
                                        <i class="icon-award black"></i>
                                    </div>
                                </div>
                                <div class="media-body media-middle">
                                    <p class="kanit text-uppercase bold black fontsize_14">
                                        <span class="fontsize_18 highlight">Award Winning</span>
                                        <br> Solution Of The Year
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 text-center text-sm-left">
                            <div class="media thin_teaser inline-block">
                                <div class="media-left media-middle">
                                    <div class="teaser_icon border_icon round">
                                        <i class="icon-check black"></i>
                                    </div>
                                </div>
                                <div class="media-body media-middle">
                                    <p class="kanit text-uppercase bold black fontsize_14">
                                        <span class="fontsize_18 highlight">Leading Provider</span>
                                        <br> of gas &amp; oil industry
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="ls section_padding_top_145 section_padding_bottom_75 page_services">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 text-center text-sm-left">
                            <h2 class="section_header">
                                Our projects
                                <br>
                                <span class="highlight">&amp; missions</span>
                            </h2>
                            <hr class="divider_2_30 left main_bg_color divider_35">
                        </div>
                        <div class="col-md-9">
                            <div class="row columns_margin_bottom_40 services-row">
                                <div class="col-sm-4 col-xs-6">
                                    <div class="teaser">
                                        <div class="main_bg_color2 size_normal round overlapped-icon">
                                            <i class="icon-thermal-power highlight"></i>
                                        </div>
                                        <h4 class="text-uppercase">thermal power</h4>
                                        <hr class="divider_2_30 left main_bg_color">
                                        <p>
                                            On the other hand, we denounce with righteous indignation and dislike men who are so beguiled.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="teaser">
                                        <div class="main_bg_color2 size_normal round overlapped-icon">
                                            <i class="icon-oil-platform highlight"></i>
                                        </div>
                                        <h4 class="text-uppercase">Oil platform</h4>
                                        <hr class="divider_2_30 left main_bg_color">
                                        <p>
                                            So blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="teaser">
                                        <div class="main_bg_color2 size_normal round overlapped-icon">
                                            <i class="icon-gas-flaring highlight"></i>
                                        </div>
                                        <h4 class="text-uppercase">Gas flaring</h4>
                                        <hr class="divider_2_30 left main_bg_color">
                                        <p>
                                            To those who fail in their duty through weakness of will, which is the same as saying toil and pain.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="teaser">
                                        <div class="main_bg_color2 size_normal round overlapped-icon">
                                            <i class="icon-oil-pump highlight"></i>
                                        </div>
                                        <h4 class="text-uppercase">Oil pump</h4>
                                        <hr class="divider_2_30 left main_bg_color">
                                        <p>
                                            He rejects pleasures to secure other greater pleasures, or else he endures pains to avoid.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="teaser">
                                        <div class="main_bg_color2 size_normal round overlapped-icon">
                                            <i class="icon-oil-refinery highlight"></i>
                                        </div>
                                        <h4 class="text-uppercase">Oil Refinery</h4>
                                        <hr class="divider_2_30 left main_bg_color">
                                        <p>
                                            When our power of choice is untrammed and when nothing prevents our being able to do like.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="teaser">
                                        <div class="main_bg_color2 size_normal round overlapped-icon">
                                            <i class="icon-factory highlight"></i>
                                        </div>
                                        <h4 class="text-uppercase">Factory</h4>
                                        <hr class="divider_2_30 left main_bg_color">
                                        <p>
                                            Obligations of business frequently occur that pleasures have to be repudiated and annoyances.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row columns_margin_0">
                        <div class="col-sm-12 text-center text-sm-left">
                            <a href="services.html" class="theme_button color1 services_button">View all services</a>
                        </div>
                    </div>
                </div>
            </section>

            <section class="cs main_color2 section_padding_top_145 section_padding_bottom_130 columns_margin_bottom_30">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-offset-0 col-md-6 col-sm-offset-2 col-sm-8 text-center text-sm-left">
                            <h2 class="section_header">
                                Our blog
                            </h2>
                            <hr class="divider_2_30 left main_bg_color topmargin_30">
                            <div class="inline-block bottommargin_50">
                                <ul class="list1 middle-borders margin_0 bold greylinks">
                                    <li>
                                        <a href="#">Chemicals &amp; Refining</a>
                                    </li>
                                    <li>
                                        <a href="#">International Trade</a>
                                    </li>
                                    <li>
                                        <a href="#">Petrolium Engineering</a>
                                    </li>
                                    <li>
                                        <a href="#">Projects &amp; Achievements</a>
                                    </li>
                                    <li>
                                        <a href="#">Explore &amp; Produce</a>
                                    </li>
                                    <li>
                                        <a href="#">Transform &amp; Develop</a>
                                    </li>
                                </ul>
                            </div>
                            <br>
                            <a href="services.html" class="theme_button color1">Go to our blog</a>
                        </div>
                        <div class="col-lg-3 col-md-offset-0 col-md-6 col-sm-offset-2 col-sm-8">
                            <article class="vertical-item content-padding ls with_bottom_border topmargin_10">
                                <div class="item-media">
                                    <img src="./images/blog_post1.jpg" alt="">
                                    <div class="media-links">
                                        <div class="links-wrap">
                                            <a class="p-view prettyPhoto" title="" data-gal="prettyPhoto[gal]" href="./images/blog_post1.jpg"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-content">
                                    <div class="categories-links small-text big-spacing">
                                        <a href="#">Chemicals &amp; Refining</a>
                                    </div>
                                    <h3 class="entry-title">
                                        <a href="blog-single-right.html">Energy for the world</a>
                                    </h3>
                                    <p>
                                        Blinded by desire, that they can fo the pain and trouble that are bound to blame.
                                    </p>
                                </div>
                            </article>
                        </div>
                        <div class="col-lg-3 col-md-offset-0 col-md-6 col-sm-offset-2 col-sm-8">
                            <article class="vertical-item content-padding ls with_bottom_border topmargin_10">
                                <div class="item-media">
                                    <img src="./images/blog_post2.jpg" alt="">
                                    <div class="media-links">
                                        <div class="links-wrap">
                                            <a class="p-view prettyPhoto" title="" data-gal="prettyPhoto[gal]" href="./images/blog_post2.jpg"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-content">
                                    <div class="categories-links small-text big-spacing">
                                        <a href="#">International Trade</a>
                                    </div>
                                    <h3 class="entry-title">
                                        <a href="blog-single-right.html">A brighter tomorrow starts today</a>
                                    </h3>
                                    <p>
                                        On the other hand enounce with righteous indignation.
                                    </p>
                                </div>
                            </article>
                        </div>
                        <div class="col-lg-3 col-md-offset-0 col-md-6 col-sm-offset-2 col-sm-8">
                            <article class="vertical-item content-padding ls with_bottom_border topmargin_10">
                                <div class="item-media">
                                    <img src="./images/blog_post3.jpg" alt="">
                                    <div class="media-links">
                                        <div class="links-wrap">
                                            <a class="p-view prettyPhoto" title="" data-gal="prettyPhoto[gal]" href="./images/blog_post3.jpg"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-content">
                                    <div class="categories-links small-text big-spacing">
                                        <a href="#">Petrolium Engineering</a>
                                    </div>
                                    <h3 class="entry-title">
                                        <a href="blog-single-right.html">Power for the future</a>
                                    </h3>
                                    <p>
                                        Curabitur sit amet lacinia to justo. In modo, eros eget a commodo condimentum.
                                    </p>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </section>

            <section class="ls ms section_padding_top_160 section_padding_bottom_130">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-lg-3 text-center text-sm-left">
                            <h2 class="section_header">
                                Testimonials
                            </h2>
                            <hr class="divider_2_30 left main_bg_color divider_35">
                        </div>
                        <div class="col-md-8 col-lg-9 topmargin_0">
                            <div class="owl-carousel" data-responsive-lg="3" data-responsive-md="2" data-dots="true" data-dots-container="#testimonials-dots">
                                <blockquote class="blockquote-item">
                                    <div class="media">
                                        <div class="media-left media-middle">
                                            <div class="item-media">
                                                <img src="./images/faces/01.jpg" alt="">
                                                <div class="media-links">
                                                    <div class="links-wrap">
                                                        <a class="p-link" title="" href="team-single.html"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="media-body media-middle">
                                            <a href="#">
                                                <h4>Sheldon Moreno</h4>
                                                <p class="highlight bold text-uppercase kanit">Head of Operations</p>
                                            </a>
                                        </div>
                                    </div>
                                    <hr class="divider_2_30 left-important main_bg_color">
                                    <p>
                                        Untrammelled and nothing prevents our being able to do what we like best, every pleasure.
                                    </p>
                                </blockquote>

                                <blockquote class="blockquote-item">
                                    <div class="media">
                                        <div class="media-left media-middle">
                                            <div class="item-media">
                                                <img src="./images/faces/02.jpg" alt="">
                                                <div class="media-links">
                                                    <div class="links-wrap">
                                                        <a class="p-link" title="" href="team-single.html"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="media-body media-middle">
                                            <a href="#">
                                                <h4>Mike Banbridge</h4>
                                                <p class="highlight bold text-uppercase kanit">Consultant</p>
                                            </a>
                                        </div>
                                    </div>
                                    <hr class="divider_2_30 left-important main_bg_color">
                                    <p>
                                        But in certain circumstances and owing to the claims of duty or the obligations business it will frequently.
                                    </p>
                                </blockquote>

                                <blockquote class="blockquote-item">
                                    <div class="media">
                                        <div class="media-left media-middle">
                                            <div class="item-media">
                                                <img src="./images/faces/03.jpg" alt="">
                                                <div class="media-links">
                                                    <div class="links-wrap">
                                                        <a class="p-link" title="" href="team-single.html"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="media-body media-middle">
                                            <a href="#">
                                                <h4>Claudia Ortiz</h4>
                                                <p class="highlight bold text-uppercase kanit">Customer Relations</p>
                                            </a>
                                        </div>
                                    </div>
                                    <hr class="divider_2_30 left-important main_bg_color">
                                    <p>
                                        These cases are perfectly simple and easy to distinguish. In a free hour, our power of choice.
                                    </p>
                                </blockquote>


                                <blockquote class="blockquote-item">
                                    <div class="media">
                                        <div class="media-left media-middle">
                                            <div class="item-media">
                                                <img src="./images/faces/01.jpg" alt="">
                                                <div class="media-links">
                                                    <div class="links-wrap">
                                                        <a class="p-link" title="" href="team-single.html"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="media-body media-middle">
                                            <a href="#">
                                                <h4>Sheldon Moreno</h4>
                                                <p class="highlight bold text-uppercase kanit">Head of Operations</p>
                                            </a>
                                        </div>
                                    </div>
                                    <hr class="divider_2_30 left-important main_bg_color">
                                    <p>
                                        Untrammelled and nothing prevents our being able to do what we like best, every pleasure.
                                    </p>
                                </blockquote>

                                <blockquote class="blockquote-item">
                                    <div class="media">
                                        <div class="media-left media-middle">
                                            <div class="item-media">
                                                <img src="./images/faces/02.jpg" alt="">
                                                <div class="media-links">
                                                    <div class="links-wrap">
                                                        <a class="p-link" title="" href="team-single.html"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="media-body media-middle">
                                            <a href="#">
                                                <h4>Mike Banbridge</h4>
                                                <p class="highlight bold text-uppercase kanit">Consultant</p>
                                            </a>
                                        </div>
                                    </div>
                                    <hr class="divider_2_30 left-important main_bg_color">
                                    <p>
                                        But in certain circumstances and owing to the claims of duty or the obligations business it will frequently.
                                    </p>
                                </blockquote>

                                <blockquote class="blockquote-item">
                                    <div class="media">
                                        <div class="media-left media-middle">
                                            <div class="item-media">
                                                <img src="./images/faces/03.jpg" alt="">
                                                <div class="media-links">
                                                    <div class="links-wrap">
                                                        <a class="p-link" title="" href="team-single.html"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="media-body media-middle">
                                            <a href="#">
                                                <h4>Claudia Ortiz</h4>
                                                <p class="highlight bold text-uppercase kanit">Customer Relations</p>
                                            </a>
                                        </div>
                                    </div>
                                    <hr class="divider_2_30 left-important main_bg_color">
                                    <p>
                                        These cases are perfectly simple and easy to distinguish. In a free hour, our power of choice.
                                    </p>
                                </blockquote>


                                <blockquote class="blockquote-item">
                                    <div class="media">
                                        <div class="media-left media-middle">
                                            <div class="item-media">
                                                <img src="./images/faces/01.jpg" alt="">
                                                <div class="media-links">
                                                    <div class="links-wrap">
                                                        <a class="p-link" title="" href="team-single.html"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="media-body media-middle">
                                            <a href="#">
                                                <h4>Sheldon Moreno</h4>
                                                <p class="highlight bold text-uppercase kanit">Head of Operations</p>
                                            </a>
                                        </div>
                                    </div>
                                    <hr class="divider_2_30 left-important main_bg_color">
                                    <p>
                                        Untrammelled and nothing prevents our being able to do what we like best, every pleasure.
                                    </p>
                                </blockquote>

                                <blockquote class="blockquote-item">
                                    <div class="media">
                                        <div class="media-left media-middle">
                                            <div class="item-media">
                                                <img src="./images/faces/02.jpg" alt="">
                                                <div class="media-links">
                                                    <div class="links-wrap">
                                                        <a class="p-link" title="" href="team-single.html"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="media-body media-middle">
                                            <a href="#">
                                                <h4>Mike Banbridge</h4>
                                                <p class="highlight bold text-uppercase kanit">Consultant</p>
                                            </a>
                                        </div>
                                    </div>
                                    <hr class="divider_2_30 left-important main_bg_color">
                                    <p>
                                        But in certain circumstances and owing to the claims of duty or the obligations business it will frequently.
                                    </p>
                                </blockquote>

                                <blockquote class="blockquote-item">
                                    <div class="media">
                                        <div class="media-left media-middle">
                                            <div class="item-media">
                                                <img src="./images/faces/03.jpg" alt="">
                                                <div class="media-links">
                                                    <div class="links-wrap">
                                                        <a class="p-link" title="" href="team-single.html"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="media-body media-middle">
                                            <a href="#">
                                                <h4>Claudia Ortiz</h4>
                                                <p class="highlight bold text-uppercase kanit">Customer Relations</p>
                                            </a>
                                        </div>
                                    </div>
                                    <hr class="divider_2_30 left-important main_bg_color">
                                    <p>
                                        These cases are perfectly simple and easy to distinguish. In a free hour, our power of choice.
                                    </p>
                                </blockquote>

                            </div>
                        </div>
                    </div>

                    <div class="row columns_margin_0">
                        <div class="col-sm-12 text-center text-md-left">
                            <div id="testimonials-dots" class="owl-dots topmargin_30"></div>
                        </div>
                    </div>

                </div>
            </section>

            <section class="ls section_padding_145">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-lg-3">
                            <h2 class="section_header highlight">
                                Feedback
                            </h2>
                            <hr class="divider_2_30 left-important main_bg_color divider_35">
                        </div>
                        <div class="col-md-8 col-lg-9">
                            <p class="entry-excerpt highlight2 bottommargin_30">
                                <a href="">We’re always interested in new projects, big or small. Please don’t hesitate to get in touch with us regarding your project.</a>
                            </p>
                            <p>
                                If you want to contact us about any issue please call
                                <span class="kanit fontsize_18 highlight bold">1 (800) 300 2214</span> or
                                <a href="#" class="bold highlight underlined">send us an email</a>. If you would like to submit a proposal for consideration simply
                                <a href="#" class="bold highlight underlined">get a quote</a>.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="cs main_color2 parallax section_subscribe section_padding_50">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <h2 class="section_header">
                                Newsletter
                            </h2>
                            <hr class="divider_2_30 left-important main_bg_color topmargin_30">
                        </div>
                        <div class="col-md-9">
                            <div class="widget widget_mailchimp">
                                <p class="roboto fontsize_18 bold black bottommargin_5">
                                    Subscribe to our newsletters to receive latest news and updates
                                </p>
                                <form class="signup row columns_padding_10" action="/" method="get">
                                    <div class="col-lg-8 col-md-7">
                                        <div class="form-group">
                                            <input class="mailchimp_email form-control" name="email" type="email" placeholder="Your email address">
                                        </div>
                                        <div class="response"></div>
                                    </div>
                                    <div class="col-lg-4 col-md-5">
                                        <button type="submit" class="theme_button color1">subscribe to newsletter</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="ls section_padding_30">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="owl-carousel partners-carousel" data-responsive-lg="6" data-responsive-md="5" data-responsive-sm="3" data-responsive-xs="2" data-margin="0">
                                <a href="">
                                    <img src="./images/partners/1.png" alt="">
                                </a>
                                <a href="">
                                    <img src="./images/partners/2.png" alt="">
                                </a>
                                <a href="">
                                    <img src="./images/partners/3.png" alt="">
                                </a>
                                <a href="">
                                    <img src="./images/partners/4.png" alt="">
                                </a>
                                <a href="">
                                    <img src="./images/partners/5.png" alt="">
                                </a>
                                <a href="">
                                    <img src="./images/partners/6.png" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="page_copyright cs main_color2 table_section section_padding_top_30 section_padding_bottom_30">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 text-center">
                            <p class="bold fontsize_12 text-uppercase kanit">Oildrop global - test with the best &copy; 2016.
                                <span class="black">Created with</span>
                                <a href="http://modernwebtemplates.com">
                                    <i class="icon-heart highlight fontsize_14"></i> by MWTemplates</a>
                            </p>
                        </div>
                    </div>
                </div>
            </section>

        </div>
        <!-- eof #box_wrapper -->
    </div>
    <!-- eof #canvas -->

    <script src="js/compressed.js"></script>
    <script src="js/main.js"></script>


    <!-- Google Map Script -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTwYSMRGuTsmfl2z_zZDStYqMlKtrybxo"></script>
</body>

</html>
