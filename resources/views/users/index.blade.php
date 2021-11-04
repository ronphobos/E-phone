@extends('layout.header')

@section('users.index')
    <div id="layout">
        @include('layout.info_head')
        <section class="tp-banner-container">
            <div class="tp-banner">
                <ul>
                    <li data-transition="slidevertical" data-slotamount="1" data-masterspeed="1000"
                        data-saveperformance="off" data-title="Slide">
                        <img src="assets/img/slide/1.jpg" alt="fullslide1" data-bgposition="center center"
                            data-kenburns="on" data-duration="6000" data-ease="Linear.easeNone" data-bgfit="130"
                            data-bgfitend="100" data-bgpositionend="right center">
                    </li>
                    <li data-transition="slidehorizontal" data-slotamount="1" data-masterspeed="1000"
                        data-saveperformance="off" data-title="Slide">
                        <img src="assets/img/slide/2.jpg" alt="fullslide1" data-bgposition="top center"
                            data-kenburns="on" data-duration="6000" data-ease="Linear.easeNone" data-bgfit="130"
                            data-bgfitend="100" data-bgpositionend="right center">
                    </li>
                </ul>
                <div class="tp-bannertimer"></div>
            </div>
            <div class="filter-title">
                <div class="title-header">
                    <h2 style="color:#fff;">COMMANDER UN SERVICE</h2>
                    <p class="lead">Commandez nos services à un prix incroyable, </p>
                </div>
                <div class="filter-header">
                    <form id="sform" action="searchservices" method="post">
                        <input type="text" id="q" name="q" required="required" placeholder="Que recherchez vous?"
                            class="input-large typeahead" autocomplete="off">
                        <input type="submit" name="submit" value="Chercher">
                    </form>
                </div>
            </div>

        </section>
        <section class="content-central">
            <div class="content_info content_resalt">
                <div class="container" style="margin-top: 40px;">
                    <div class="row">
                    </div>
                </div>
                <div class="container">
                    @if (Session('message'))
                    <div class="alert alert-warning" role="alert">
                        {{ session('message') }}
                    </div>
                    @endif
                    <div class="row">
                        <div class="col-md-12">
                            <ul id="sponsors" class="tooltip-hover">
                                @if ($produits->count())
                                @foreach ($produits as $produit)
                                <li data-toggle="tooltip" title="" data-original-title="{{ $produit->name }}"> <a
                                    href="{{ route('produit.show',$produit->id) }}"><img src="storage/{{ $produit->photo }}"
                                    alt="{{ $produit->name }}" style="height: 50px; width:40px;"></a>
                                </li>
                                @endforeach
                                @else
                                    <p>Pas de produit!</p>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="semiboxshadow text-center">
                <img src="assets/img/img-theme/shp.png" class="img-responsive" alt="">
            </div>
            <div class="content_info">
                <div>
                    <div class="container">
                        <div class="row">
                            <div class="titles">
                                <h2>JenGu <span>Choix</span> de Services</h2>
                                <i class="fa fa-plane"></i>
                                <hr class="tall">
                            </div>
                        </div>
                        <div class="portfolioContainer" style="margin-top: -50px;">
                            @if ($produits_page->count())
                                @foreach ($produits_page as $produit)
                                <div class="col-xs-6 col-sm-4 col-md-3 hsgrids"
                                style="padding-right: 5px;padding-left: 5px;">
                                <a class="g-list" href="{{ route('produit.show', $produit->id) }}">
                                    <div class="img-hover">
                                        <img src="storage/{{ $produit->photo }}" alt="{{ $produit->name }}"
                                            class="img-responsive">
                                    </div>
                                    <div class="info-gallery">
                                        <h3>{{ $produit->name }}</h3>
                                        <hr class="separator">
                                        <p>{{ $produit->category }}</p>
                                        <div class="content-btn"><a href="{{ route('produit.show', $produit->id) }}"
                                                class="btn btn-primary">Commander maintenant</a></div>
                                        <div class="price"><b>Prix</b>{{ $produit->price }} FCFA</div>
                                    </div>
                                </a>
                            </div>
                                @endforeach
                            @else
                                <p>Pas de produits</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="content_info">
                <div class="bg-dark color-white border-top">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4 ">
                                <div class="services-lines-info">
                                    <h2>WELCOME TO DIVERSIFIED</h2>
                                    <p class="lead">
                                        Book best services at one place.
                                        <span class="line"></span>
                                    </p>

                                    <p>Find a wide variety of home services.</p>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <ul class="services-lines">
                                    <li>
                                        <a href="servicesbycategory/1.html">
                                            <div class="item-service-line">
                                                <i class="fa"><img class="icon-img"
                                                        src="images/sercat/service-icon.png"></i>
                                                <h5>AC</h5>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="servicesbycategory/3.html">
                                            <div class="item-service-line">
                                                <i class="fa"><img class="icon-img"
                                                        src="images/sercat/service-icon.png"></i>
                                                <h5>Plumbing</h5>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="servicesbycategory/4.html">
                                            <div class="item-service-line">
                                                <i class="fa"><img class="icon-img"
                                                        src="images/sercat/service-icon.png"></i>
                                                <h5>Electrical</h5>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="servicesbycategory/6.html">
                                            <div class="item-service-line">
                                                <i class="fa"><img class="icon-img"
                                                        src="images/sercat/service-icon.png"></i>
                                                <h5>Home Cleaning</h5>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="servicesbycategory/8.html">
                                            <div class="item-service-line">
                                                <i class="fa"><img class="icon-img"
                                                        src="images/sercat/service-icon.png"></i>
                                                <h5>Pest Control</h5>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="servicesbycategory/11.html">
                                            <div class="item-service-line">
                                                <i class="fa"><img class="icon-img"
                                                        src="images/sercat/service-icon.png"></i>
                                                <h5>Computer Repair</h5>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="servicesbycategory/12.html">
                                            <div class="item-service-line">
                                                <i class="fa"><img class="icon-img"
                                                        src="images/sercat/service-icon.png"></i>
                                                <h5>TV</h5>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="servicesbycategory/13.html">
                                            <div class="item-service-line">
                                                <i class="fa"><img class="icon-img"
                                                        src="images/sercat/service-icon.png"></i>
                                                <h5>Refrigerator</h5>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            {{-- <div>
                <div class="container">
                    <div class="row">
                        <div class="titles">
                            <h2><span>Autres </span>Services</h2>
                            <i class="fa fa-plane"></i>
                            <hr class="tall">
                        </div>
                    </div>
                </div>
                <div id="boxes-carousel">
                    <div>
                        <a class="g-list" href="service-details/ac-wet-servicing.html">
                            <div class="img-hover">
                                <img src="images/services/thumbnails/thumbnail.jpg" alt="" class="img-responsive">
                            </div>

                            <div class="info-gallery">
                                <h3>AC Wet Servicing</h3>
                                <hr class="separator">
                                <p>AC Wet Servicing</p>
                                <div class="content-btn"><a href="service-details/ac-wet-servicing.html"
                                        class="btn btn-primary">Book Now</a></div>
                                <div class="price"><span>&#36;</span><b>From</b>200</div>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a class="g-list" href="service-details/bedroom-deep-cleaning.html">
                            <div class="img-hover">
                                <img src="images/services/thumbnails/thumbnail.jpg" alt="" class="img-responsive">
                            </div>

                            <div class="info-gallery">
                                <h3>Bedroom Deep Cleaning</h3>
                                <hr class="separator">
                                <p>Bedroom Deep Cleaning</p>
                                <div class="content-btn"><a href="service-details/bedroom-deep-cleaning.html"
                                        class="btn btn-primary">Book Now</a></div>
                                <div class="price"><span>&#36;</span><b>From</b>300</div>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a class="g-list" href="service-details/dining-chair-shampooing.html">
                            <div class="img-hover">
                                <img src="images/services/thumbnails/thumbnail.jpg" alt="" class="img-responsive">
                            </div>

                            <div class="info-gallery">
                                <h3>Dining Chair Shampooing</h3>
                                <hr class="separator">
                                <p>Dining Chair Shampooing</p>
                                <div class="content-btn"><a href="service-details/dining-chair-shampooing.html"
                                        class="btn btn-primary">Book Now</a></div>
                                <div class="price"><span>&#36;</span><b>From</b>400</div>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a class="g-list" href="service-details/carpet-shampooing.html">
                            <div class="img-hover">
                                <img src="images/services/thumbnails/thumbnail.jpg" alt="" class="img-responsive">
                            </div>

                            <div class="info-gallery">
                                <h3>Carpet Shampooing</h3>
                                <hr class="separator">
                                <p>Carpet Shampooing</p>
                                <div class="content-btn"><a href="service-details/carpet-shampooing.html"
                                        class="btn btn-primary">Book Now</a></div>
                                <div class="price"><span>&#36;</span><b>From</b>200</div>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a class="g-list" href="service-details/fabric-sofa-shampooing.html">
                            <div class="img-hover">
                                <img src="images/services/thumbnails/thumbnail.jpg" alt="" class="img-responsive">
                            </div>

                            <div class="info-gallery">
                                <h3>Fabric Sofa Shampooing</h3>
                                <hr class="separator">
                                <p>Fabric Sofa Shampooing</p>
                                <div class="content-btn"><a href="service-details/fabric-sofa-shampooing.html"
                                        class="btn btn-primary">Book Now</a></div>
                                <div class="price"><span>&#36;</span><b>From</b>211</div>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a class="g-list" href="service-details/bathroom-deep-cleaning.html">
                            <div class="img-hover">
                                <img src="images/services/thumbnails/thumbnail.jpg" alt="" class="img-responsive">
                            </div>

                            <div class="info-gallery">
                                <h3>Bathroom Deep Cleaning</h3>
                                <hr class="separator">
                                <p>Bathroom Deep Cleaning</p>
                                <div class="content-btn"><a href="service-details/bathroom-deep-cleaning.html"
                                        class="btn btn-primary">Book Now</a></div>
                                <div class="price"><span>&#36;</span><b>From</b>233</div>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a class="g-list" href="service-details/floor-scrubbing-polishing.html">
                            <div class="img-hover">
                                <img src="images/services/thumbnails/thumbnail.jpg" alt="" class="img-responsive">
                            </div>

                            <div class="info-gallery">
                                <h3>Floor Scrubbing &amp; Polishing</h3>
                                <hr class="separator">
                                <p>Floor Scrubbing &amp; Polishing</p>
                                <div class="content-btn"><a href="service-details/floor-scrubbing-polishing.html"
                                        class="btn btn-primary">Book Now</a></div>
                                <div class="price"><span>&#36;</span><b>From</b>411</div>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a class="g-list" href="service-details/mattress-shampooing.html">
                            <div class="img-hover">
                                <img src="images/services/thumbnails/thumbnail.jpg" alt="" class="img-responsive">
                            </div>

                            <div class="info-gallery">
                                <h3>Mattress Shampooing</h3>
                                <hr class="separator">
                                <p>Mattress Shampooing</p>
                                <div class="content-btn"><a href="service-details/mattress-shampooing.html"
                                        class="btn btn-primary">Book Now</a></div>
                                <div class="price"><span>&#36;</span><b>From</b>222</div>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a class="g-list" href="service-details/kitchen-deep-cleaning.html">
                            <div class="img-hover">
                                <img src="images/services/thumbnails/thumbnail.jpg" alt="" class="img-responsive">
                            </div>

                            <div class="info-gallery">
                                <h3>Kitchen Deep Cleaning</h3>
                                <hr class="separator">
                                <p>Kitchen Deep Cleaning</p>
                                <div class="content-btn"><a href="service-details/kitchen-deep-cleaning.html"
                                        class="btn btn-primary">Book Now</a></div>
                                <div class="price"><span>&#36;</span><b>From</b>111</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div> --}}
        </section>
        @include('admin.layout.footer')
    </div>

    <script type="text/javascript" src="assets/js/nav/jquery.sticky.js"></script>
    <script type="text/javascript" src="assets/js/totop/jquery.ui.totop.js"></script>
    <script type="text/javascript" src="assets/js/accordion/accordion.js"></script>
    <script type="text/javascript" src="assets/js/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="assets/js/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="assets/js/maps/gmap3.js"></script>
    <script type="text/javascript" src="assets/js/fancybox/jquery.fancybox.js"></script>
    <script type="text/javascript" src="assets/js/carousel/carousel.js"></script>
    <script type="text/javascript" src="assets/js/filters/jquery.isotope.js"></script>
    <script type="text/javascript" src="assets/js/twitter/jquery.tweet.js"></script>
    <script type="text/javascript" src="assets/js/flickr/jflickrfeed.min.js"></script>
    <script type="text/javascript" src="assets/js/theme-options/theme-options.js"></script>
    <script type="text/javascript" src="assets/js/theme-options/jquery.cookies.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap/bootstrap-slider.js"></script>
    <script type="text/javascript" src="assets/js/dtb/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="assets/js/dtb/jquery.table2excel.js"></script>
    <script type="text/javascript" src="assets/js/dtb/script.js"></script>
    <script type="text/javascript" src="assets/js/select2.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="assets/js/validation-rule.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap3-typeahead.min.js"></script>
    <script type="text/javascript" src="assets/js/main.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function () {
            jQuery('.tp-banner').show().revolution({
                dottedOverlay: "none",
                delay: 5000,
                startwidth: 1170,
                startheight: 480,
                minHeight: 250,
                navigationType: "none",
                navigationArrows: "solo",
                navigationStyle: "preview1"
            });
        });
    </script>

@endsection
