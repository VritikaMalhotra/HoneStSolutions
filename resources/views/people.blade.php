@extends('app')

@section('curosal-title',('PEOPLE LOVES US'))
@section('curosal-subtitle',('together we can make a difference'))
    @section('main-content')
        @include('about/curosel')
        @include('people/people')
        @include('about/succes_story')
    @endsection