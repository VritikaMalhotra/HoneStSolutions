@extends('app')

@section('curosal-title',('GALLERY'))
@section('curosal-subtitle',(''))
    @section('main-content')
        @include('about/curosel')
        @include('gallery/gallery')
        @include('home/accordion-image')
        @include('about/succes_story')
    @endsection
