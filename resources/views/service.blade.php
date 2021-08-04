@extends('app')

@section('curosal-title',('SERVICE'))
@section('curosal-subtitle',('together we can make a difference'))
    @section('main-content')
        @include('about/curosel')
        @include('service/service-card')
        @include('about/succes_story')
    @endsection
