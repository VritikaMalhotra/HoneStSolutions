@extends('app')

{{-- @section('curosal-background',('temple.jpg')) --}}
@section('curosal-title',('Bhagavad Gita'))
@section('curosal-subtitle',(''))

@section('main-content')
    @include('about/curosel')
    @include('book/buy-book')
    @include('book/carousel-look')
    @include('book/book')
    @include('book/about-auther')

    @include('about/succes_story')
@endsection

