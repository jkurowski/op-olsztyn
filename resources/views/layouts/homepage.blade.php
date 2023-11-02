<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    {!! settings()->get("scripts_head") !!}

    <title>{{ settings()->get("page_title") }}</title>

    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ settings()->get("page_description") }}">
    <meta name="robots" content="{{ settings()->get("page_robots") }}">
    <meta name="author" content="{{ settings()->get("page_author") }}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @stack('style')
</head>
<body class="{{ !empty($body_class) ? $body_class : '' }}">
{!! settings()->get("scripts_afterbody") !!}

@include('layouts.partials.header')

<div id="slider">
    <ul class="mb-0 list-unstyled">
        <li>
            <img src="{{ asset('../uploads/slider/slide-1.jpg') }}" alt="" width="1920" height="880">
            <div class="container">
                <div class="row">
                    <div class="col-6 position-relative d-flex align-items-center">
                        <div class="slider-apla">
                            <h1>Tu jest pięknie odwiedź nas!</h1>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt.</p>
                            <a href="" class="bttn">Zobacz więcej</a>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="671.5" height="707.61" viewBox="0 0 671.5 707.61">
                            <g id="Path_1600" data-name="Path 1600" transform="translate(0 -20.541)" fill="rgba(255,255,255,0.66)">
                                <path d="M671.5,20.541H0l.075,707.61,671.425-94.9Z" stroke="none"/>
                                <path d="M 1.0001220703125 21.5408935546875 L 1.07476806640625 726.9999389648438 L 670.5 632.37890625 L 670.5 21.5408935546875 L 1.0001220703125 21.5408935546875 M 0 20.5408935546875 L 671.5 20.5408935546875 L 671.5 633.2474975585938 L 0.07489013671875 728.1512451171875 L 0 20.5408935546875 Z" stroke="none" fill="rgba(255,255,255,0.5)"/>
                            </g>
                        </svg>
                    </div>
                </div>
            </div>
        </li>
    </ul>
</div>

<section class="">
    <div class="container">
        <div class="row">
            <div class="col-7">
                <div class="pe-5">
                    <img src="{{ asset('/images/svg/header-deco.svg') }}" alt="" width="99" height="17" class="mb-3">
                    <h2>Poczuj prywatność i komfort w kameralnym budynku na Wyzwolenia</h2>
                    <p><b>W ścisłym centrum blisko Starego Miasta Olsztyn powstają wysokiej klasy apartamenty w jednym, kameralnym budynku. To niezwykły projekt w segmencie premium. Wyjątkowe miejsce, inne od klasycznego nowego osiedla od dewelopera.</b></p>
                    <p>&nbsp;</p>
                    <p>Apartamenty Wyzwolenia zostały zaprojektowane z myślą o osobach, które marzą o  nowym mieszkaniu w Olsztynie, cenią mądre rozwiązania, szukają oryginalności oraz jakości wykonania, wykorzystają dostęp do pełnej infrastruktury i lubią żyć w centrum miasta.</p>
                    <p>&nbsp;</p>
                    <p>Twoimi bezpośrednimi sąsiadami będą jedynie mieszkańcy kamienic. Takie komfortowe poczucie prywatności i wyciszenia w centralnej części Olsztyna jest już właściwie niespotykane w ramach nowych projektów deweloperskich.</p>
                    <a href="" class="bttn mt-5">Kontakt z nami</a>
                </div>
            </div>
            <div class="col-5 d-flex align-items-center">
                <div>
                    <img src="{{ asset('/images/investment.jpg') }}" alt="" width="770" height="770">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="pt-0">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-9">
                <img src="{{ asset('/images/homepage-investment.jpg') }}" alt="" width="990" height="557">
            </div>
        </div>

        <div class="row pt-5">
            <div class="col-12 text-center">
                <img src="{{ asset('/images/svg/header-deco.svg') }}" alt="" width="99" height="17" class="m-auto mb-3">
                <h2>Inwestycja – idealna dla Ciebie</h2>
            </div>
            <div class="col-6">
                <p><b>Projekt zakłada budowę 7-piętrowego budynku o ciekawej, nowoczesnej kaskadowej bryle. W budynku powstaną łącznie 104 apartamenty oraz 2 lokale o charakterze usługowym. Każdy apartament dysponować będzie przestrzennym balkonem/loggią  do 16 mkw, tarasem do 90 mkw lub ogródkiem o powierzchni do 58 mkw. W inwestycji znajdować się będą komórki lokatorskie do 7mkw. Ceny apartamentów są uzależnione od kondygnacji, na której będą się znajdowały.</b></p>
                <p>&nbsp;</p>
                <p>Stylowe wykończenia części wspólnych z zastosowaniem naturalnego kamienia, oraz dekoracyjnych lameli ściennych – wprowadzają nowoczesność, funkcjonalność i komfort. Czystość formy, duże lustra oraz stonowane barwy dodadzą wnętrzom przestrzeni i światła.</p>
            </div>
            <div class="col-6">
                <p>Ponadstandardowa wysokość mieszkań i duże przeszklenia podniosą komfort użytkowania lokali. Przewidzieliśmy także miejsce rekreacji dla dorosłych i dzieci. Przyszli mieszkańcy budynku będą mogli korzystać z prywatnej strefy fitness oraz wewnętrznego kids playroomu.</p>
                <p>&nbsp;</p>
                <p>Miejsca parkingowe zaplanowano w dwukondygnacyjnej podziemnej hali garażowej, wyposażonej w instalację do ładowania samochodów elektrycznych. Cały teren osiedla będzie monitorowany.</p>
                <a href="" class="bttn mt-5">Zobacz więcej</a>
            </div>
        </div>
    </div>
