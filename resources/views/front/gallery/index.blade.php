@extends('layouts.page', ['body_class' => 'gallery'])

@section('meta_title', $page->title)
@section('seo_title', $page->meta_title)
@section('seo_description', $page->meta_description)

@section('pageheader')
    @include('layouts.partials.page-header', ['page' => $page, 'header_file' => 'gallery.jpg'])
@stop

@section('content')
<div id="gallery">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Apartamenty wyzwolenia - Galeria</h2>

                <div class="row">
                    <div class="col-4">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="338.793" height="355.793" viewBox="0 0 338.793 355.793">
                            <defs>
                                <filter id="Path_1628" x="0" y="0" width="338.793" height="355.793" filterUnits="userSpaceOnUse">
                                    <feOffset dy="3" input="SourceAlpha"></feOffset>
                                    <feGaussianBlur stdDeviation="3" result="blur"></feGaussianBlur>
                                    <feFlood flood-opacity="0.161"></feFlood>
                                    <feComposite operator="in" in2="blur"></feComposite>
                                    <feComposite in="SourceGraphic"></feComposite>
                                </filter>
                            </defs>
                            <g transform="matrix(1, 0, 0, 1, 0, 0)" filter="url(#Path_1628)">
                                <g id="Path_1628-2" data-name="Path 1628" transform="translate(9 -14.54)" fill="#fff">
                                    <path d="M0,20.541H320.793l-.036,337.793L0,313.029Z" stroke="none"></path>
                                    <path d="M 0.999969482421875 21.5408935546875 L 0.999969482421875 312.1604614257812 L 319.7575073242188 357.1822509765625 L 319.7930908203125 21.5408935546875 L 0.999969482421875 21.5408935546875 M -3.0517578125e-05 20.5408935546875 L 320.7931823730469 20.5408935546875 L 320.7573852539062 358.3334045410156 L -3.0517578125e-05 313.0291442871094 L -3.0517578125e-05 20.5408935546875 Z" stroke="none" fill="rgba(255,255,255,0.5)"></path>
                                </g>
                            </g>

                            <pattern id="backgroundPattern" width="100%" height="100%">
                                <image x="0" y="0" width="338.793" height="355.793" xlink:href="http://ap-olsztyn.test/images/location.jpg" />
                            </pattern>

                        </svg>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection