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

                    <input type="text" id="search" name="search" placeholder="Que recherchez vous?"
                        class="form-control" onfocus="" autocomplete="off">

                    <div id="search_list"></div>

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
        </section>
        @include('admin.layout.footer')
    </div>



   @include('admin.layout.script')
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js" integrity="sha512-2rNj2KJ+D8s1ceNasTIex6z4HWyOnEYLVC3FigGOmyQCZc2eBXKgOxQmo3oKLHyfcj53uz4QMsRCWNbLd32Q1g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   <script>
       $(document).ready(function(){
        $('#search').on('keyup', function(){
            var query = $(this).val();
            $.ajax({
                url:"/search",
                type:"GET",
                data:{'search:'query},
                success:function(data){
                    $('#search_list').html(data);
                }
        });
        // fin de l'appel ajax
       });
     });
   </script>

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
