@extends('app')

@section('curosal-title',('GALLERY'))
@section('curosal-subtitle',('logetter we can make a difference'))
    @section('main-content')
        @include('about/curosel')
        @include('gallery/gallery')
        @include('about/succes_story')
    @endsection