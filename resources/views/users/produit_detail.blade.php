@include('layout.header')


    <div id="layout">
        @include('layout.info_head')
        <div class="section-title-01 honmob">
            <div class="bg_parallax image_01_parallax"></div>
            <div class="opacy_bg_02">
                <div class="container">
                    <h1>{{ $id->name }}</h1>
                    <div class="crumbs">
                        <ul>
                            <li><a href="{{ route('user.index') }}">Accueil</a></li>
                            <li>/</li>
                            <li>JenGu Service</li>
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
                <div class="paddings-mini">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 single-blog">
                                <div class="post-item">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="post-header">
                                                <div class="post-format-icon post-format-standard"
                                                    style="margin-top: -10px;">
                                                    <i class="fa fa-image"></i>
                                                </div>
                                                <div class="post-info-wrap">
                                                    <h2 class="post-title"><a href="#" title="Post Format: Standard"
                                                            rel="bookmark">JenGu {{ $id->name }}</a></h2>
                                                    <div class="post-meta" style="height: 10px;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div id="single-carousel">
                                                <div class="img-hover">
                                                    <img src="storage/{{$id->photo}}" alt="{{ $id->name }}"
                                                        class="img-responsive">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="post-content">
                                                <h3>{{ $id->name }}</h3>
                                                <p>{{ $id->description }}.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <aside class="widget" style="margin-top: 18px;">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">Détails de la commande</div>
                                        <div class="panel-body">
                                            <table class="table">
                                                <tr>
                                                    <td style="border-top: none;">Prix</td>
                                                    <td style="border-top: none;">{{ $id->price }} FCFA</td>
                                                </tr>
                                                <tr>
                                                    <td>Quntité</td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>Remise</td>
                                                    <td>0</td>
                                                </tr>
                                                <tr>
                                                    <td>Total</td>
                                                    <td><span>&#36;</span> {{ $id->price }}</td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="panel-footer">
                                            <form>
                                                <input type="submit" class="btn btn-primary" name="submit"
                                                    value=" Commander maintenant">
                                            </form>
                                        </div>
                                    </div>
                                </aside>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @include('admin.layout.footer')
    </div>
    @include('admin.layout.script')