</section>

<section class="features-bg">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <img src="{{ asset('/images/svg/header-deco.svg') }}" alt="" width="99" height="17" class="m-auto mb-3">
                <h2>Dlaczego Apartamenty Wyzwolenia</h2>
            </div>
        </div>
    </div>
</section>

<section id="circle-image">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <img src="{{ asset('/images/svg/header-deco.svg') }}" alt="" width="99" height="17" class="mb-3 m-auto">
                <h2>Atuty mieszkań</h2>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-8">
                <img src="{{ asset("/images/atuty-osiedla.jpg") }}" alt="" width="906" height="464">
            </div>
        </div>

        <div class="row circle-overlay">
            <div class="col-2 p-0">
                <div class="circle-box">
                    <div class="circle-box-icon">
                        <img src="{{ asset('/images/icons/icon-taras.png') }}" alt="" width="85" height="85">
                    </div>
                    <p>Przestrzenne balkony/loggie, tarasy i ogródki</p>
                </div>
            </div>
            <div class="col-2 p-0 mt-280">
                <div class="circle-box">
                    <div class="circle-box-icon">
                        <img src="{{ asset('/images/icons/icon-paint.png') }}" alt="" width="85" height="85">
                    </div>
                    <p>Ściany malowane <br>na biało</p>
                </div>
            </div>
            <div class="col-2 p-0 mt-430">
                <div class="circle-box">
                    <div class="circle-box-icon">
                        <img src="{{ asset('/images/icons/icon-door.png') }}" alt="" width="85" height="85">
                    </div>
                    <p>Drzwi <br>antywłamaniowe</p>
                </div>
            </div>
            <div class="col-2 p-0 mt-430">
                <div class="circle-box">
                    <div class="circle-box-icon">
                        <img src="{{ asset('/images/icons/icon-elevator.png') }}" alt="" width="85" height="85">
                    </div>
                    <p>Wysokość mieszkań <br>od 2,6m do 3m</p>
                </div>
            </div>
            <div class="col-2 p-0 mt-280">
                <div class="circle-box">
                    <div class="circle-box-icon">
                        <img src="{{ asset('/images/icons/icon-lightbulb.png') }}" alt="" width="85" height="85">
                    </div>
                    <p>Oświetlenie <br>na balkonach</p>
                </div>
            </div>
            <div class="col-2 p-0">
                <div class="circle-box">
                    <div class="circle-box-icon">
                        <img src="{{ asset('/images/icons/icon-balcony.png') }}" alt="" width="85" height="85">
                    </div>
                    <p>Balkony wykończone gresem</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="pt-0">
    <div class="container">
        <div class="row pt-5">
            <div class="col-12 text-center">
                <img src="{{ asset('/images/svg/header-deco.svg') }}" alt="" width="99" height="17" class="m-auto mb-3">
                <h2>Apartamenty Wyzwolenia lepszego adresu w Olsztynie nie znajdziesz</h2>
            </div>
            <div class="col-6">
                <p><b>Apartamenty Wyzwolenia znajdują się zaledwie 10 minut od wszystkiego, czego potrzebujesz. Na wyciągnięcie ręki masz pracę, naukę, handel, naturę, rozrywkę i kulturę.</b></p>
                <p>&nbsp;</p>
                <p>Wystarczy tu przyjechać, rozejrzeć się po okolicy, aby podjąć decyzje o zamieszkaniu pod tym adresem. By móc na co dzień spacerować lub biegać po największym lesie miejskim w Olsztynie lub udać się na przejażdżkę rowerową po najbardziej zielonej okolicy. Las Miejski oddalony jest zaledwie 15 minut piechotą od naszej inwestycji, a jego powierzchnia liczy łącznie ponad 1400 ha, z czego główny kompleks – około 1100 ha. Jest największym w Europie kompleksem leśnym położonym w granicach miasta.</p>
            </div>
            <div class="col-6">
                <p>Jednocześnie ta niezwykła lokalizacja jest świetnie skomunikowana z każdą inną częścią miasta. W promieniu kilkuset metrów dostępne są: szkoły, przedszkola, urzędy, galeria handlowa, przychodnia, czy kino. Nieopodal inwestycji mieści się kilka sklepów spożywczych – najbliższy jedynie 130 m od budynku. W pobliżu znajduje się także przychodnia i apteka.</p>
                <p>&nbsp;</p>
                <p>Przystanki komunikacji miejskiej w odległości 4 minut. Natomiast 5 minut spacerem dotrzesz do Starego Miasta i terenów zielonych wokół Zamku Kapituły Warmińskiej. Znajdują się tam zabytki architektoniczne, plac zabaw, fontanna i amfiteatr. Po drugiej stronie Rynku Starego Miasta zlokalizowany jest park Centralny, gdzie również można wypocząć blisko przyrody. Spacer tam zajmie jedyne 10 minut.</p>
                <p>&nbsp;</p>
                <p>To miejsce do życia, pracy, jak i spędzania czasu wolnego.</p>
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
                        <div class="dist-mark" style="height:240px">
                            <span>2 min</span>
                            <p>Park podzamcze, <br>LO ii</p>
                        </div>
                    </div>

                    <div class="distance dist-top" style="left:23%">
                        <div class="dist-mark" style="height:360px">
                            <span>4 min</span>
                            <p>Urząd miasta</p>
                        </div>
                    </div>

                    <div class="distance dist-top" style="left:39%">
                        <div class="dist-mark" style="height:240px">
                            <span>5 min</span>
                            <p>Kino awangarda</p>
                        </div>
                    </div>

                    <div class="distance dist-top" style="left:53%">
                        <div class="dist-mark" style="height:140px">
                            <span>7 min</span>
                            <p>Centrum <br>handlowe</p>
                        </div>
                    </div>

                    <div class="distance dist-top" style="left:74%">
                        <div class="dist-mark" style="height:360px">
                            <span>10 min</span>
                            <p>Park centralny</p>
                        </div>
                    </div>

                    <div class="distance dist-top" style="left:85%">
                        <div class="dist-mark" style="height:185px">
                            <span>15 min</span>
                            <p>Las miejski</p>
                        </div>
                    </div>

                    <!-- bottom distances -->
                    <div class="distance dist-bottom" style="left:5%">
                        <div class="dist-mark" style="height: 240px">
                            <span>2 min</span>
                            <p>Sklep <br>spożywczy</p>
                        </div>
                    </div>

                    <div class="distance dist-bottom" style="left:20%">
                        <div class="dist-mark" style="height: 485px">
                            <span>4 min</span>
                            <p class="big-p">Przystanek komunikacji <br>miejskiej (autobus, tramwaj)</p>
                        </div>
                    </div>

                    <div class="distance dist-bottom" style="left:33%">
                        <div class="dist-mark" style="height: 355px">
                            <span>4 min</span>
                            <p>Przedszkole</p>
                        </div>
                    </div>

                    <div class="distance dist-bottom" style="left:45%">
                        <div class="dist-mark" style="height: 220px">
                            <span>5 min</span>
                            <p>Stare Miasto <br>(restauracje, pub-y) </p>
                        </div>
                    </div>

                    <div class="distance dist-bottom" style="left:69%">
                        <div class="dist-mark" style="height: 415px">
                            <span>8 min</span>
                            <p>Szkoła podstawowa</p>
                        </div>
                    </div>

                    <div class="distance dist-bottom" style="left:81%">
                        <div class="dist-mark" style="height: 220px">
                            <span>10 min</span>
                            <p>Teatr im. stefana <br>jaracza</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="investor" class="dark-blue-bg">
    <div class="container">
        <div class="row">
            <div class="col-5 d-flex align-items-center">
                <div>
                    <img src="{{ asset('/images/homepage-investor.jpg') }}" alt="" width="770" height="770">
                </div>
            </div>
            <div class="col-7 ps-5">
                <div class="ps-5">
                    <img src="{{ asset('/images/svg/header-deco.svg') }}" alt="" width="99" height="17" class="mb-3">
                    <h2>EURO-BUILD</h2>
                    <p><b>To polska firma deweloperska realizująca inwestycje budowlane i mieszkaniowe. Od ponad 20-lat z sukcesem realizuje kolejne projekty między innymi w Mławie, Trójmieście, Olsztynie kształtując otaczającą nas rzeczywistość.</b></p>
                    <p>&nbsp;</p>
                    <p>Spółka z myślą o przyszłych mieszkańcach i ich potrzebach starannie wybiera położenie każdej inwestycji. Priorytetem jest budowanie komfortowych i bezpiecznych miejsc do życia i pracy. Gwarantując najwyższą jakość oraz terminowe odbiory lokali. Stawiamy na perfekcyjną obsługę naszych klientów, nie zapominając o odpowiedzialnej polityce ekologicznej.</p>
                    <p>&nbsp;</p>
                    <p>Troska o środowisko naturalne to ważny element w strategii działania naszej firmy. EURO-BILD stara się optymalizować zużycie surowców, wykorzystuje nowe technologie i wdraża energooszczędne rozwiązania. Dba, by komfort codziennego życia zapewniały klientom nie tylko wygody luksusowego mieszkania, ale także całego terenu inwestycji.</p>
                    <p>&nbsp;</p>
                    <p>Spółka posiada stabilne zaplecze finansowe, a podwykonawców wybiera tylko sprawdzonych.</p>
                    <a href="{{ route('contact.index') }}" class="bttn mt-5">Kontakt z nami</a>
                </div>
            </div>
        </div>
    </div>
