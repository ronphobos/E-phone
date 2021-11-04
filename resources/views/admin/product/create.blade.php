@extends('layout.header')

@section('container.produit.create')

    <div id="layout">
        <div class="info-head">

        </div>

        @include('layout.info_head')

        <div class="section-title-01 honmob">
            <div class="bg_parallax image_01_parallax"></div>
            <div class="opacy_bg_02">
                <div class="container">
                    <h1>Ajout de produit</h1>
                    <div class="crumbs">
                        <ul>
                            <li><a href="{{ route('admin.index') }}">Accueil</a></li>
                            <li>/</li>
                            <li>Ajout de produit</li>
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
                            <form action="{{ route('produit.store') }}" enctype="multipart/form-data" method="post" id="changelocationform">
                                @csrf
                                <div class="col-md-10">
                                    <aside class="addlocation">
                                        <h4>Ajout<input type="submit" class="btn btn-primary pull-right"
                                                name="submit" value="AJOUTER"></h4>
                                        <address>
                                            <div class="form-group">
                                                <label for="streetnumber" class="col-form-label">Nom:</label>
                                                <input type="text" class="form-control" id="street_number"
                                                    name="name" autocomplete="off" value="{{ old('name') }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="routes" class="col-form-label">Prix</label>
                                                <input type="number" class="form-control" value="{{ old('price') }}" autocomplete="off" id="route" name="price">
                                            </div>
                                            <div class="form-group">
                                                <label for="city" class="col-form-label">Description</label>
                                                <input type="text" value="{{ old('description') }}" class="form-control" autocomplete="off" id="locality" name="description">
                                            </div>
                                            <div class="form-group">
                                                <label for="state" class="col-form-label">Categorie</label>
                                                <select class="form-control" name="category" id="administrative_area_level_1">
                                                    <option value="portable">Sélectionner une catégorie</option>
                                                    @foreach ($categories as $categorie)
                                                    <option value="{{ $categorie->name }}">{{ $categorie->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="country" class="col-form-label">Photo</label>
                                                <input type="file" class="form-control"  id="country" name="photo">
                                            </div>
                                            {{-- <input type="hidden" class="form-control"  id="country" name="category_id"> --}}
                                            <div class="form-group">
                                                <label for="pincode" class="col-form-label">Mot clé:</label>
                                                <input type="text" value="{{ old('mot_cle') }}" class="form-control" autocomplete="off" id="postal_code" name="mot_cle">
                                            </div>
                                        </address>
                                    </aside>
                                </div>
                            </form>
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
        @include("admin.layout.footer")
    </div>
    <script type="text/javascript" src="{{asset('assets/js/nav/jquery.sticky.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/totop/jquery.ui.totop.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/accordion/accordion.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/maps/gmap3.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/fancybox/jquery.fancybox.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/carousel/carousel.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/filters/jquery.isotope.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/twitter/jquery.tweet.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/flickr/jflickrfeed.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/theme-options/theme-options.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/theme-options/jquery.cookies.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/bootstrap/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/bootstrap/bootstrap-slider.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/dtb/jquery.dataTables.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/dtb/jquery.table2excel.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/dtb/script.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/select2.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/jquery.validate.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/validation-rule.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/bootstrap3-typeahead.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/main.js')}}"></script>

@endsection
