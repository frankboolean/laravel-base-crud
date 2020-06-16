@extends('layout')

@section('content')
  <div class="content">
    @foreach ($cagnoliniDb as $cane)
      {{$cane['nome']}} <br>
    @endforeach
  </div>

@endsection
