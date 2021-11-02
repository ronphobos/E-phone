<footer id="footer" class="footer-v1">

    <div class="footer-down">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <ul class="nav-footer">
                        <li><a href="{{ route('user.a_propos') }}">A PROPOS DE NOUS</a> </li>
                        <li><a href="{{ route('user.contact') }}">CONTACTEZ NOUS</a></li>
                        <li><a href="{{ route('user.faq') }}">FAQ</a></li>
                        <li><a href="{{ route('user.termes') }}">TERMES ET CONDITIONS</a></li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <p class="text-xs-center crtext">&copy; {{ date('Y') }} JenGu. Tous droits réservés.</p>
                </div>
            </div>
        </div>
    </div>
</footer>
