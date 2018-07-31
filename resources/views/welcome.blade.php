@extends('_layouts._app')

@section('titulo','Motic')

@section('breadcrumb')
    <a href="{{{route ('home')}}}" class="breadcrumb">Home</a>
@endsection

@section('content')

    <img class="responsive-img" src="{{url('images/motic-home.png')}}">

@endsection