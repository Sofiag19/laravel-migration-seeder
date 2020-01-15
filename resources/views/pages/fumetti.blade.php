@extends('layouts.app')

@section('fumetti')

    @foreach($fumetti as $fumetto)
        <p>TITOLO LIBRO: "{{ $fumetto['titolo'] }}"</p>
        <p>AUTORE: {{ $fumetto['autore'] }}</p>
        <p>ANNO PUBBLICAZIONE: {{ $fumetto['anno'] }}</p>
        <p>RECENSIONE: {{ $fumetto['recensione'] }}</p>
        <p>VOTO: {{ $fumetto['voto'] }}</p>
    <br>
    @endforeach

@endsection
