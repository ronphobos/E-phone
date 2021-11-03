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
                                    {{-- @foreach ($users as $user) --}}


                                    <form action="{{ route('order.store') }}" method="POST">
                                        @csrf
                                        <div class="panel panel-default">
                                            <div class="panel-heading">Détails de la commande</div>
                                            <div class="panel-body">
                                                <input type="hidden" name="name_product" value="{{ $id->name }}">
                                                <input type="hidden" name="prix_product" value="{{ $id->price }}">
                                                <input type="hidden" name="remise_product" value="0">
                                                <input type="hidden" name="photo_product" value="{{ $id->photo }}">
                                                @foreach ($users as $user)
                                                <input type="hidden" name="name_client" value="{{ $user->name }}">
                                                <input type="hidden" name="email_client" value="{{ $user->email }}">
                                                <input type="hidden" name="number_client" value="{{ $user->phone }}">
                                                @endforeach
                                                <table class="table">
                                                    <tr>
                                                        <td style="border-top: none;">Prix unitaire</td>
                                                        <td style="border-top: none;">{{ $id->price }} FCFA</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Remise</td>
                                                        <td>0</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Quantité</td>
                                                        <td><input type="number" class="form-control" autocomplete="off" id="route" name="quantite_product"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Mode de paiement</td>
                                                        <td><div class="form-group">
                                                            <select class="form-control" name="mode_payment" id="administrative_area_level_1">
                                                                <option value="cash">Cash</option>
                                                                <option value="mtn">MTN Money</option>
                                                            </select>
                                                        </div></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Adresse géolocalisation</td>
                                                        <td><input type="text" class="form-control" autocomplete="off" id="route" name="adresse_user"></td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <div class="panel-footer">
                                                @auth
                                                        <input type="submit" class="btn btn-primary" name="submit"
                                                            value="Effectuer la commande">

                                                @endauth
                                                @guest

                                                    <a href="{{ route('user.login') }}"  class="btn btn-primary" name="submit"
                                                        >Effectuer la commande </a>

                                                @endguest
                                            </div>
                                        </div>
                                    </form>
                                </aside>
                                {{-- @endforeach --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @include('admin.layout.footer')
    </div>
    @include('admin.layout.script')


