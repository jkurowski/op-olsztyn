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
            @foreach($galeries as $g)
                <div class="col-12">
                    <h2 class="@if($g->text) mb-0 @else mb-3 mb-sm-4 mb-lg-5 @endif">{{ $g->name }}</h2>
                    @if($g->text) <p class="mb-3 mb-sm-4 mb-lg-5">{!! $g->text !!}</p> @endif
                    <div class="row justify-content-center">
                        @foreach($g->photos as $index => $p)
                            <div class="col-6 col-sm-4 col-lg-3 mb-4">
                                <div class="{{ $index % 2 === 0 ? 'gal-item' : 'gal-item-rev' }}">
                                    <a href="/uploads/gallery/images/{{$p->file}}" class="swipebox" rel="gallery-1" title="">
                                        <picture>
                                            <source type="image/webp" srcset="{{asset('uploads/gallery/images/thumbs/webp/'.$p->file_webp) }}">
                                            <source type="image/jpeg" srcset="{{asset('uploads/gallery/images/thumbs/'.$p->file) }}">
                                            <img src="{{asset('uploads/gallery/images/thumbs/'.$p->file) }}" alt="{{ $p->name }}" width="520" height="293">
                                        </picture>
                                    </a>
                                    <div class="gal-item-border"></div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection