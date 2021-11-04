@extends('layout.header')

@section('container.product')

    <div id="layout">
        <div class="info-head">
            <div class="container">

            </div>
        </div>
        @include('layout.info_head')

        <div class="section-title-01 honmob">
            <div class="bg_parallax image_02_parallax"></div>
            <div class="opacy_bg_02">
                <div class="container">
                    <h1>Tous les produits</h1>
                    <div class="crumbs">
                        <ul>
                            <li><a href="{{ route('admin.index') }}">Accueil</a></li>
                            <li>/</li>
                            <li>Produits</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <section class="content-central">
            <div class="content_info">
                <div class="container">
                    <div class="row" style="margin-top: -30px;">
                        <div class="titles">
                            <h2>Tous les <span>Produits</span></h2>
                            <i class="fa fa-plane"></i>
                            <hr class="tall">
                        </div>
                    </div>
                </div>
                <div class="container" style="margin-top: -70px;">
                    <div class="row padding-bottom">
                        <div class="col-md-12">
                            <div class="accrodation">
                                <span class="acc-trigger"><a href="#">Produit</a></span>
                                @if (Session('message'))
                                    <div class="alert alert-warning" role="alert">
                                        {{ session('message') }}
                                    </div>
                                @endif
                                <div class="acc-container">
                                    <div class="content ptext">
                                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                            <tr>
                                                <th>Photo</th>
                                                <th>Nom du produit</th>
                                                <th>Prix</th>
                                                <th>Description</th>
                                                <th>Catégorie</th>
                                                <th>Tags</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>

                                            <tbody>
                                                @if ($produits->count())
                                                @foreach ($produits as $produit)
                                                <tr>
                                                    <td><img src="/storage/{{ $produit->photo }}" style="height: 50px; width:30px;" alt="{{ $produit->name }}"></td>
                                                    <td>{{ $produit->name }}</td>
                                                    <td>{{ $produit->price }}</td>
                                                    <td>{{ $produit->description }}</td>
                                                    <td>{{ $produit->category }}</td>
                                                    <td>{{ $produit->mot_cle }}</td>
                                                    <td>
                                                        <div class="btn-group" role="group" aria-label="Basic example">
                                                            <a type="button" class="btn btn-primary"
                                                                href="{{ route('produit.edit', $produit->id)}}"
                                                            data-toggle="tooltip" data-placement="left" data-original-title="Modifier">
                                                                <i class="fa fas fa-edit"></i>
                                                            </a>
                                                            <a type="button" class="btn btn-danger"
                                                            href="{{ route('produit.destroy', $produit->id)}}"
                                                            data-toggle="tooltip" data-placement="right" data-original-title="Supprimer">
                                                                <i class="fa fas fa-trash"></i>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                                @else
                                                    <p> Il n'ya aucun produit!</p>
                                                @endif
                                            </tbody>
                                        </table>
                                </div>

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
