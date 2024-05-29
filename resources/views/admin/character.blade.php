<x-admin-layout>
    <x-slot name="title">
        {{$chara['charname']}}
    </x-slot>
    <div class="text-white text-center container-fluid" style="background: no-repeat url('{{$chara['charimage']}}') right top">
        <h2>{{$chara['charname']}}</h2>

    </div>
</x-admin-layout>
