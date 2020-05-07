@php
  $cards = config('dati');
@endphp
@extends('users.layout')

@section('titolo')
  Homepage -
@endsection
@section('mainContent')
  @foreach ($cards as $key => $card)
    <div class="pasta-card">
      <h3><a href="{{route('descrizione.show', $key)}}">{{$card['titolo']}}</a></h3>
      <div class="descrizione-pasta">
        <img src="{{$card['src-h']}}" alt="">
        <img src="{{$card['src-p']}}" alt="">
        <p>{{$card['descrizione']}}</p>
      </div>
    </div>
  @endforeach
@endsection
