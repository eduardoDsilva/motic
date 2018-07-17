@extends('_layouts._app')

@section('titulo','Motic')

@section('breadcrumb')
    <a href="{{{route ('home')}}}" class="breadcrumb">Home</a>
@endsection

@section('content')

    <div class="carousel carousel-slider center" data-indicators="true">
        <a class="carousel-item" href="#one!"><img src="{{url('images/motic-home.png')}}"></a>
    </div>


@endsection