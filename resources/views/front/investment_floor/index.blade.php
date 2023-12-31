@extends('layouts.page', ['body_class' => 'investments'])

@section('meta_title', $investment->floor->name)
@section('seo_title', $investment->name.' - '.$investment->floor->name)
@section('seo_description', $page->meta_description)

@section('pageheader')
    @include('layouts.partials.property-header', [
    'title' => $investment->floor->name,
    'items' => [
        ['uri'=> 'plan', 'title'=> 'Plan inwestycji'],
        ]
    ])
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <img src="{{ asset('/images/svg/header-deco.svg') }}" alt="" width="99" height="17" class="m-auto mb-3">
                <h2>{{$investment->floor->name}}</h2>
            </div>
        </div>
        <div id="planNav" class="row">
            <div class="col-12 col-sm-4 d-flex justify-content-start">@if($prev_floor) <a href="{{route('floor', $prev_floor->id)}}" class="bttn">{{$prev_floor->name}}</a> @endif</div>
            <div class="col-12 col-sm-4 d-flex justify-content-center">
                <a href="{{route('plan')}}" class="bttn">Plan budunku</a>
            </div>
            <div class="col-12 col-sm-4 d-flex justify-content-end">@if($next_floor) <a href="{{route('floor', $next_floor->id)}}" class="bttn">{{$next_floor->name}}</a> @endif</div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 p-0">
                @if($investment->floor->file)
                    <div id="plan-holder">
                        <img src="{{ asset('/investment/floor/webp/'.$investment->floor->file_webp) }}" alt="{{$investment->floor->name}}" id="invesmentplan" usemap="#invesmentplan">
                        <map name="invesmentplan">
                            @if($properties)
                                @foreach($properties as $r)
                                    @if($r->html)
                                        <area
                                                shape="poly"
                                                href="{{route('property', ['floor' => $r->floor_id, 'property' => $r->id])}}"
                                                data-item="{{$r->id}}"
                                                title="{{$r->name}}<br>Powierzchnia: <b class=fr>{{$r->area}} m<sup>2</sup></b><br />Pokoje: <b class=fr>{{$r->rooms}}</b><br><b>{{ roomStatus($r->status) }}</b>"
                                                alt="{{$r->slug}}"
                                                data-roomnumber="{{$r->number}}"
                                                data-roomtype="{{$r->typ}}"
                                                data-roomstatus="{{$r->status}}"
                                                coords="{{cords($r->html)}}"
                                                class="inline status-{{$r->status}}"
                                        >
                                    @endif
                                @endforeach
                            @endif
                        </map>
                    </div>
                @endif
            </div>
        </div>
    </div>
        @if($investment->floor->id <> 8)
        @include('front.investment_shared.filtr', ['area_range' => $investment->floor->area_range])
        @include('front.investment_shared.sort')

        @include('front.investment_shared.list', ['investment' => $investment])
        @endif
@endsection
@push('scripts')
    <script src="{{ asset('/js/plan/imagemapster.js') }}" charset="utf-8"></script>
    <script src="{{ asset('/js/plan/tip.js') }}" charset="utf-8"></script>
    <script src="{{ asset('/js/plan/floor.js') }}" charset="utf-8"></script>
@endpush
