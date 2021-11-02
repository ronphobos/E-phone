@extends('layout.header')

@section('users.faq')
    <div id="layout">
        @include('layout.info_head')
        <div class="section-title-01 honmob">
            <div class="bg_parallax image_02_parallax"></div>
            <div class="opacy_bg_02">
                <div class="container">
                    <h1>FAQ Questions</h1>
                    <div class="crumbs">
                        <ul>
                            <li><a href="{{ route('user.index') }}">Accueil</a></li>
                            <li>/</li>
                            <li>FAQ Questions</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <section class="content-central">
            <div class="semiboxshadow text-center">
                <img src="img/img-theme/shp.png" class="img-responsive" alt="">
            </div>
            <div class="content_info">
                <div class="container">
                    <div class="row" style="margin-top: -30px;">
                        <div class="titles">
                            <h2>FAQ <span>Questions</span></h2>
                            <i class="fa fa-plane"></i>
                            <hr class="tall">
                        </div>
                    </div>
                </div>
                <div class="container" style="margin-top: -70px;">
                    <div class="row padding-bottom">
                        <div class="col-md-12">
                            <div class="accrodation">
                                <span class="acc-trigger"><a href="#">Mision</a></span>
                                <div class="acc-container">
                                    <div class="content ptext">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore, quas expedita?
                                            Dolorem ipsum sapiente obcaecati rem omnis mollitia beatae sunt voluptatibus,
                                            vitae ex quas autem nihil sit dolores quis vel!.</p>
                                    </div>
                                </div>
                                <span class="acc-trigger active"><a href="#">Vision</a></span>
                                <div class="acc-container">
                                    <div class="content ptext">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum quasi quam perferendis
                                            earum eum hic magnam, quo ab nemo, magni soluta odit ipsam ea maiores quia reiciendis
                                            repudiandae sequi! Optio..</p>
                                    </div>
                                </div>
                                <span class="acc-trigger"><a href="#">Ce que nous offrons?</a></span>
                                <div class="acc-container">
                                    <div class="content ptext">
                                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veniam dicta eveniet
                                            consectetur ab enim impedit saepe laudantium deleniti recusandae molestiae eaque
                                            fuga doloremque ipsum excepturi, quae voluptatibus debitis magnam! Ea?.</p>
                                    </div>
                                </div>

                                <span class="acc-trigger"><a href="#">Ventes</a></span>
                                <div class="acc-container">
                                    <div class="content ptext">
                                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita veniam eius ut,
                                            impedit dolores aut delectus minima quas accusamus quidem nam eos voluptatum error
                                            distinctio et, perferendis esse reprehenderit molestias..</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content_info">
                <div class="skin_base paddings-mini color-white text-center">
                    <h2>Besoin d'aide? Appelez le +225 0504264931</h2>
                </div>
            </div>
        </section>
        @include('admin.layout.footer')
    </div>
   @include('admin.layout.script')
@endsection
