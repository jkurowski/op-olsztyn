@extends('layouts.page')

@section('meta_title', $page->title)
@section('seo_title', $page->meta_title)
@section('seo_description', $page->meta_description)

@section('pageheader')
    @include('layouts.partials.page-header', ['page' => $page, 'header_file' => 'location.jpg'])
@stop

@section('content')
    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-7">
                    <div class="pe-5">
                        <img src="{{ asset('/images/svg/header-deco.svg') }}" alt="" width="99" height="17" class="mb-3">
                        <h2>Unikalna lokalizacja <br>- wyjątkowy projekt</h2>
                        <p><b>Wyjątkowa lokalizacja, w której powstają Apartamenty Wyzwolenia, daje ogrom możliwości na spędzanie wolnego czasu. Bliskość licznych terenów zielonych sprzyja aktywnemu spędzaniu czasu poza domem.</b></p>
                        <p>&nbsp;</p>
                        <p>Zaledwie 15 minut pieszo dojdziesz do największego Lasu Miejskiego w Olsztynie, a w ciągu 10 minut do Parku Centralnego. Do historycznego Starego Miasta dojdziesz w 5 minut piechotą by zobaczyć jeden z najbardziej charakterystycznych zabytków Olsztyna Wysoką Bramę, dalej plac, który powstał w 1378 roku, kościół Ewangelicko-Augsburski, pomnik Mikołaja Kopernika, katedra z XV wieku, czy zamek Kapituły Warmińskiej.</p>
                        <p>&nbsp;</p>
                        <p>Stare Miasto to także największe kulinarne centrum Olsztyna, wypełnione restauracjami, cukierniami i klubami. </p>
                        <a href="" class="bttn mt-5">Sprawdź</a>
                    </div>
                </div>
                <div class="col-5 d-flex align-items-center">
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
                <div class="col-10">
                    <div class="row">
                        <div class="col-8">
                            <div class="pe-5">
                                <img src="https://placehold.co/680x500" alt="">
                            </div>
                        </div>
                        <div class="col-4 d-flex align-items-center">
                            <div class="text-lato text-small">
                                <h3>BIURO SPRZEDAŻY</h3>
                                <p><a href=""><b>biuro@apartamenty-wyzwolenia.pl</b></a></p>
                                <p><a href=""><b>+48 790 201 217</b></a></p>
                                <p><b>ul. Wyzwolenia 6/1, 10-105 Olsztyn</b></p>
                                <p>&nbsp;</p>
                                <h4>GODZINY OTWARCIA BIURA</h4>
                                <p><b>poniedziałek - piątek: 09:30-17:00</b></p>
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

    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div id="distance">
                        <!-- upper distances -->
                        <div class="distance dist-top" style="left:2%">
                            <div class="dist-mark" style="height:240px">
                                <span></span>
                                <p>PARK PODZAMCZE, <br>LO ii</p>
                            </div>
                        </div>

                        <div class="distance dist-top" style="left:23%">
                            <div class="dist-mark" style="height:360px">
                                <span></span>
                                <p>Urząd miasta</p>
                            </div>
                        </div>

                        <div class="distance dist-top" style="left:39%">
                            <div class="dist-mark" style="height:240px">
                                <span></span>
                                <p>KINO AWANGARDA</p>
                            </div>
                        </div>

                        <div class="distance dist-top" style="left:53%">
                            <div class="dist-mark" style="height:140px">
                                <span></span>
                                <p>centrum <br>handlowe</p>
                            </div>
                        </div>

                        <div class="distance dist-top" style="left:74%">
                            <div class="dist-mark" style="height:360px">
                                <span></span>
                                <p>PARK CENTRALNY</p>
                            </div>
                        </div>

                        <div class="distance dist-top" style="left:85%">
                            <div class="dist-mark" style="height:185px">
                                <span></span>
                                <p>LAS MIEJSKI</p>
                            </div>
                        </div>

                        <!-- bottom distances -->
                        <div class="distance dist-bottom" style="left:5%">
                            <div class="dist-mark" style="height: 240px">
                                <span></span>
                                <p>Sklep <br>spożywczy</p>
                            </div>
                        </div>

                        <div class="distance dist-bottom" style="left:20%">
                            <div class="dist-mark" style="height: 485px">
                                <span></span>
                                <p class="big-p">Przystanek komunikacji <br>miejskiej (autobus, tramwaj)</p>
                            </div>
                        </div>

                        <div class="distance dist-bottom" style="left:33%">
                            <div class="dist-mark" style="height: 355px">
                                <span></span>
                                <p>PRZEDSZKOLE</p>
                            </div>
                        </div>

                        <div class="distance dist-bottom" style="left:45%">
                            <div class="dist-mark" style="height: 220px">
                                <span></span>
                                <p>Stare Miasto <br>(restauracje, pub-y) </p>
                            </div>
                        </div>

                        <div class="distance dist-bottom" style="left:69%">
                            <div class="dist-mark" style="height: 415px">
                                <span></span>
                                <p>SZKOŁA PODSTAWOWA</p>
                            </div>
                        </div>

                        <div class="distance dist-bottom" style="left:81%">
                            <div class="dist-mark" style="height: 220px">
                                <span></span>
                                <p>teatr im. stefana <br>jaracza</p>
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
