@extends('layouts.page', ['body_class' => 'contact-page'])

@section('meta_title', 'Kontakt')
@section('seo_title', $page->meta_title)
@section('seo_description', $page->meta_description)

@section('pageheader')
    @include('layouts.partials.page-header', ['page' => $page, 'header_file' => 'contact.jpg'])
@stop

@section('content')
    <div id="contact">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <img src="{{ asset('/images/svg/header-deco.svg') }}" alt="" width="99" height="17" class="m-auto mb-3">
                    <h1 class="h2">Kontakt</h1>
                </div>
                <div class="col-12 col-lg-8 col-xl-6 text-center">
                    <p><b>Masz pytanie? Napisz do nas!</b></p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-10">
                    <div class="contact-form">
                        <div class="row d-flex justify-content-center">
                            <div class="col-12 text-lato">
                                <h4>Formularz kontaktowy</h4>
                            </div>
                            <div class="col-12 mt-4">
                                @if (session('success'))
                                    <div class="alert alert-success border-0">
                                        {{ session('success') }}
                                    </div>
                                @endif
                                @if (session('warning'))
                                    <div class="alert alert-warning border-0">
                                        {{ session('warning') }}
                                    </div>
                                @endif
                                <form method="post" id="contact-form" action="" class="validateForm">
                                    {{ csrf_field() }}
                                    <div class="row">
                                        <div class="col-12 form-input">
                                            <label for="form_name">Imię i nazwisko <span class="text-danger">*</span></label>
                                            <input name="form_name" id="form_name" class="validate[required] form-control @error('form_name') is-invalid @enderror" type="text" value="{{ old('form_name') }}">

                                            @error('form_name')
                                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                            @enderror
                                        </div>
                                        <div class="col-12 col-md-4 form-input col-input-important">
                                            <label for="form_surnames">Nazwisko <span class="text-danger">*</span></label>
                                            <input name="form_surnames" id="form_surnames" class="form-control" type="text" value="{{ old('form_surname') }}">
                                        </div>
                                        <div class="col-12 col-md-6 form-input mt-5">
                                            <label for="form_email">Adres e-mail <span class="text-danger">*</span></label>
                                            <input name="form_email" id="form_email" class="validate[required] form-control @error('form_email') is-invalid @enderror" type="text" value="{{ old('form_email') }}">

                                            @error('form_email')
                                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                            @enderror
                                        </div>
                                        <div class="col-12 col-md-6 form-input mt-5">
                                            <label for="form_phone">Nr telefonu <span class="text-danger">*</span></label>
                                            <input name="form_phone" id="form_phone" class="validate[required] form-control @error('form_phone') is-invalid @enderror" type="text" value="{{ old('form_phone') }}">

                                            @error('form_phone')
                                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                            @enderror
                                        </div>
                                        <div class="col-12 mt-1 form-input mt-5">
                                            <label for="form_message">Wiadomość <span class="text-danger">*</span></label>
                                            <textarea rows="5" cols="1" name="form_message" id="form_message" class="validate[required] form-control @error('form_message') is-invalid @enderror">{{ old('form_message') }}</textarea>

                                            @error('form_message')
                                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                            @enderror
                                        </div>
                                        <div class="rodo-rules d-none">
                                            @foreach ($rules as $r)
                                                <div class="col-12 @error('rule_'.$r->id) is-invalid @enderror">
                                                    <div class="rodo-rule clearfix">
                                                        <input name="rule_{{$r->id}}" id="rule_{{$r->id}}" value="1" type="checkbox" @if($r->required === 1) class="validate[required]" @endif data-prompt-position="topLeft:0">
                                                        <label for="rule_{{$r->id}}" class="rules-text">
                                                            {!! $r->text !!}
                                                            @error('rule_'.$r->id)
                                                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                                            @enderror
                                                        </label>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="row row-form-submit">
                                        <div class="col-12 pt-3">
                                            <div class="input text-end">
                                                <input name="form_page" type="hidden" value="homepage">
                                                <script type="text/javascript">
                                                    document.write("<button class=\"bttn\" type=\"submit\">Wyślij wiadomość</button>");
                                                </script>
                                                <noscript>Do poprawnego działania, Java musi być włączona.</noscript>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <img src="{{ asset('/images/contact-person.png') }}" alt="" width="480" height="647">
                    </div>
                </div>
            </div>
        </div>

        <section class="pb-0">
            <div class="container">
                <div class="row pt-3 pt-xl-5 justify-content-center">
                    <div class="col-12 text-center">
                        <img src="{{ asset('/images/svg/header-deco.svg') }}" alt="" width="99" height="17" class="m-auto mb-3">
                        <h1 class="h2">Biuro sprzedaży</h1>
                    </div>
                </div>

                <div class="row justify-content-center pt-5 mt-2">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-12 col-md-8 order-2 order-md-1">
                                <div class="pt-4 pt-md-0 pe-0 pe-md-5">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2646.31152749308!2d20.47660066758571!3d53.77888600678762!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46e27ed16eb7b1f3%3A0x1f84b9f9e83d92a!2sWyzwolenia%206%2F1%2C%2010-106%20Olsztyn!5e0!3m2!1spl!2spl!4v1698924540281!5m2!1spl!2spl" width="100%" height="550" style="border:11px solid white;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
    </div>
@endsection
@push('scripts')
    <script src="{{ asset('js/validation.js') }}" charset="utf-8"></script>
    <script src="{{ asset('js/pl.js') }}" charset="utf-8"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $(".validateForm").validationEngine({
                validateNonVisibleFields: true,
                updatePromptsPosition:true,
                promptPosition : "topRight:-137px"
            });
        });
        @if (session('success') || session('warning') || $errors->any())
        $(window).load(function() {
            const aboveHeight = $('header').outerHeight();
            $('html, body').stop().animate({
                scrollTop: $('.validateForm').offset().top-aboveHeight
            }, 1500, 'easeInOutExpo');
        });
        @endif
    </script>
@endpush
