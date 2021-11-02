@extends('layout.header')

@section('users.contact')
    <div id="layout">
        @include('layout.info_head')
        <div class="section-title-01 honmob">
            <div class="bg_parallax image_02_parallax"></div>
            <div class="opacy_bg_02">
                <div class="container">
                    <h1>Contact Us</h1>
                    <div class="crumbs">
                        <ul>
                            <li><a href="{{ route('user.index') }}">Accueil</a></li>
                            <li>/</li>
                            <li>Contactez nous</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-central">
            <div class="content_info">
                <div class="paddings-mini">
                    @if (Session('message'))
                    <div class="alert alert-warning" role="alert">
                        {{ session('message') }}
                    </div>
                @endif
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <aside>
                                    <h4>Notre site</h4>
                                    <address>
                                        <strong>JenGu Accueil.</strong><br>
                                        <i class="fa fa-map-marker"></i><strong>Adresse: </strong>Abidjan, Côte d'Ivoire<br>
                                        <i class="fa fa-phone"></i><strong>Phone: </strong> +225 0504264931
                                    </address>
                                    <address>
                                        <strong>Emails</strong><br>
                                        <i class="fa fa-envelope"></i><strong>Email:</strong><a
                                            href="mailto:sidibearouna71@gmail.com"> sidibearouna71@gmail.com</a><br>
                                        <i class="fa fa-envelope"></i><strong>Email:</strong><a
                                            href="mailto:contact@jengu.ci"> contact@jengu.ci</a>
                                    </address>
                                </aside>
                                <hr class="tall">
                            </div>
                            <div class="col-md-8">
                                <h3>Formulaire de Contact</h3>
                                <p class="lead">
                                </p>
                                <form id="contactform" class="form-theme" action="{{ route('user.message') }}" method="post">
                                    @csrf

                                    <input type="text" placeholder="Nom" name="name" id="name" required="">
                                    <input type="email" placeholder="Email" name="email" id="email" required="">
                                    <input type="text" placeholder="Phone" name="phone" id="phone" required="">
                                    <textarea placeholder="Votre Message..." name="message" id="message"
                                        required=""></textarea>
                                    <input type="submit" name="Submit" value="Envoyer le Message" class="btn btn-primary">
                                </form>
                                <div id="result"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-twitter content_resalt border-top">
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
        </div>
        <script type="text/javascript">
            function initAutocomplete() {
                var map = new google.maps.Map(document.getElementById('map'), {
                    center: {
                        lat: 19.0760,
                        lng: 72.8777
                    },
                    zoom: 13
                });
                var input = document.getElementById('autocomplete');
                var autocomplete = new google.maps.places.Autocomplete(input);
            }
        </script>
        <script src="maps/api/js?key=AIzaSyDUivMJTPZn0DVMCnTmeOxPEAC6kSuplwU&libraries=places&callback=initAutocomplete"
            async="" defer=""></script>
        @include('admin.layout.footer')
    </div>
@include('admin.layout.script')
@endsection
