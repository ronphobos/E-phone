<header id="header" class="header-v3">
    <nav class="flat-mega-menu">
        <label for="mobile-button"> <i class="fa fa-bars"></i></label>
        <input id="mobile-button" type="checkbox">

        <ul class="collapse">
            <li class="title">
                <a href="{{ route('admin.index') }}"><img src="{{asset('images/logo.png')}}"></a>
            </li>
            <li> <a href="javascript:void(0);">Voir les tables</a>
                <ul class="drop-down one-column hover-fade">
                    <li><a href="{{ route('admin.table') }}">Tables</a></li>
                    <li><a href="#">Aller sur le site</a></li>
                </ul>
            </li>
            <li> <a href="#">Produits</a>
                <ul class="drop-down one-column hover-fade">
                    <li><a href="{{ route('produit.index') }}">Voir tous les produits</a></li>
                    <li><a href="{{ route('produit.create') }}">Ajouter un produit</a></li>
                    <li><a href="{{ route('produit.modifie') }}">Modifier un produit</a></li>
                </ul>
            </li>
            <li> <a href="#">Categorie</a>
                <ul class="drop-down one-column hover-fade">
                    <li><a href="{{ route('categorie.index') }}">Voir tous les categories</a></li>
                    <li><a href="{{ route('categorie.create') }}">Ajouter un categorie</a></li>
                </ul>
            </li>
            <!-- <li> <a href="#">Home Needs</a>
                <ul class="drop-down one-column hover-fade">
                    <li><a href="servicesbycategory/19.html">Laundry</a></li>
                    <li><a href="servicesbycategory/4.html">Electrical</a></li>
                    <li><a href="servicesbycategory/8.html">Pest Control</a></li>
                    <li><a href="servicesbycategory/7.html">Carpentry</a></li>
                    <li><a href="servicesbycategory/3.html">Plumbing </a></li>
                    <li><a href="servicesbycategory/20.html">Painting</a></li>
                    <li><a href="servicesbycategory/17.html">Movers &amp; Packers</a></li>
                    <li><a href="servicesbycategory/5.html">Shower Filters </a></li>
                </ul>
            </li> -->

            <li class="login-form"> <a href="#" title="Register">Inscription</a></li>
            <li class="login-form"> <a href="#" title="Login">Connexion</a></li>
            <li class="search-bar">
            </li>
        </ul>
    </nav>
</header>
