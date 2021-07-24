@extends('app')

@section('curosal-title',('BLOGS'))
@section('curosal-subtitle',('logetter we can make a difference'))

@section('main-content')
    @include('about/curosel')
    @include('book/buy-book')
    @include('book/carousel-look')
    @include('book/book')
    @include('book/about-auther')
    @include('book/book-review-que')
    @include('about/succes_story')
@endsection

