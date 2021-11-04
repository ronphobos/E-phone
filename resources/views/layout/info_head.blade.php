<div class="info-head">
    @auth
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <ul class="visible-md visible-lg text-left">
                    <li><a href="tel: +225 0504264931"><i class="fa fa-phone"></i> +225 0504264931</a></li>
                    <li><a href="mailto:sidibearouna71@gmail.com"><i class="fa fa-envelope"></i>
                            sidibearouna71@gmail.com</a></li>
                </ul>
                <ul class="visible-xs visible-sm">
                    <li class="text-left"><a href="tel: +225 0504264931"><i class="fa fa-phone"></i>
                        +225 0504264931</a></li>
                    <li class="text-right"><a href="#"><i
                                class="fa fa-map-marker"></i> Abidjan, Côte d'Ivoire</a></li>
                </ul>
            </div>
            <div class="col-md-6">
                <ul class="visible-md visible-lg text-right">
                    <li><i class="fa fa-comment"></i> Live Chat</li>
                    <li><a href="#"><i class="fa fa-map-marker"></i> Abidjan,
                        Côte d'Ivoire</a></li>
                </ul>
            </div>
        </div>
    </div>
    @endauth
    @guest
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <ul class="visible-md visible-lg text-left">
                    <li><i class="fa fa-phone"></i> +225 0504264931</li>
                    <li><i class="fa fa-envelope"></i>
                            sidibearouna71@gmail.com</li>
                </ul>
                <ul class="visible-xs visible-sm">
                    <li class="text-left"><i class="fa fa-phone"></i>
                        +225 0504264931</li>
                    <li class="text-right"></i> Abidjan, Côte d'Ivoire</li>
                </ul>
            </div>
            <div class="col-md-6">
                <ul class="visible-md visible-lg text-right">
                    <li><i class="fa fa-comment"></i> Live Chat</li>
                    <li></i> Abidjan,
                        Côte d'Ivoire</li>
                </ul>
            </div>
        </div>
    </div>
    @endguest
</div>
<header id="header" class="header-v3">
    <nav class="flat-mega-menu">
        <label for="mobile-button"> <i class="fa fa-bars"></i></label>
        <input id="mobile-button" type="checkbox">
        @auth
        @if (Auth::user()->user_type === 'ADM')
        <ul class="collapse">
            <li class="title">
                <a href="{{ route('admin.index') }}"><img src="{{asset('images/logo.png')}}"></a>
            </li>
            <li> <a href="javascript:void(0);">Voir les tables</a>
                <ul class="drop-down one-column hover-fade">
                    <li><a href="{{ route('admin.table') }}">Tables</a></li>
                    <li><a href="{{ route('user.index') }}">Aller sur le site</a></li>
                </ul>
            </li>
            <li> <a href="#">Produits</a>
                <ul class="drop-down one-column hover-fade">
                    <li><a href="{{ route('produit.index') }}">Voir tous les produits</a></li>
                    <li><a href="{{ route('produit.create') }}">Ajouter un produit</a></li>

                </ul>
            </li>
            <li> <a href="#">Categorie</a>
                <ul class="drop-down one-column hover-fade">
                    <li><a href="{{ route('categorie.index') }}">Voir tous les categories</a></li>
                    <li><a href="{{ route('categorie.create') }}">Ajouter un categorie</a></li>
                </ul>
            </li>
            <li class="login-form"> <a href="#" style="color: red" title="Register">{{ Str::of(auth()->user()->name)->upper() }}</a></li>
            <li class="login-form"> <a href="{{ route('admin.logout') }}" title="Logout">Déconnexion</a></li>
            <li class="search-bar">
            </li>
        </ul>
        @else
        <ul class="collapse">
            <li> <a href="{{ route('user.index') }}">Accueil</a></li>
            <li> <a href="{{ route('user.produit.all') }}">Produits</a></li>
            <li> <a href="{{ route('user.a_propos') }}">A propos de nous</a></li>
            <li> <a href="{{ route('user.contact') }}">Contact</a></li>
            <li> <a href="{{ route('user.faq') }}">FAQ</a></li>
            <li class="login-form"> <a style="color: blue;" href="#" title="Register">{{ Str::of(auth()->user()->name)->upper() }}</a></li>
            <li class="login-form"> <a href="{{ route('user.logout') }}" title="Logout">Déconnexion</a></li>
            <li class="search-bar">
            </li>
        </ul>
        @endif
        @endauth
        <ul class="collapse">
            @guest
            <li class="title">
                <a href="{{ route('user.index') }}"><img src="images/logo.png"></a>
            </li>
            <li> <a href="{{ route('user.index') }}">Accueil</a></li>
            <li> <a href="{{ route('user.produit.all') }}">Produits</a></li>
            <li> <a href="{{ route('user.a_propos') }}">A propos de nous</a></li>
            <li> <a href="{{ route('user.contact') }}">Contact</a></li>
            <li> <a href="{{ route('user.faq') }}">FAQ</a></li>
            <li class="login-form"> <a href="{{ route('user.register') }}" title="Register">Inscription</a></li>
            <li class="login-form"> <a href="{{ route('user.login') }}" title="Login">Connexion</a></li>
            <li class="search-bar">
            @endguest
        </ul>
    </nav>
</header>
