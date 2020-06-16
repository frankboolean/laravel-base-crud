@extends('layout')

@section('content')
  <div class="content">
    @foreach ($cagnoliniDB as $cane)
      {{$cane['nome']}} <br>
    @endforeach
  </div>

@endsection
