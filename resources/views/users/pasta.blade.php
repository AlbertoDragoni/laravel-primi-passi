@php
  $cards = config('dati');
  $pasta = $cards[$id];

@endphp

@extends('users.layout')

@section('titolo')
  Homepage -{{$pasta['titolo']}}
@endsection
@section('mainContent')

    <h3>{{$pasta['titolo']}}</h3>
    <div class="descrizione-pasta">
      <img src="{{$pasta['src-h']}}" alt="">
      <img src="{{$pasta['src-p']}}" alt="">
      <p>{{$pasta['descrizione']}}</p>
    </div>

@endsection
