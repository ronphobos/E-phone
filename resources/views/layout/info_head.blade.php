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

        <ul class="collapse">
            <li class="title">
                <a href="{{ route('user.index') }}"><img src="images/logo.png"></a>
            </li>
            <li> <a href="{{ route('user.index') }}">Accueil</a></li>
            <li> <a href="{{ route('user.produit.all') }}">Produits</a></li>
            <li> <a href="{{ route('user.a_propos') }}">A propos de nous</a></li>
            <li> <a href="{{ route('user.contact') }}">Contact</a></li>
            <li> <a href="{{ route('user.faq') }}">FAQ</a></li>
            {{-- <li> <a href="#">Special Services</a>
                <ul class="drop-down one-column hover-fade">
                    <li><a href="servicesbycategory/16.html">Document Services</a></li>
                    <li><a href="servicesbycategory/15.html">Cars &amp; Bikes</a></li>
                    <li><a href="servicesbycategory/17.html">Movers &amp; Packers </a></li>
                    <li><a href="servicesbycategory/18.html">Home Automation</a></li>
                </ul>
            </li> --}}
            @auth
            <li class="login-form"> <a style="color: blue;" href="#" title="Register">{{ Str::of(auth()->user()->name)->upper() }}</a></li>
            <li class="login-form"> <a href="{{ route('user.logout') }}" title="Logout">Déconnexion</a></li>
            <li class="search-bar">
            @endauth
            @guest
            <li class="login-form"> <a href="{{ route('user.register') }}" title="Register">Inscription</a></li>
            <li class="login-form"> <a href="{{ route('user.login') }}" title="Login">Connexion</a></li>
            <li class="search-bar">
            @endguest
            </li>
        </ul>
    </nav>
</header>
