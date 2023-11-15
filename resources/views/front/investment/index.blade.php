@extends('layouts.page')

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
                        <h2>Nowe mieszkania na sprzedaż - Apartamenty Wyzwolenia </h2>
                        <p><b>W odległości zaledwie 5 minut pieszo od Starego Miasta powstaje kameralny 8-piętrowy budynek Apartamenty Wyzwolenia. Ta wyjątkowa lokalizacja, która łączy cechy nowego mieszkania w cichej okolicy z dostępem do pełnej infrastruktury.
                            </b></p>
                        <p>&nbsp;</p>
                        <p>Bliskość Starego Miasta to niezależność i komfort, który otwiera dla mieszkańców Apartamentów Wyzwolenia dostęp do szerokiej oferty miasta. Bogaty repertuar Teatru Jaracza, Filharmonii, czy klimatyczne restauracje, kina i kawiarnie, to tylko niektóre z okolicznych atrakcji.</p>
                        <a href="{{ route('plan') }}" class="bttn mt-4 mt-md-5">Zobacz mieszkania</a>
                    </div>
                </div>
                <div class="col-12 col-lg-5 d-none d-lg-flex align-items-center mt-5 mt-lg-0">
                    <div>
                        <img src="{{ asset('/images/homepage-investor.jpg') }}" alt="" width="770" height="770">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-12 col-lg-9">
                    <img src="{{ asset('/images/homepage-investment.jpg') }}" alt="" width="990" height="557">
                </div>
            </div>

            <div class="row pt-5">
                <div class="col-12 text-center">
                    <img src="{{ asset('/images/svg/header-deco.svg') }}" alt="" width="99" height="17" class="m-auto mb-3">
                    <h2>Mieszkania w Olsztynie na sprzedaż <br>- Apartamenty Wyzwolenia</h2>
                </div>
                <div class="col-12 col-md-6">
                    <p><b>Apartamenty Wyzwolenia oferują szeroki wybór nowych mieszkań od 1 do 4 pokoi o przemyślanych i funkcjonalnych rozkładach, w metrażach od 30,36 do 125,97 mkw. Każdy apartament wyposażony będzie w ponadnormatywne okna, duże balkony do …. mkw  i loggie do ….mkw, które pozwolą docenić walory widokowe otoczenia.</b></p>
                    <p>&nbsp;</p>
                    <p>Bezpieczeństwo w tym kameralnym budynku zapewni podgląd z kamer monitoringu. Uzupełnieniem komfortu mieszkańców Apartamentów Wyzwolenia będzie nowoczesna strefa fitness oraz wyjątkowa i kolorowa sala dla dzieci. Dodatkowo zaplanowane lokale usługowe mieszczące się na parterze budynku.
                    </p>
                </div>
                <div class="col-12 col-md-6">
                    <p>Apartamenty Wyzwolenia spełniają wszystkie normy ochrony środowiska Unii Europejskiej. Wszystkie tereny zielone zostaną zachowane, a części wspólne zasilać będą panele fotowoltaiczne. Projektanci zadbali o wszystkie detale inwestycji. Części wspólne Apartamentów Wyzwolenia utrzymane będą w duchu ponadczasowej elegancji.</p>
                    <p>&nbsp;</p>
                    <p>Niepowtarzalność tego budynku podkreślona będzie poprzez kontrastujące ze sobą zestawienia, stylowe detale i szlachetne materiały. Kamień, czy gres przełamane będą ciepłym odcieniem lameli.</p>
                    <a href="{{ route('plan') }}" class="bttn mt-4 mt-md-5">Zobacz mieszkania</a>
                </div>
            </div>
            <div class="row justify-content-center mt-0 mt-md-5 pt-5">
                <div class="col-12 col-lg-8 text-center">
                    <p><b>Wszystkie atuty tego kameralnego budynku oraz jego okolic sprawią, że Apartamenty Wyzwolenia będą najlepszym wyborem podczas poszukiwania nowego mieszkania w Olsztynie.</b></p>
                </div>
            </div>
        </div>
    </section>

@endsection
@push('scripts')
    <script type="text/javascript">

    </script>
@endpush
