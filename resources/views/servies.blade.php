@extends('app')

@section('curosal-title',('SERVIES'))
@section('curosal-subtitle',('logetter we can make a difference'))
    @section('main-content')
        @include('about/curosel')
        @include('servies/servies-card') 
        @include('about/succes_story')
    @endsection