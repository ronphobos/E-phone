@extends('layout.header')
@section('produit_all')
    <div id="layout">
        @include('layout.info_head')
        <div class="section-title-01 honmob">
            <div class="bg_parallax image_01_parallax"></div>
            <div class="opacy_bg_02">
                <div class="container">
                    <h1>JenGu Services</h1>
                    <div class="crumbs">
                        <ul>
                            <li><a href="{{ route('user.index') }}">Accueil</a></li>
                            <li>/</li>
                            <li>JenGu</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <section class="content-central">
            <div class="container">
                <div class="row" style="margin-top: -30px;">
                    <div class="titles">
                        <h2>JenGu <span>Services</span></h2>
                        <i class="fa fa-plane"></i>
                        <hr class="tall">
                    </div>
                </div>
            </div>
            <div class="content_info" style="margin-top: -70px;">
                <div>
                    <div class="container">
                        <div class="portfolioContainer">
                            @if ($produits->count())
                                @foreach ($produits as $produit)
                                <div class="col-xs-6 col-sm-4 col-md-3 nature hsgrids"
                                style="padding-right: 5px;padding-left: 5px;">
                                <a class="g-list" href="{{ route('produit.show', $produit->id) }}">
                                    <div class="img-hover">
                                        <img src="storage/{{$produit->photo}}" alt="{{$produit->name}}"
                                            class="img-responsive">
                                    </div>
                                    <div class="info-gallery">
                                        <h3>JenGu - {{$produit->name}}</h3>
                                        <hr class="separator">
                                        <p>{{$produit->category}}</p>
                                        <div class="content-btn"><a href="{{ route('produit.show', $produit->id) }}"
                                                class="btn btn-primary">Commander maintenant</a></div>
                                        <div class="price"><span>&#36;</span><b>prix</b>{{$produit->price}}</div>
                                    </div>
                                </a>
                            </div>
                                @endforeach
                            @else
                                <p> Pas de produit</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @include('admin.layout.footer')
    </div>
@include('admin.layout.script')
@endsection
