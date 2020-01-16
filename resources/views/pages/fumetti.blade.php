@extends('layouts.app')

@section('fumetti')
<div class="fumContainer">
    @foreach($fumetti as $fumetto)
    <div class="fum">
        <div class="anteprima">
            <div class="impoInfo">
                <h3 class="titolo">"{{ $fumetto['titolo'] }}"</h3>
                <br>
                <p class="autore">{{ $fumetto['autore'] }}</p>
            </div>
        </div>
        <br>
        <div class="descr">
            <p class="anno"> <span class="name">ANNO:</span>  {{ $fumetto['anno'] }}</p>
            <p class="rece"><span class="name">RECENSIONE:</span> <br>{{ $fumetto['recensione'] }}</p>
            <p class="voto"><span class="name">VOTO:</span> {{ $fumetto['voto'] }}</p>
        </div>
        <br>
    </div>
    @endforeach
</div>

@endsection