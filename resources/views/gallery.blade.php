@extends('app')

@section('curosal-background',('temple.jpg'))
@section('curosal-title',('GALLERY'))
@section('curosal-subtitle',(''))
    @section('main-content')
        @include('about/curosel')
        @include('home/accordion-image')
        @include('gallery/gallery')
        @include('about/succes_story')
    @endsection
