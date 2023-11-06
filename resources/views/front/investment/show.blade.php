@extends('layouts.page', ['body_class' => 'investments'])

@section('meta_title', $page->name)
@section('seo_title', $page->meta_title)
@section('seo_description', $page->meta_description)

@section('pageheader')
    @include('layouts.partials.page-header', ['page' => $page, 'header_file' => 'rooms.jpg'])
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="mb-0">Nowe mieszkania na sprzedaż <br>– Apartamenty Wyzwolenia</h2>
            </div>
        </div>
    </div>

    @if($investment->plan)
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div id="plan-holder">
                    <img src="{{ asset('/investment/plan/'.$investment->plan->file.'') }}" alt="{{$investment->name}}" id="invesmentplan" usemap="#invesmentplan" class="w-100">
                    <map name="invesmentplan">
                        @foreach($investment->floors as $floor)
                            @if($floor->html)
                                <area
                                        shape="poly"
                                        href="{{route('floor', $floor)}}"
                                        title="{{$floor->name}}"
                                        alt="floor-{{$floor->id}}"
                                        data-item="{{$floor->id}}"
                                        data-floornumber="{{$floor->id}}"
                                        data-floortype="{{$floor->type}}"
                                        coords="@if($floor->html) {{cords($floor->html)}} @endif">
                            @endif
                        @endforeach
                    </map>
                </div>
            </div>
        </div>
    </div>
    @endif

    @include('front.investment_shared.filtr', ['area_range' => $investment->area_range])
    @include('front.investment_shared.sort')

    @include('front.investment_shared.list', ['investment' => $investment])

@endsection
@push('scripts')
    <script src="{{ asset('/js/plan/imagemapster.js') }}" charset="utf-8"></script>
    <script src="{{ asset('/js/plan/plan.js') }}" charset="utf-8"></script>
@endpush
