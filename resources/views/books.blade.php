@extends('app')

{{-- @section('curosal-background',('temple.jpg')) --}}
@section('curosal-title',('Book'))
@section('curosal-subtitle',('The Corporate Bhagavad Gita'))

@section('main-content')
    @include('about/curosel')
    @include('book/buy-book')
    @include('book/carousel-look')
    @include('book/book')
    @include('book/about-auther')
    @include('book/book-review-que')
    @include('about/succes_story')
@endsection

