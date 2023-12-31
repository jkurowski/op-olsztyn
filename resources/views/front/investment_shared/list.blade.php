<div id="roomsList">
    <div class="container p-0">
        @if($properties->count() > 0)
            @foreach($properties as $room)
                <div class="row m-0">
                    @if($room->price)
                        <span class="ribbon1"><span>Oferta specjalna</span></span>
                    @endif
                    <div class="col-12 col-md col-top p-0 d-flex align-items-center justify-content-center justify-content-md-start">
                        <a href="{{route('property', ['floor' => $room->floor_id, 'property' => $room->id])}}">
                            <h2>{{$room->name}}</h2>
                        </a>
                    </div>
                    <div class="col-6 col-md justify-content-center">
                        @if($room->file)
                            <a href="{{route('property', ['floor' => $room->floor_id, 'property' => $room->id])}}">
                                <picture>
                                    <source type="image/webp" srcset="/investment/property/list/webp/{{$room->file_webp}}">
                                    <source type="image/jpeg" srcset="/investment/property/list/{{$room->file}}">
                                    <img src="/investment/property/list/{{$room->file}}" alt="{{$room->name}}">
                                </picture>
                            </a>
                        @endif
                    </div>
                    <div class="col-6 col-md pe-3 pe-lg-5 d-flex align-items-center">
                        <ul class="mb-0 list-unstyled">
                            @if($room->price)
                                <li>cena: <b>@money($room->price)</b></li>
                            @endif
                            <li>pokoje: <b>{{$room->rooms}}</b></li>
                            <li>pow.: <b>{{$room->area}} m<sup>2</sup></b></li>
                        </ul>
                    </div>
                    <div class="col justify-content-center">
                        <span class="badge room-list-status-{{ $room->status }}">{{ roomStatus($room->status) }}</span>
                    </div>
                    <div class="col justify-content-end col-list-btn p-0">
                        <a href="{{route('property', ['floor' => $room->floor_id, 'property' => $room->id])}}" class="bttn">ZOBACZ</a>
                    </div>
                </div>
            @endforeach
        @else
            <div class="row">
                <div class="col-12 text-center">
                    <b>Brak wyników</b>
                </div>
            </div>
        @endif
    </div>
</div>
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-12 col-lg-9">
            <p class="text-center"><b>Wszystkie atuty tego kameralnego budynku oraz jego okolic sprawią, że Apartamenty Wyzwolenia będą najlepszym wyborem podczas poszukiwania nowego mieszkania w Olsztynie.</b></p>
        </div>
    </div>
</div>
