@extends('layouts.page', ['body_class' => 'no-bottom'])

@section('meta_title', $page->title)
@section('seo_title', $page->meta_title)
@section('seo_description', $page->meta_description)

@section('pageheader')
    @include('layouts.partials.page-header', ['page' => $page, 'header_file' => 'location.jpg'])
@stop

@section('content')
    <section class="pt-0">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-7">
                    <div class="pe-0 pe-lg-5">
                        <img src="{{ asset('/images/svg/header-deco.svg') }}" alt="" width="99" height="17" class="mb-3">
                        <h2>Unikalna lokalizacja <br>- wyjątkowy projekt</h2>
                        <p><b>Wyjątkowa lokalizacja, w której powstają Apartamenty Wyzwolenia, daje ogrom możliwości na spędzanie wolnego czasu. Bliskość licznych terenów zielonych sprzyja aktywnemu spędzaniu czasu poza domem.</b></p>
                        <p>&nbsp;</p>
                        <p>Zaledwie 15 minut pieszo dojdziesz do największego Lasu Miejskiego w Olsztynie, a w ciągu 10 minut do Parku Centralnego. Do historycznego Starego Miasta dojdziesz w 5 minut piechotą by zobaczyć jeden z najbardziej charakterystycznych zabytków Olsztyna Wysoką Bramę, dalej plac, który powstał w 1378 roku, kościół Ewangelicko-Augsburski, pomnik Mikołaja Kopernika, katedra z XV wieku, czy zamek Kapituły Warmińskiej.</p>
                        <p>&nbsp;</p>
                        <p>Stare Miasto to także największe kulinarne centrum Olsztyna, wypełnione restauracjami, cukierniami i klubami. </p>
                        <a href="{{ route('investment') }}" class="bttn mt-4 mt-md-5">Sprawdź</a>
                    </div>
                </div>
                <div class="col-12 col-lg-5 d-flex align-items-center mt-5 mt-lg-0">
                    <div>
                        <img src="{{ asset('/images/location.jpg') }}" alt="" width="770" height="770">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="row">
                        <div class="col-12 col-md-8 order-2 order-md-1">
                            <div class="pt-4 pt-md-0 pe-0 pe-md-5">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2646.31152749308!2d20.47660066758571!3d53.77888600678762!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46e27ed16eb7b1f3%3A0x1f84b9f9e83d92a!2sWyzwolenia%206%2F1%2C%2010-106%20Olsztyn!5e0!3m2!1spl!2spl!4v1698924540281!5m2!1spl!2spl" width="100%" height="550" style="border:11px solid white;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="iframe-map"></iframe>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 order-1 order-md-2 d-flex align-items-center text-center text-md-start">
                            <div class="text-lato text-small w-100">
                                <h3>BIURO SPRZEDAŻY</h3>
                                <p class="svg-icon"><img src="{{ asset('/images/svg/icon-mail.svg') }}" alt="Ikonka adresu e-mail"> <a href="mailto:biuro@apartamenty-wyzwolenia.pl"><b>biuro@apartamenty-wyzwolenia.pl</b></a></p>
                                <p class="svg-icon"><img src="{{ asset('/images/svg/icon-phone.svg') }}" alt="Ikonka telefonu kontaktowego"> <a href="tel:+48790201217"><b>+48 790 201 217</b></a></p>
                                <p class="svg-icon"><img src="{{ asset('/images/svg/icon-location.svg') }}" alt="Ikonka lokalizacji"> <b>ul. Wyzwolenia 6/1, 10-105 Olsztyn</b></p>
                                <p>&nbsp;</p>
                                <h4>GODZINY OTWARCIA BIURA</h4>
                                <p class="svg-icon"><img src="{{ asset('/images/svg/icon-time.svg') }}" alt="Ikonka adresu godzin otwarcia"> <b>poniedziałek - piątek: 09:30-17:00</b></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-3">
                    <div class="svg-box">
                        <div class="svg-box-content">
                            <div>
                                <div class="svg-box-icon">

                                </div>
                                <h2>Praca i Edukacja</h2>
                            </div>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="338.793" height="355.793" viewBox="0 0 338.793 355.793">
                            <defs>
                                <filter id="Path_1628" x="0" y="0" width="338.793" height="355.793" filterUnits="userSpaceOnUse">
                                    <feOffset dy="3" input="SourceAlpha"/>
                                    <feGaussianBlur stdDeviation="3" result="blur"/>
                                    <feFlood flood-opacity="0.161"/>
                                    <feComposite operator="in" in2="blur"/>
                                    <feComposite in="SourceGraphic"/>
                                </filter>
                            </defs>
                            <g transform="matrix(1, 0, 0, 1, 0, 0)" filter="url(#Path_1628)">
                                <g id="Path_1628-2" data-name="Path 1628" transform="translate(9 -14.54)" fill="#fff">
                                    <path d="M0,20.541H320.793l-.036,337.793L0,313.029Z" stroke="none"/>
                                    <path d="M 0.999969482421875 21.5408935546875 L 0.999969482421875 312.1604614257812 L 319.7575073242188 357.1822509765625 L 319.7930908203125 21.5408935546875 L 0.999969482421875 21.5408935546875 M -3.0517578125e-05 20.5408935546875 L 320.7931823730469 20.5408935546875 L 320.7573852539062 358.3334045410156 L -3.0517578125e-05 313.0291442871094 L -3.0517578125e-05 20.5408935546875 Z" stroke="none" fill="rgba(255,255,255,0.5)"/>
                                </g>
                            </g>
                        </svg>
                    </div>
                </div>

                <div class="col-3">
                    <div class="svg-box">
                        <div class="svg-box-content">
                            <div>
                                <div class="svg-box-icon">

                                </div>
                                <h2>Sport i natura</h2>
                            </div>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="339" height="355.793" viewBox="0 0 339 355.793">
                            <defs>
                                <filter id="Path_1630" x="0" y="0" width="339" height="355.793" filterUnits="userSpaceOnUse">
                                    <feOffset dy="3" input="SourceAlpha"/>
                                    <feGaussianBlur stdDeviation="3" result="blur"/>
                                    <feFlood flood-opacity="0.161"/>
                                    <feComposite operator="in" in2="blur"/>
                                    <feComposite in="SourceGraphic"/>
                                </filter>
                            </defs>
                            <g transform="matrix(1, 0, 0, 1, 0, 0)" filter="url(#Path_1630)">
                                <g id="Path_1630-2" data-name="Path 1630" transform="translate(9 -14.54)" fill="#fff">
                                    <path d="M321,20.541H0L.036,358.333,321,313.029Z" stroke="none"/>
                                    <path d="M 1.000091552734375 21.5408935546875 L 1.03570556640625 357.182373046875 L 320 312.160400390625 L 320 21.5408935546875 L 1.000091552734375 21.5408935546875 M 0 20.5408935546875 L 321 20.5408935546875 L 321 313.0291442871094 L 0.03582763671875 358.3334045410156 L 0 20.5408935546875 Z" stroke="none" fill="rgba(255,255,255,0.5)"/>
                                </g>
                            </g>
                        </svg>
                    </div>
                </div>

                <div class="col-3">
                    <div class="svg-box">
                        <div class="svg-box-content">
                            <div>
                                <div class="svg-box-icon">

                                </div>
                                <h2>Kultura i rozrywka</h2>
                            </div>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="338.793" height="355.793" viewBox="0 0 338.793 355.793">
                            <defs>
                                <filter id="Path_1628" x="0" y="0" width="338.793" height="355.793" filterUnits="userSpaceOnUse">
                                    <feOffset dy="3" input="SourceAlpha"/>
                                    <feGaussianBlur stdDeviation="3" result="blur"/>
                                    <feFlood flood-opacity="0.161"/>
                                    <feComposite operator="in" in2="blur"/>
                                    <feComposite in="SourceGraphic"/>
                                </filter>
                            </defs>
                            <g transform="matrix(1, 0, 0, 1, 0, 0)" filter="url(#Path_1628)">
                                <g id="Path_1628-2" data-name="Path 1628" transform="translate(9 -14.54)" fill="#fff">
                                    <path d="M0,20.541H320.793l-.036,337.793L0,313.029Z" stroke="none"/>
                                    <path d="M 0.999969482421875 21.5408935546875 L 0.999969482421875 312.1604614257812 L 319.7575073242188 357.1822509765625 L 319.7930908203125 21.5408935546875 L 0.999969482421875 21.5408935546875 M -3.0517578125e-05 20.5408935546875 L 320.7931823730469 20.5408935546875 L 320.7573852539062 358.3334045410156 L -3.0517578125e-05 313.0291442871094 L -3.0517578125e-05 20.5408935546875 Z" stroke="none" fill="rgba(255,255,255,0.5)"/>
                                </g>
                            </g>
                        </svg>
                    </div>
                </div>

                <div class="col-3">
                    <div class="svg-box">
                        <div class="svg-box-content">
                            <div>
                                <div class="svg-box-icon">

                                </div>
                                <h2>Komunikacja</h2>
                            </div>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="339" height="355.793" viewBox="0 0 339 355.793">
                            <defs>
                                <filter id="Path_1630" x="0" y="0" width="339" height="355.793" filterUnits="userSpaceOnUse">
                                    <feOffset dy="3" input="SourceAlpha"/>
                                    <feGaussianBlur stdDeviation="3" result="blur"/>
                                    <feFlood flood-opacity="0.161"/>
                                    <feComposite operator="in" in2="blur"/>
                                    <feComposite in="SourceGraphic"/>
                                </filter>
                            </defs>
                            <g transform="matrix(1, 0, 0, 1, 0, 0)" filter="url(#Path_1630)">
                                <g id="Path_1630-2" data-name="Path 1630" transform="translate(9 -14.54)" fill="#fff">
                                    <path d="M321,20.541H0L.036,358.333,321,313.029Z" stroke="none"/>
                                    <path d="M 1.000091552734375 21.5408935546875 L 1.03570556640625 357.182373046875 L 320 312.160400390625 L 320 21.5408935546875 L 1.000091552734375 21.5408935546875 M 0 20.5408935546875 L 321 20.5408935546875 L 321 313.0291442871094 L 0.03582763671875 358.3334045410156 L 0 20.5408935546875 Z" stroke="none" fill="rgba(255,255,255,0.5)"/>
                                </g>
                            </g>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="svg-box-tab">
                        <div class="svg-box-tab-icon"></div>
                        <h2>Kultura i rozrywka</h2>
                        <p><b>W odległości zaledwie 5 minut od inwestycji dojdziemy do terenów zielonych wokół Zamku Kapituły Warmińskiej. Znajdują się tu zabytki architektoniczne, plac zabaw, fontanna i amfiteatr. Spacerem około 10 minut możemy znaleźć się po drugiej stronie Rynku Starego Miasta, gdzie zlokalizowany jest park Centralny, o powierzchni blisko 13 hektarów.</b></p>
                        <p>&nbsp;</p>
                        <p>Przemyślana infrastruktura parku oferuje odwiedzającym wyjątkowe walory przyrodnicze i rekreacyjne. Znajdują się tutaj aż 4 mosty łączące brzegi Łyny, przystań kajakowa, a także przede wszystkim mnóstwo ścieżek rowerowych i pieszych. W pobliżu inwestycji znajduje się także największy Las Miejski w Olsztynie o powierzchni 1400 hektarów, w którym znajdują się liczne ścieżki rowerowe, biegowe, tory saneczkowe oraz przyrodnicze ścieżki edukacyjne.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="distance-bg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div id="distance">
                        <!-- upper distances -->
                        <div class="distance dist-top" style="left:2%">
                            <div class="dist-mark dist-mark-1" style="height:240px">
                                <span>2 min</span>
                                <p>Park podzamcze, <br>LO ii</p>
                            </div>
                        </div>

                        <div class="distance dist-top" style="left:23%">
                            <div class="dist-mark dist-mark-2" style="height:360px">
                                <span>4 min</span>
                                <p>Urząd miasta</p>
                            </div>
                        </div>

                        <div class="distance dist-top" style="left:39%">
                            <div class="dist-mark dist-mark-3" style="height:240px">
                                <span>5 min</span>
                                <p>Kino awangarda</p>
                            </div>
                        </div>

                        <div class="distance dist-top" style="left:53%">
                            <div class="dist-mark dist-mark-4" style="height:140px">
                                <span>7 min</span>
                                <p>Centrum <br>handlowe</p>
                            </div>
                        </div>

                        <div class="distance dist-top" style="left:74%">
                            <div class="dist-mark dist-mark-5" style="height:360px">
                                <span>10 min</span>
                                <p>Park centralny</p>
                            </div>
                        </div>

                        <div class="distance dist-top" style="left:85%">
                            <div class="dist-mark dist-mark-6" style="height:185px">
                                <span>15 min</span>
                                <p>Las miejski</p>
                            </div>
                        </div>

                        <!-- bottom distances -->
                        <div class="distance dist-bottom" style="left:5%">
                            <div class="dist-mark dist-mark-7" style="height: 240px">
                                <span>2 min</span>
                                <p>Sklep <br>spożywczy</p>
                            </div>
                        </div>

                        <div class="distance dist-bottom" style="left:20%">
                            <div class="dist-mark dist-mark-8" style="height: 485px">
                                <span>4 min</span>
                                <p class="big-p">Przystanek komunikacji <br>miejskiej (autobus, tramwaj)</p>
                            </div>
                        </div>

                        <div class="distance dist-bottom" style="left:33%">
                            <div class="dist-mark dist-mark-9" style="height: 355px">
                                <span>4 min</span>
                                <p>Przedszkole</p>
                            </div>
                        </div>

                        <div class="distance dist-bottom" style="left:45%">
                            <div class="dist-mark dist-mark-10" style="height: 220px">
                                <span>5 min</span>
                                <p>Stare Miasto <br>(restauracje, pub-y) </p>
                            </div>
                        </div>

                        <div class="distance dist-bottom" style="left:69%">
                            <div class="dist-mark dist-mark-11" style="height: 415px">
                                <span>8 min</span>
                                <p>Szkoła podstawowa</p>
                            </div>
                        </div>

                        <div class="distance dist-bottom" style="left:81%">
                            <div class="dist-mark dist-mark-12" style="height: 220px">
                                <span>10 min</span>
                                <p>Teatr im. stefana <br>jaracza</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script>

    </script>
@endpush
