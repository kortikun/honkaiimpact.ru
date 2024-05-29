<x-admin-layout>
    <x-slot name="title">
        ПЕРСОНАЖИ
    </x-slot>
    <div class="text-white">
        <div>
            @foreach($charas as $chara)
                <div style="height: 250px; background-color: #8477A4" class="d-flex m-2 p-2 rounded animated fadeInUp">
                    <img class="img-fluid rounded mr-2 animated fadeInRight" src="{{$chara['charimage']}}" alt="character card image">
                    <div class="d-flex flex-column justify-content-center">
                        <h4>{{$chara['charname']}}</h4>
                        <h5>{{$chara['chardesc']}}</h5>
                        <a href="{{ route("char", $chara['id']) }}">
                            <button type="submit">Подробнее</button>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-admin-layout>
