<div class="header-holder">
    <header id="header">
        <div class="container">
            <div class="row">
                <div class="col-3">
                    <div id="logo">
                        <a href="/">
                            <img src="{{ asset("/images/logo.jpg") }}" alt="" width="190" height="150">
                        </a>
                    </div>
                </div>
                <div class="col-9">
                    <div class="row">
                        <div class="col-12">
                            <div class="top">

                            </div>
                        </div>
                        <div class="col-12">
                            <nav>
                                <ul class="list-unstyled mb-0 row">
                                    <li><a href="/">Strona główna</a></li>
                                    <li><a href="{{ route('investment') }}">Mieszkania / Lokal użytkowy</a></li>
                                    <li><a href="{{ route('location') }}">Lokalizacja</a></li>
                                    <li><a href="{{ route('gallery') }}">Galeria</a></li>
                                    <li><a href="{{ route('loan') }}">Zapytaj o kredyt</a></li>
                                    <li><a href="{{ route('contact.index') }}">Kontakt</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
</div>

<aside>
    <ul class="mb-0 list-unstyled socials">
        @if(settings()->get("social_facebook"))
        <li class="socials-fb"><a href="{{ settings()->get("social_facebook") }}" target="_blank" rel="nofollow" aria-label="Link do profilu Facebook"><i class="lab la-facebook-f"></i></a></li>
        @endif
        @if(settings()->get("social_youtube"))
        <li class="socials-yt"><a href="{{ settings()->get("social_youtube") }}" target="_blank" rel="nofollow" aria-label="Link do profilu Youtube"><i class="lab la-youtube"></i></a></li>
        @endif
        @if(settings()->get("social_linkedin"))
        <li class="socials-linkedin"><a href="{{ settings()->get("social_linkedin") }}" target="_blank" rel="nofollow" aria-label="Link do profilu Linkedin"><i class="lab la-linkedin-in"></i></a></li>
        @endif
        @if(settings()->get("social_instagram"))
        <li class="socials-instagram"><a href="{{ settings()->get("social_instagram") }}" target="_blank" rel="nofollow" aria-label="Link do profilu Instagram"><i class="lab la-instagram"></i></a></li>
        @endif
        <li class="socials-contact">
            <a href="{{ route('contact.index') }}" aria-label="Link do strony Kontakt">
                <i class="las la-phone"></i>
            </a>
        </li>
    </ul>
</aside>