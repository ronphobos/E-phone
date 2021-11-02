@extends('layout.header')

@section('users.a_propos')
    <div id="layout">
       @include('layout.info_head')
        <div class="section-title-01 honmob">
            <div class="bg_parallax image_02_parallax"></div>
            <div class="opacy_bg_02">
                <div class="container">
                    <h1>A propos de nous</h1>
                    <div class="crumbs">
                        <ul>
                            <li><a href="{{ route('user.index') }}">Accueil</a></li>
                            <li>/</li>
                            <li>Propos de nous</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <section class="content-central">
            <div class="semiboxshadow text-center">
                <img src="assets/img/img-theme/shp.png" class="img-responsive" alt="">
            </div>
            <div class="content_info">
                <div class="skin_base">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="services-lines-info padding-sides color-white">
                                <h2>MEMBRES DE L'EQUIPE</h2>
                                <p class="lead">
                                    je suis...
                                    <span class="line"></span>
                                </p>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe similique
                                    commodi quasi accusantium odio at, sit nemo amet eos quo, recusandae error.
                                    Suscipit at itaque perferendis beatae sit quasi possimus..</p>
                                <br>
                                <a href="#" class="btn btn-primary">Plus de Details</a>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="row">
                                <div id="team-carousel-02">
                                    <div class="item-team-01">
                                        <img src="assets/img/team/1.jpg" alt="">
                                        <div class="info-team">
                                            <h4>Sidibé Arouna
                                                <span>Développeur de JenGu</span>
                                            </h4>
                                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Porro,
                                                nihil. Fugiat, velit impedit. Sed iste assumenda quisquam commodi libero.
                                                Excepturi fuga aliquid ea laboriosam recusandae doloremque molestiae? A, incidunt omnis..</p>
                                            <ul class="social-team">
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="item-team-01">
                                        <img src="assets/img/team/2.jpg" alt="">
                                        <div class="info-team">
                                            <h4>Sidibé Arouna
                                                <span>Développeur de JenGu</span>
                                            </h4>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, perferendis saepe fugiat
                                                quam ab placeat expedita animi cum qui cumque exercitationem vero, libero aspernatur iure
                                                amet neque quos quidem atque?.</p>
                                            <ul class="social-team">
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="item-team-01">
                                        <img src="assets/img/team/3.jpg" alt="">
                                        <div class="info-team">
                                            <h4>Sidibé Arouna
                                                <span>Développeur de JenGu</span>
                                            </h4>
                                            <p>......................</p>
                                            <ul class="social-team">
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="item-team-01">
                                        <img src="assets/img/team/4.jpg" alt="">
                                        <div class="info-team">
                                            <h4>Sidibé Arouna
                                                <span>Développeur de JenGu</span>
                                            </h4>
                                            <p>.........................</p>
                                            <ul class="social-team">
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content_info">
                <div class="paddings">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <h3>Quelques mot à propos de nous!</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum nostrum ducimus
                                    similique recusandae nam maiores voluptatibus quidem voluptatum ipsum, earum,
                                    laborum facilis aspernatur expedita nisi neque ab non incidunt eum!</p>
                                <h3>En quoi sommes-nous différents?</h3>
                                <div class="row">
                                    <div class="col-md-6">
                                        <ul class="list-styles">
                                            <li><i class="fa fa-check"></i> <a href="#">World Travel</a></li>
                                            <li><i class="fa fa-check"></i> <a href="#">First Class Flights</a></li>
                                            <li><i class="fa fa-check"></i> <a href="#">5 Star Accommodations</a></li>
                                            <li><i class="fa fa-check"></i> <a href="#">Inclusive Packages</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <ul class="list-styles">
                                            <li><i class="fa fa-check"></i> <a href="#">Latest Model Vehicles</a></li>
                                            <li><i class="fa fa-check"></i> <a href="#">Best Price Guarantee</a></li>
                                            <li><i class="fa fa-check"></i> <a href="#">Great Experience</a></li>
                                            <li><i class="fa fa-check"></i> <a href="#">Great Travel Theme</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div id="single-carousel">
                                    <div class="img-hover">
                                        <div class="overlay"> <a href="img/gallery-2/1.jpg" class="fancybox"><i
                                                    class="fa fa-plus-circle"></i></a></div>
                                        <img src="assets/img/gallery-2/1.jpg" alt="" class="img-responsive">
                                    </div>
                                    <div class="img-hover">
                                        <div class="overlay"> <a href="img/gallery-2/2.jpg" class="fancybox"><i
                                                    class="fa fa-plus-circle"></i></a></div>
                                        <img src="assets/img/gallery-2/2.jpg" alt="" class="img-responsive">
                                    </div>
                                    <div class="img-hover">
                                        <div class="overlay"> <a href="img/gallery-2/3.jpg" class="fancybox"><i
                                                    class="fa fa-plus-circle"></i></a></div>
                                        <img src="assets/img/gallery-2/3.jpg" alt="" class="img-responsive">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content_info overflow-hidde">
                <video class="bg_video" preload="auto" autoplay="autoplay" loop="" muted="" poster="img/slide/4.jpg"
                    data-setup="{}">
                    <source src="img/video/video.mp4" type="video/mp4">
                    <source src="img/video/video.webm" type="video/webm">
                </video>
                <div class="opacy_bg_02 padding-bottom">
                    <div class="container wow fadeInUp">
                        <div class="row text-center">
                            <div class="col-md-12">
                                <div class="container">
                                    <div class="row">
                                        <div class="titles">
                                            <h2><span>¿</span>Pourquoi <span>Commander</span> sur JenGu<span>?</span></h2>
                                            <i class="fa fa-plane"></i>
                                            <hr class="tall">
                                        </div>
                                    </div>
                                </div>
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Commodi ab at fugiat,
                                    laboriosam corrupti, adipisci modi blanditiis beatae fuga expedita quae reprehenderit,
                                    laborum error nesciunt eos obcaecati? Cupiditate, asperiores soluta?.</p>
                                <div class="row text-center padding-top-mini">
                                    <a href="#" class="btn btn-primary">Plus de Details</a>
                                    <a href="{{ route('user.produit.all') }}" class="btn btn-primary">Voir les produits</a>
                                </div>
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
</body>
@endsection
