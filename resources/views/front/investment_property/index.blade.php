@extends('layouts.page', ['body_class' => 'property'])

@section('meta_title', $property->name)
@section('seo_title', $investment->name.' - '.$floor->name.' - '.$property->name)
@section('seo_description', $page->meta_description)

@section('pageheader')
    @include('layouts.partials.page-header', ['page' => $page, 'header_file' => 'contact.jpg'])
@stop

@section('content')

<div id="property">
    <div class="container">
        <div id="propertyNav" class="row d-none">
            <div class="col-12 col-sm-4">
                @if($prev) <a href="{{route('property', [$floor, $prev->id])}}" class="bttn">Poprzednie</a>@endif
            </div>
            <div class="col-12 col-sm-4">
                <a href="{{route('floor', $floor)}}" class="bttn">Plan piętra</a>
            </div>
            <div class="col-12 col-sm-4">
                @if($next) <a href="{{route('property', [$floor, $next->id])}}" class="bttn">Następne</a>@endif
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="property-desc">
                    <h1>{{ $property->name }}</h1>
                    <div class="room-status room-status-{{$property->status}}">
                        {{ roomStatus($property->status )}}
                    </div>
                    @if($property->price)
                        <h6 class="propertyPrice">@money($property->price)</h6>
                    @endif
                </div>
            </div>
            <div class="col-6">
                <div class="property-desc">
                    <ul class="list-unstyled mt-2">
                        <li class="property-feature">
                            <div>
                                <p>BUDYNEK</p>
                                <span>Apartamenty Wyzwolenia</span>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="204.602" height="215.444" viewBox="0 0 204.602 215.444"><g transform="translate(0 -20.541)" fill="#fff"><path d="M0,20.541H204.6l-.023,215.444L0,207.09Z" stroke="none"/><path d="M 1 21.5408935546875 L 1 206.2208862304688 L 203.5788421630859 234.8334197998047 L 203.6014556884766 21.5408935546875 L 1 21.5408935546875 M 0 20.5408935546875 L 204.6015625 20.5408935546875 L 204.5787200927734 235.9845581054688 L 0 207.0895538330078 L 0 20.5408935546875 Z" stroke="none" fill="rgba(210,180,101,0)"/></g></svg>
                        </li>

                        <li class="property-feature">
                            <div>
                                <p>POKOJE</p>
                                <span class="big">{{$property->rooms}}</span>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="204.733" height="215.444" viewBox="0 0 204.733 215.444"><g transform="translate(0 -20.541)" fill="#fff"><path d="M204.733,20.541H0L.023,235.985l204.711-28.9Z" stroke="none"/><path d="M 1.000091552734375 21.5408935546875 L 1.022735595703125 234.83349609375 L 203.7334442138672 206.2207946777344 L 203.7334442138672 21.5408935546875 L 1.000091552734375 21.5408935546875 M -1.52587890625e-05 20.5408935546875 L 204.7334442138672 20.5408935546875 L 204.7334442138672 207.0895538330078 L 0.022857666015625 235.9845581054688 L -1.52587890625e-05 20.5408935546875 Z" stroke="none" fill="rgba(255,255,255,0.5)"/></g></svg>
                        </li>

                        <li class="property-feature">
                            <div>
                                <p>POWIERZCHNIA</p>
                                <span>{{$property->area}} m<sup>2</sup></span>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="204.602" height="215.444" viewBox="0 0 204.602 215.444"><g transform="translate(0 -20.541)" fill="#fff"><path d="M0,20.541H204.6l-.023,215.444L0,207.09Z" stroke="none"/><path d="M 1 21.5408935546875 L 1 206.2208862304688 L 203.5788421630859 234.8334197998047 L 203.6014556884766 21.5408935546875 L 1 21.5408935546875 M 0 20.5408935546875 L 204.6015625 20.5408935546875 L 204.5787200927734 235.9845581054688 L 0 207.0895538330078 L 0 20.5408935546875 Z" stroke="none" fill="rgba(210,180,101,0)"/></g></svg>
                        </li>

                        @if($property->garden_area)
                        <li class="property-feature">
                            <div>
                                <p>OGRÓDEK</p>
                                <span>{{$property->garden_area}} m<sup>2</sup></span>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="204.602" height="215.444" viewBox="0 0 204.602 215.444"><g transform="translate(0 -20.541)" fill="#fff"><path d="M0,20.541H204.6l-.023,215.444L0,207.09Z" stroke="none"/><path d="M 1 21.5408935546875 L 1 206.2208862304688 L 203.5788421630859 234.8334197998047 L 203.6014556884766 21.5408935546875 L 1 21.5408935546875 M 0 20.5408935546875 L 204.6015625 20.5408935546875 L 204.5787200927734 235.9845581054688 L 0 207.0895538330078 L 0 20.5408935546875 Z" stroke="none" fill="rgba(210,180,101,0)"/></g></svg>
                        </li>
                        @endif
                        @if($property->kitchen)
                        <li class="property-feature">
                            <div>
                                <p>ANEKS/KUCHNIA</p>
                                <span>{{$property->kitchen}}</span>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="204.733" height="215.444" viewBox="0 0 204.733 215.444"><g transform="translate(0 -20.541)" fill="#fff"><path d="M204.733,20.541H0L.023,235.985l204.711-28.9Z" stroke="none"/><path d="M 1.000091552734375 21.5408935546875 L 1.022735595703125 234.83349609375 L 203.7334442138672 206.2207946777344 L 203.7334442138672 21.5408935546875 L 1.000091552734375 21.5408935546875 M -1.52587890625e-05 20.5408935546875 L 204.7334442138672 20.5408935546875 L 204.7334442138672 207.0895538330078 L 0.022857666015625 235.9845581054688 L -1.52587890625e-05 20.5408935546875 Z" stroke="none" fill="rgba(255,255,255,0.5)"/></g></svg>
                        </li>
                        @endif
                        @if($property->deadline)
                        <li class="property-feature">
                            <div>
                                <p>TERMIN ODDANIA</p>
                                <span>{{$property->deadline}}</span>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="204.602" height="215.444" viewBox="0 0 204.602 215.444"><g transform="translate(0 -20.541)" fill="#fff"><path d="M0,20.541H204.6l-.023,215.444L0,207.09Z" stroke="none"/><path d="M 1 21.5408935546875 L 1 206.2208862304688 L 203.5788421630859 234.8334197998047 L 203.6014556884766 21.5408935546875 L 1 21.5408935546875 M 0 20.5408935546875 L 204.6015625 20.5408935546875 L 204.5787200927734 235.9845581054688 L 0 207.0895538330078 L 0 20.5408935546875 Z" stroke="none" fill="rgba(210,180,101,0)"/></g></svg>
                        </li>
                        @endif

                        @if($property->balcony_area)<li>Balkon:<span>{{$property->balcony_area}} m<sup>2</sup></span></li>@endif
                        @if($property->balcony_area_2)<li>Balkon 2:<span>{{$property->balcony_area_2}} m<sup>2</sup></span></li>@endif
                        @if($property->terrace_area)<li>Taras:<span>{{$property->terrace_area}} m<sup>2</sup></span></li>@endif
                        @if($property->terrace_area_2)<li>Taras 2:<span>{{$property->terrace_area_2}} m<sup>2</sup></span></li>@endif
                        @if($property->loggia_area)<li>Taras 2:<span>{{$property->loggia_area}} m<sup>2</sup></span></li>@endif
                        @if($property->parking_space)<li>Miejsce postojowe:<span>{{$property->parking_space}}</span></li>@endif
                        @if($property->garage)<li>Garaż:<span>{{$property->garage}}</span></li>@endif
                    </ul>
                </div>
                <div class="d-flex justify-content-start">
                @if($property->file_pdf)
                    <a href="{{ asset('/investment/property/pdf/'.$property->file_pdf) }}" target="_blank" class="bttn mt-5">POBIERZ PLAN .PDF</a>
                @endif
                </div>
            </div>

            <div class="col-6 pt-4 ps-4">
                @if($property->file)
                    <div class="property-img">
                        <a href="{{ asset('/investment/property/'.$property->file) }}" class="swipebox">
                            <picture>
                                <source type="image/webp" srcset="{{ asset('/investment/property/thumbs/webp/'.$property->file_webp) }}">
                                <source type="image/jpeg" srcset="{{ asset('/investment/property/thumbs/'.$property->file) }}">
                                <img src="{{ asset('/investment/property/thumbs/'.$property->file) }}" alt="{{$property->name}}">
                            </picture>
                        </a>
                    </div>
                @endif
            </div>

        </div>

        <div class="row">
            <div class="col-10">
                <div class="contact-form">
                    <div class="row d-flex justify-content-center">
                        <div class="col-12 text-lato">
                            <h4 class="mb-4">Formularz kontaktowy</h4>
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
</div>

@endsection
@push('scripts')
    <script src="{{ asset('/js/validation.js') }}" charset="utf-8"></script>
    <script src="{{ asset('/js/pl.js') }}" charset="utf-8"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $(".validateForm").validationEngine({
                validateNonVisibleFields: true,
                updatePromptsPosition:true,
                promptPosition : "topRight:-137px"
            });
        });
        @if (session('success')||session('warning')||$errors->any())
        $(window).load(function() {
            const aboveHeight = $('header').outerHeight();
            $('html, body').stop().animate({
                scrollTop: $('.validateForm').offset().top-aboveHeight
            }, 1500, 'easeInOutExpo');
        });
        @endif
    </script>
@endpush
