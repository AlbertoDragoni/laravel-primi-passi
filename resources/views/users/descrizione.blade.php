@php
  $cards = config('dati');
@endphp
@extends('users.layout')

@section('titolo')
  Homepage -
@endsection
@section('mainContent')
  @foreach ($cards as $key => $card)
    <h3><a href="{{$key}}">{{$card['titolo']}}</a></h3>
    <div class="">
      <img src="{{$card['src-h']}}" alt="">
      <img src="{{$card['src-p']}}" alt="">
      <p>{{$card['descrizione']}}</p>
    </div>

  @endforeach
@endsection
