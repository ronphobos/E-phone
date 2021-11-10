@extends('layout.header')
@section('users.register')
    <div id="layout">
        @include('layout.info_head')
        <div class="section-title-01 honmob">
            <div class="bg_parallax image_02_parallax"></div>
            <div class="opacy_bg_02">
                <div class="container">
                    <h1>Inscription</h1>
                    <div class="crumbs">
                        <ul>
                            <li><a href="{{ route('user.index') }}">Accueil</a></li>
                            <li>/</li>
                            <li>Inscription</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <section class="content-central">
            <div class="semiboxshadow text-center">
            </div>
            <div class="content_info">
                <div class="paddings-mini">
                    <div class="container">
                        <div class="col-xs-12 col-sm-6 col-md-6 col-md-offset-3 profile1" style="padding-bottom:40px;">
                            <div class="thinborder-ontop">
                                <h3>Information d'inscription</h3>
                                <form method="post" action="{{ route('user.doregister') }}" id="userregisterationform">
                                    @csrf
                                    <div class="form-group row">
                                        <label for="name" class="col-md-4 col-form-label text-md-right">Nom</label>
                                        <div class="col-md-6">
                                            <input id="name" type="text" class="form-control" name="name" value="" required="" autofocus="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="name" class="col-md-4 col-form-label text-md-right">Prénom</label>
                                        <div class="col-md-6">
                                            <input id="name" type="text" class="form-control" name="last_name" value="" required="" autofocus="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail</label>
                                        <div class="col-md-6">
                                            <input id="email" type="email" class="form-control" name="email" value="" required="">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="phone" class="col-md-4 col-form-label text-md-right">Phone</label>
                                        <div class="col-md-6">
                                            <input id="phone" type="text" class="form-control" name="phone" value="" required="" autofocus="">
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
                                        <label for="password-confirm"
                                            class="col-md-4 col-form-label text-md-right">Confirmation du mot de passe</label>
                                        <div class="col-md-6">
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required="">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-0">
                                        <div class="col-md-10">
                                            <span style="font-size: 14px;">J'ai déjà un compte <a
                                                    href="{{ route('user.login') }}" title="Login">cliquer ici</a> pour vous connecter</span>
                                            <button type="submit" class="btn btn-primary pull-right">M'inscrire</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                             {{-- connecter avec google --}}
                             <div class="thinborder-ontop" style="margin-top: 10px; text-align:center;">
                                <div class="form-group row">
                                <a href="#">
                                    <div class="col-md-6">
                                            <h4>Se connecter avec Google</h4>
                                        </div>
                                        <div class="col-md-6">
                                            <img src="{{ asset('images/google_logo.svg.png') }}" style="width: 45px; height:40px;" alt="">
                                        </div>
                                    </div>
                                </a>
                            </div>
                            {{-- fin --}}
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
