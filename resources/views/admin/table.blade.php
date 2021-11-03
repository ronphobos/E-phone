@extends('admin.layout.header')
@section('container.tables')

    <div id="layout">
        <div class="info-head">
            <div class="container">

            </div>
        </div>
        @include('admin.layout.navbar')

        <div class="section-title-01 honmob">
            <div class="bg_parallax image_02_parallax"></div>
            <div class="opacy_bg_02">
                <div class="container">
                    <h1>Toutes les tables</h1>
                    @if (Session('message'))
                    <div class="alert alert-warning" role="alert">
                        {{ session('message') }}
                    </div>
                @endif
                    <div class="crumbs">
                        <ul>
                            <li><a href="{{ route('admin.index') }}">Accueil</a></li>
                            <li>/</li>
                            <li>tables</li>
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
                            <h2>Toute les <span>Tables</span> de la base de données</h2>
                            <i class="fa fa-plane"></i>
                            <hr class="tall">
                        </div>
                    </div>
                </div>
                <div class="container" style="margin-top: -70px;">
                    <div class="row padding-bottom">
                        <div class="col-md-12">
                            {{-- Admins --}}
                            <div class="accrodation">
                                <span class="acc-trigger"><a href="#"><span style="color: blue;">{{$admins->count()}}</span> - Admin</a></span>

                                <div class="acc-container">
                                    <div class="content ptext">
                                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                            <tr>
                                                <th>Nom</th>
                                                <th>Prénom</th>
                                                <th>e-mail</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>

                                            <tbody>
                                                @if ($admins->count())
                                                @foreach ($admins as $admin)
                                                <tr>
                                                    <td>{{ $admin->name }}</td>
                                                    <td>{{ $admin->lastname }}</td>
                                                    <td>{{ $admin->email }}</td>
                                                    <td>
                                                        <div class="btn-group" role="group" aria-label="Basic example">
                                                            <a type="button" class="btn btn-primary"
                                                                {{-- href="{{ route('admin.edit', $admin->id)}}" --}}
                                                            data-toggle="tooltip" data-placement="left" data-original-title="Modifier">
                                                                <i class="fa fas fa-edit"></i>
                                                            </a>
                                                            <a type="button" class="btn btn-danger"
                                                            {{-- href="{{ route('admin.destroy', $admin->id)}}" --}}
                                                            data-toggle="tooltip" data-placement="right" data-original-title="Supprimer">
                                                                <i class="fa fas fa-trash"></i>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                                @else
                                                    <p> Il n'ya aucun admin!</p>
                                                @endif
                                            </tbody>
                                        </table>
                                </div>

                            </div>
                            {{-- users --}}
                            <div class="accrodation">
                                <span class="acc-trigger"><a href="#"><span style="color: blue;">{{$users->count()}}</span> - Utilisateurs</a></span>

                                <div class="acc-container">
                                    <div class="content ptext">
                                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                            <tr>
                                                <th>Nom</th>
                                                <th>Prénom</th>
                                                <th>e-mail</th>
                                                <th>phone</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>

                                            <tbody>
                                                @if ($users->count())
                                                @foreach ($users as $user)
                                                <tr>
                                                    <td>{{ $user->name }}</td>
                                                    <td>{{ $user->last_name }}</td>
                                                    <td>{{ $user->email }}</td>
                                                    <td>{{ $user->phone }}</td>
                                                    <td>
                                                        <div class="btn-group" role="group" aria-label="Basic example">
                                                            <a type="button" class="btn btn-primary"
                                                                {{-- href="{{ route('user.edit', $user->id)}}" --}}
                                                            data-toggle="tooltip" data-placement="left" data-original-title="Modifier">
                                                                <i class="fa fas fa-edit"></i>
                                                            </a>
                                                            <a type="button" class="btn btn-danger"
                                                            {{-- href="{{ route('user.destroy', $user->id)}}" --}}
                                                            data-toggle="tooltip" data-placement="right" data-original-title="Supprimer">
                                                                <i class="fa fas fa-trash"></i>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                                @else
                                                    <p> Il n'ya aucun utilisateur!</p>
                                                @endif
                                            </tbody>
                                        </table>
                                </div>

                            </div>
                            {{-- Produit --}}
                            <div class="accrodation">
                                <span class="acc-trigger"><a href="#"> <span style="color: blue">{{$produits->count()}}</span> - Produit</a></span>

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
                            {{-- Categorie --}}
                            <div class="accrodation">
                                <span class="acc-trigger"><a href="#"><span style="color: blue">{{$categories->count()}}</span> - Catégorie</a></span>

                                <div class="acc-container">
                                    <div class="content ptext">
                                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                            <tr>
                                                <th>Nom de la catégorie</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>

                                            <tbody>
                                                @if ($categories->count())
                                                @foreach ($categories as $categorie)
                                                <tr>

                                                    <td style="color:blue;">{{ $categorie->name }}</td>
                                                    <td>
                                                        <div class="btn-group" role="group" aria-label="Basic example">
                                                            <a type="button" class="btn btn-primary"
                                                                href="{{ route('categorie.edit', $categorie->id)}}"
                                                            data-toggle="tooltip" data-placement="left" data-original-title="Modifier">
                                                                <i class="fa fas fa-edit"></i>
                                                            </a>
                                                            <a type="button" class="btn btn-danger"
                                                            href="{{ route('categorie.destroy', $categorie->id)}}"
                                                            data-toggle="tooltip" data-placement="right" data-original-title="Supprimer">
                                                                <i class="fa fas fa-trash"></i>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                                @else
                                                    <p> Il n'ya aucune catégorie!</p>
                                                @endif
                                            </tbody>
                                        </table>
                                </div>

                            </div>
                            {{-- Message --}}
                            <div class="accrodation">
                                <span class="acc-trigger"><a href="#"><span style="color: blue">{{$commandes->count()}}</span> - Commandes</a></span>
                                <div class="acc-container">
                                    <div class="content ptext">
                                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                            <tr>
                                                <th>Photo du produit</th>
                                                <th>Nom du produit</th>
                                                <th>prix</th>
                                                <th>quantité</th>
                                                <th>Remise</th>
                                                <th>Mode de paiement</th>
                                                <th>Nom du client</th>
                                                <th>email du client</th>
                                                <th>Numéro du client</th>
                                                <th>Adresse du client</th>
                                                <th>Temps de commande</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>

                                            <tbody>
                                                @if ($commandes->count())
                                                @foreach ($commandes as $commande)
                                                <tr>
                                                    <td style="color:blue;"> <img src="/storage/{{ $commande->photo_product }}" style="height: 50px; width:40px;;"></td>
                                                    <td style="color:blue;">{{ $commande->name_product }}</td>
                                                    <td style="color:blue;">{{ $commande->prix_product }}</td>
                                                    <td style="color:blue;">{{ $commande->quantite_product }}</td>
                                                    <td style="color:blue;">{{ $commande->remise_product }}</td>
                                                    <td style="color:blue;">{{ $commande->mode_payment }}</td>
                                                    <td style="color:blue;">{{ $commande->name_client }}</td>
                                                    <td style="color:blue;">{{ $commande->email_client }}</td>
                                                    <td style="color:blue;">{{ $commande->phone_client }}</td>
                                                    <td style="color:blue;">{{ $commande->adresse_user }}</td>
                                                    <td style="color:blue;">{{ $commande->created_at->diffForHumans() }}</td>
                                                    <td>
                                                        <div class="btn-group" role="group" aria-label="Basic example">
                                                            <a type="button" class="btn btn-danger"
                                                            href="{{ route('order.destroy', $commande->id)}}"
                                                            data-toggle="tooltip" data-placement="right" data-original-title="Supprimer">
                                                                <i class="fa fas fa-trash"></i>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                                @else
                                                    <p> Il n'ya aucune commande!</p>
                                                @endif
                                            </tbody>
                                        </table>
                                </div>

                            </div>
                            {{-- Commandes --}}
                            <div class="accrodation">
                                <span class="acc-trigger"><a href="#"><span style="color: blue">{{$messages->count()}}</span> - Message réçus</a></span>
                                <div class="acc-container">
                                    <div class="content ptext">
                                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                            <tr>
                                                <th>Nom de l'envoyeur</th>
                                                <th>Corps du message</th>
                                                <th>Date d'envoie</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>

                                            <tbody>
                                                @if ($messages->count())
                                                @foreach ($messages as $message)
                                                <tr>

                                                    <td style="color:blue;">{{ $message->name }}</td>
                                                    <td style="color:blue;">{{ $message->message }}</td>
                                                    <td style="color:blue;">{{ $message->created_at->diffForHumans() }}</td>
                                                    <td>
                                                        <div class="btn-group" role="group" aria-label="Basic example">
                                                            <a type="button" class="btn btn-danger"
                                                            href="{{ route('message.destroy', $message->id)}}"
                                                            data-toggle="tooltip" data-placement="right" data-original-title="Supprimer">
                                                                <i class="fa fas fa-trash"></i>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                                @else
                                                    <p> Il n'ya aucun message!</p>
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
