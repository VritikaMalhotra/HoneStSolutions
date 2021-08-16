@extends('app')

@section('curosal-background',('temple.jpg'))
@section('curosal-title',('OUR JOURNEY'))
@section('curosal-subtitle',('together we can make a difference'))
    @section('main-content')
        <!-- @include('about/curosel') -->
        @include('timeline/timeline')
        <!-- @include('about/succes_story') -->
    @endsection
