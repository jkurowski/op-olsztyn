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
                        <h2>Pomoc w finansowaniu</h2>
                        <p>Wspieramy naszych klientów w spełnianiu marzeń o własnym mieszkaniu, oferując im pomoc w uzyskaniu kredytu hipotecznego. Nasi eksperci w biurze dewelopera bezpłatnie pomagają klientom w uzyskaniu wszystkich informacji o zakupie nieruchomości.</p>
                        <p>&nbsp;</p>
                        <p>Na podstawie uzyskanych danych:</p>
                        <ul>
                            <li>weryfikujemy zdolność kredytową,</li>
                            <li>prezentujemy symulację ofert kredytowych banku, a także pełne koszty zakupu mieszkania oraz wysokość miesięcznych rat,</li>
                            <li>pomożemy skompletować potrzebną dokumentację i wypełnić wniosek kredytowy.</li>
                        </ul>
                        <p>&nbsp;</p>
                        <p>Spotkanie z doradcą kredytowym pomoże rozwiać wiele wątpliwości na temat zakupu nowego mieszkania na kredyt.</p>
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

    <section class="pt-0 pt-lg-5 pb-0 pb-lg-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10 col-xl-6 text-center">
                    <p><b>Nasze wsparcie to oszczędność czasu i pieniędzy. Nasze doświadczenie pomaga przejść przez proces szybko i skutecznie.</b></p>
                    <p>&nbsp;</p>
                    <p>Skorzystanie z pomocy eksperta kredytowego oznacza tylko jedną wizytą w banku – podczas podpisywania umowy kredytowej. Resztę formalności w procesie uzyskiwania finansowania wykonują eksperci kredytowi.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="circle-image">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <img src="{{ asset('/images/svg/header-deco.svg') }}" alt="" width="99" height="17" class="mb-3 m-auto">
                    <h2>Dlaczego warto?</h2>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">
                    <img src="{{ asset("/images/pomoc-w-kredytach.jpg") }}" alt="" width="906" height="464">
                </div>
            </div>

            <div class="row circle-overlay">
                <div class="col-6 col-sm-4 col-lg-2 p-0">
                    <div class="circle-box">
                        <div class="circle-box-icon">
                            <img src="{{ asset('/images/icons/icon-report.png') }}" alt="" width="85" height="85">
                        </div>
                        <p>Pomożemy uzyskać najkorzystniejszy kredyt z ofert ponad 20 anków</p>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-lg-2 p-0 mt-280">
                    <div class="circle-box">
                        <div class="circle-box-icon">
                            <img src="{{ asset('/images/icons/icon-procedures.png') }}" alt="" width="85" height="85">
                        </div>
                        <p>Tłumaczymy procedury bankowe i pomagamy przez nie przejść</p>
                    </div>
                </div>
                <div class="col-6 col-sm-4 p-0 mt-430">
                    <div class="circle-box">
                        <div class="circle-box-icon">
                            <img src="{{ asset('/images/icons/icon-documents.png') }}" alt="" width="85" height="85">
                        </div>
                        <p>Pomagamy skompletować dokumentację, nadzorujemy cały proces</p>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-lg-2 p-0 mt-280">
                    <div class="circle-box">
                        <div class="circle-box-icon">
                            <img src="{{ asset('/images/icons/icon-deal.png') }}" alt="" width="85" height="85">
                        </div>
                        <p>Przeprowadzimy negocjacje w banku</p>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-lg-2 p-0">
                    <div class="circle-box">
                        <div class="circle-box-icon">
                            <img src="{{ asset('/images/icons/icon-bank.png') }}" alt="" width="85" height="85">
                        </div>
                        <p>Wystarczy jedna wizyta w banku</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pb-0 pt-3 pt-sm-5">
        <div class="container">
            <div class="row d-none d-sm-flex">
                <div class="col-12">
                    <div id="loan-cta">
                        <img src="{{ asset("/images/kredyt-cta.jpg") }}" alt="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-6">
                    <div class="text-lato loan-cta-text">
                        <h2>Gotowe! Pozostało tylko odebrać klucze</h2>
                        <p>Nasi doradcy są do Twojej dyspozycji</p>
                        <a href="{{ route("contact.index") }}" class="bttn">Kontakt</a>
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