</section>

@include('layouts.partials.footer')

@include('layouts.partials.cookies')

<!-- Styles -->
<link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('/css/styles.min.css') }}" rel="stylesheet">

<!-- jQuery -->
<script src="{{ asset('/js/jquery.min.js') }}" charset="utf-8"></script>
<script src="{{ asset('/js/bootstrap.bundle.min.js') }}" charset="utf-8"></script>
<script src="{{ asset('/js/app.min.js') }}" charset="utf-8"></script>

@if(settings()->get("popup_status") == 1)
    <div class="modal" tabindex="-1" id="popModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    {!! settings()->get("popup_text") !!}
                </div>
            </div>
        </div>
    </div>
@endif
<script type="text/javascript">
    $(document).ready(function(){

        @if(settings()->get("popup_status") == 1)
            const popModal = new bootstrap.Modal(document.getElementById('popModal'), {
                keyboard: false
            });
        @endif
        @if($popup == 1)
        popModal.show();
            setTimeout( function(){
                popModal.hide();
            }, {{ settings()->get("popup_timeout") }} );
        @endif
    });
    @if(session('success') || session('warning') || $errors->any())
    $(window).load(function() {
        const aboveHeight = $('header').outerHeight();
        $('html, body').stop().animate({
            scrollTop: $('.validateForm').offset().top-aboveHeight
        }, 1500, 'easeInOutExpo');
    });
    @endif

    $('#slider ul').responsiveSlides({

    })
</script>
{!! settings()->get("scripts_beforebody") !!}

</body>
</html>
