<?php
$linkComics = config('footerlist');

?>
<footer>
    <div id="backgroundFooter">
        <div class="container ctnFooter">
            <div class="listeFooter">
                <div class="section-ul">
                    <h3>DC COMICS</h3>
                    <ul class="listNavFooterComics">
                        @foreach ($linkComics['linksComics'] as $linkComic)
                            <li>{{ $linkComic }}</li>
                        @endforeach
                    </ul>
                    <h3>SHOP</h3>
                    <ul class="listNavFooterShop">
                        @foreach ($linkComics['linksShops'] as $linkShop)
                            <li>{{ $linkShop }}</li>
                        @endforeach
                    </ul>
                </div>
                <div>
                    <h3>DC</h3>
                    <ul class="listNavFooterDC">
                        @foreach ($linkComics['linksDC'] as $linkDC)
                            <li>{{ $linkDC }}</li>
                        @endforeach
                    </ul>
                </div>
                <div>
                    <h3>SITES</h3>
                    <ul class="listNavFooterSites">
                        @foreach ($linkComics['sites'] as $site)
                            <li>{{ $site }}</li>
                        @endforeach
                    </ul>
                </div>

                <div class="imgFooter">
                    <img src="{{ Vite::asset('../../public/dc-logo-bg.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>

    <div id="lastSection">
        <div class="container">
            <button>SIGN-UP NOW!</button>
            <nav>

                <h3>FOLLOW US</h3>
                <ul>
                    <li><a class="loghiSocial" href="#"><img
                                src="{{ Vite::asset('../../public/footer-facebook.png') }}" alt=""></a>
                    </li>
                    <li><a class="loghiSocial" href="#"><img
                                src="{{ Vite::asset('../../public/footer-twitter.png') }}" alt=""></a>
                    </li>
                    <li><a class="loghiSocial" href="#"><img
                                src="{{ Vite::asset('../../public/footer-youtube.png') }}" alt=""></a>
                    </li>
                    <li><a class="loghiSocial" href="#"><img
                                src="{{ Vite::asset('../../public/footer-pinterest.png') }}" alt=""></a>
                    </li>
                    <li><a class="loghiSocial" href="#"><img
                                src="{{ Vite::asset('../../public/footer-periscope.png') }}" alt=""></a>
                    </li>
                </ul>

            </nav>
        </div>
    </div>
</footer>
