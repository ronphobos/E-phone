@extends('layout.header')

@section('users.login')
    <div id="layout">
        @include('layout.info_head')
        <div class="section-title-01 honmob">
            <div class="bg_parallax image_02_parallax"></div>
            <div class="opacy_bg_02">
                <div class="container">
                    <h1>Connexion</h1>
                    <div class="crumbs">
                        <ul>
                            <li><a href="{{ route('user.index') }}">Accueil</a></li>
                            <li>/</li>
                            <li>Connexion</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <section class="content-central">
            <div class="content_info">
                <div class="paddings-mini">
                    <div class="container">
                        <div class="row portfolioContainer">
                            <div class="col-xs-12 col-sm-3 col-md-3 profile1">
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 profile1" style="min-height: 300px;">
                                @if (Session('erreur'))
                                <div class="alert alert-danger" role="alert">
                                    {{ session('erreur') }}
                                </div>
                                @endif
                                <div class="thinborder-ontop">
                                    <h3>Information de connexion</h3>
                                    <form method="POST" action="{{ route('user.dologin') }}" id="userloginform">
                                        @csrf
                                        <div class="form-group row">
                                            <label for="email" class="col-sm-4 col-form-label text-md-right">E-Mail</label>
                                            <div class="col-md-6">
                                                <input id="email" type="email" class="form-control" name="email" value="" required="" autofocus="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="password"
                                                class="col-md-4 col-form-label text-md-right">Mot de passe</label>
                                            <div class="col-md-6">
                                                <input id="password" type="password" class="form-control" name="password" required="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-6">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="remember"> Se souvenir de moi </label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <button type="submit" class="btn btn-primary pull-right">Connexion</button>
                                            </div>
                                        </div>
                                        <div class="form-group row mb-0">
                                            <div class="col-md-10">
                                                <a class="" href="#">Mot de passe oublié?</a>
                                            </div>
                                            <div class="col-md-10">
                                                Pas de compte?<a class="" href="{{ route('user.register') }}"> cliqué ici</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-3 col-md-3 profile1">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-twitter">
                <i class="fa fa-twitter icon-big"></i>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="text-center">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @include('admin.layout.footer')
    </div>
@include('admin.layout.script')
@endsection
