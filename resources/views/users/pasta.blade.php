@php
  $cards = config('dati');
  $pasta = $cards[$id];

@endphp

@extends('users.layout')

@section('titolo')
  Homepage -{{$pasta['titolo']}}
@endsection
@section('mainContent')
    <div class="pasta-card">
      <h3>{{$pasta['titolo']}}</h3>
      <div class="descrizione-pasta">
        <img src="{{$pasta['src-h']}}" alt="">
        <img src="{{$pasta['src-p']}}" alt="">
        <p>{{$pasta['descrizione']}}</p>
        <div class="freccia dx">
          <i class="fas fa-chevron-right"></i>
        </div>
        <div class="freccia sx">
          <i class="fas fa-chevron-left"></i>
        </div>
      </div>
    </div>
@endsection
