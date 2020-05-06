@php
$cards = config('dati');

$lunghe = [];
$corte = [];
$cortissime = [];
foreach ($cards as $key => $card) {
  if ($card['tipo'] == 'lunga') {
    $lunghe[$key] = $card;
  } elseif ($card['tipo'] == 'corta') {
    $corte[$key] = $card;
  } elseif ($card['tipo'] == 'cortissima') {
    $cortissime[$key] = $card;
  }
}
@endphp

@extends('users.layout')

@section('titolo')
  Homepage
@endsection
