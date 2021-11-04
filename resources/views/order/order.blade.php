@extends('layout.header')
@section('container.categorie.create')

    <div id="layout">
        <div class="info-head">

        </div>
        @include('layout.info_head')

        <div class="section-title-01 honmob">
            <div class="bg_parallax image_01_parallax"></div>
            <div class="opacy_bg_02">
                <div class="container">
                    <h1>Paiement par mobile money</h1>
                    <div class="crumbs">
                        <ul>
                            <li><a href="{{ route('admin.index') }}">Accueil</a></li>
                            <li>/</li>
                            <li>Paiement par mobile money</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-central">
            <div class="semiboxshadow text-center">
                <img src="img/img-theme/shp.png" class="img-responsive" alt="">
            </div>
            <div class="content_info">
                @if (Session('message'))
                            <div class="alert alert-warning" role="alert">
                                {{ session('message') }}
                            </div>
                        @endif
                <div class="paddings-mini">
                    <div class="container">
                        <div class="row">

                            <div class="text-center" style="color: red">CETTE PAGE EST EN CONSTRUCTION, VUEILLEZ PATIENTER</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-twitter content_resalt border-top">
                <i class="fa fa-twitter icon-big"></i>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('admin.layout.footer')
    </div>
    <script type="text/javascript" src="../assets/js/nav/jquery.sticky.js"></script>
    <script type="text/javascript" src="../assets/js/totop/jquery.ui.totop.js"></script>
    <script type="text/javascript" src="../assets/js/accordion/accordion.js"></script>
    <script type="text/javascript" src="../assets/js/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="../assets/js/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="../assets/js/maps/gmap3.js"></script>
    <script type="text/javascript" src="../assets/js/fancybox/jquery.fancybox.js"></script>
    <script type="text/javascript" src="../assets/js/carousel/carousel.js"></script>
    <script type="text/javascript" src="../assets/js/filters/jquery.isotope.js"></script>
    <script type="text/javascript" src="../assets/js/twitter/jquery.tweet.js"></script>
    <script type="text/javascript" src="../assets/js/flickr/jflickrfeed.min.js"></script>
    <script type="text/javascript" src="../assets/js/theme-options/theme-options.js"></script>
    <script type="text/javascript" src="../assets/js/theme-options/jquery.cookies.js"></script>
    <script type="text/javascript" src="../assets/js/bootstrap/bootstrap.min.js"></script>
    <script type="text/javascript" src="../assets/js/bootstrap/bootstrap-slider.js"></script>
    <script type="text/javascript" src="../assets/js/dtb/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="../assets/js/dtb/jquery.table2excel.js"></script>
    <script type="text/javascript" src="../assets/js/dtb/script.js"></script>
    <script type="text/javascript" src="../assets/js/select2.min.js"></script>
    <script type="text/javascript" src="../assets/js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="../assets/js/validation-rule.js"></script>
    <script type="text/javascript" src="../assets/js/bootstrap3-typeahead.min.js"></script>
    <script type="text/javascript" src="../assets/js/main.js"></script>

@endsection
