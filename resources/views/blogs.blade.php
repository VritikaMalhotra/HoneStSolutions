@extends('app')

@section('curosal-background',('banner-image5.jpg'))
@section('curosal-title',('BLOGS'))
@section('curosal-subtitle',('together we can make a difference'))
    @section('main-content')
        @include('about/curosel')
        @include('blog/blog_card')
        @include('about/succes_story')
    @endsection

