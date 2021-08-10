@extends('app')

@section('curosal-title',('SERVCIES'))
@section('curosal-subtitle',('together we can make a difference'))
    @section('main-content')
        @include('about/curosel')
        @include('servies/servies-card') 
        @include('about/succes_story')
    @endsection