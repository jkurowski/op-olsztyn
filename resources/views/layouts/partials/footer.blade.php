<footer>
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-4 text-center text-sm-start mb-4 mb-sm-0">
                <div id="logo">
                    <a href="/">
                        <img src="{{ asset("/images/logo.jpg") }}" alt="" width="190" height="150">
                    </a>
                </div>
                <h4 class="text-gold mt-3 mt-sm-4">Godziny otwarcia biura</h4>
                <p>Poniedziałek - piątek: 09:30-17:00</p>
            </div>
            <div class="col-6 col-sm-4 d-none d-sm-block">
                <h4>Menu</h4>
                <ul class="mb-0 list-unstyled">
                    <li><a href="{{ route('investment') }}">Mieszkania / Lokal użytkowy</a></li>
                    <li><a href="{{ route('location') }}">Lokalizacja</a></li>
                    <li class="d-none"><a href="{{ route('gallery') }}">Galeria</a></li>
                    <li><a href="{{ route('loan') }}">Zapytaj o kredyt</a></li>
                    <li><a href="{{ route('contact.index') }}">Kontakt</a></li>
                </ul>
            </div>
            <div class="col-12 col-sm-4 text-center text-sm-start">
                <h4>Kontakt</h4>
                <p class="svg-icon"><img src="{{ asset('/images/svg/icon-mail.svg') }}" alt="Ikonka adresu e-mail"> <a href="mailto:biuro@apartamenty-wyzwolenia.pl"><b>biuro@apartamenty-wyzwolenia.pl</b></a></p>
                <p class="svg-icon"><img src="{{ asset('/images/svg/icon-phone.svg') }}" alt="Ikonka telefonu kontaktowego"> <a href="tel:+48790201217"><b>+48 790 201 217</b></a></p>
                <p class="svg-icon"><img src="{{ asset('/images/svg/icon-location.svg') }}" alt="Ikonka lokalizacji"> <b>ul. Wyzwolenia 6/1, 10-105 Olsztyn</b></p>
            </div>
        </div>

        <div class="row mt-3 mt-xl-5">
            <div class="col-12 text-center">
                <p class="svg-icon d-inline-flex me-3 me-md-5">
                    <img src="{{ asset('/images/svg/icon-instagram.svg') }}" alt="Ikonka Instagram"> <a href="">apartamenty_wyzwolenia</a>
                </p>
                <p class="svg-icon d-inline-flex">
                    <img src="{{ asset('/images/svg/icon-facebook.svg') }}" alt="Ikonka Facebook"> <a href="">ApartamentyWyzwoleniaOlsztyn</a>
                </p>
            </div>
        </div>
    </div>
</footer>

<!-- Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bona+Nova:wght@400;700&family=Lato:wght@400;700&family=Oswald&display=swap" rel="stylesheet">
