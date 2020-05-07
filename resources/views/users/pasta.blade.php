@php
  $cards = config('dati');
  $pasta = $cards[$id];
  dd($pasta);

@endphp

@extends('users.layout')

@section('titolo')
  Homepage -
@endsection
@section('mainContent')

    <h3><a href="{{$key}}">{{$card['titolo']}}</a></h3>
    <div class="">
      <img src="{{$card['src-h']}}" alt="">
      <img src="{{$card['src-p']}}" alt="">
      <p>{{$card['descrizione']}}</p>
    </div>

@endsection
