<div class="header-holder">
    <header id="header">
        <div class="container">
            <div class="row">
                <div class="col-2 col-xl-3">
                    <div id="logo">
                        <a href="/">
                            <img src="{{ asset("/images/logo.jpg") }}" alt="" width="190" height="150">
                        </a>
                    </div>
                </div>
                <div class="col-10 col-xl-9">
                    <div class="row justify-content-end">
                        <div class="col-7 col-md-12">
                            <div class="top">
                                <ul class="mb-0 list-unstyled">
                                    <li>
                                        <a href="{{ route('contact.index') }}"><img src="{{ asset('/images/svg/icon-mail.svg') }}" alt="Ikonka adresu e-mail"> <b>biuro@apartamenty-wyzwolenia.pl</b></a>
                                    </li>
                                    <li class="ms-2 ms-md-4">
                                        <a href="tel:+48790201217"><img src="{{ asset('/images/svg/icon-phone.svg') }}" alt="Ikonka telefonu kontaktowego"> <b>+48 790 201 217</b></a>
                                    </li>
                                    <li class="ms-2 ms-md-4">
                                        <a href="https://www.facebook.com/Apartamenty-Wyzwolenia-105418095119828/?ref=page_internal" target="_blank"><img src="{{ asset('/images/svg/icon-facebook.svg') }}" alt="Ikonka Facebook"></a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/apartamenty_wyzwolenia/" target="_blank"><img src="{{ asset('/images/svg/icon-instagram.svg') }}" alt="Ikonka Instagram" class="m-0"></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-5 col-md-12">
                            <nav>
                                <ul class="list-unstyled mb-0 row">
                                    <li><a href="/">Strona główna</a></li>
                                    <li class="{{ Route::is('investment') ? 'active' : '' }}"><a href="{{ route('investment') }}">Mieszkania / Lokal użytkowy</a></li>
                                    <li class="{{ Route::is('location') ? 'active' : '' }}"><a href="{{ route('location') }}">Lokalizacja</a></li>
                                    <li class="{{ Route::is('gallery') ? 'active' : '' }}"><a href="{{ route('gallery') }}">Galeria</a></li>
                                    <li class="{{ Route::is('loan') ? 'active' : '' }}"><a href="{{ route('loan') }}">Zapytaj o kredyt</a></li>
                                    <li class="{{ Route::is('contact.index') ? 'active' : '' }}"><a href="{{ route('contact.index') }}">Kontakt</a></li>
                                </ul>
                            </nav>
                            <div id="triggermenu" class="d-block d-lg-none"><i class="las la-bars"></i> MENU</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
</div>