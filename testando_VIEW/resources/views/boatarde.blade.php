@extends('layouts.app')

@section('title', 'Boa tarde!')


@section('content')
  <h1>Boa tarde, {{ $nome }}!</h1>
  <h1>Boa tarde, {!! $nome !!}!</h1>
  <h1>{{ time() }}</h1>
  <h2>Bem vindo ao curso</h2>
@endsection


@section('rodape')
  @parent
  Boa tarde - rodape
@endsection

@section('topo')
  @parent
  Boa tarde - topo
@endsection
