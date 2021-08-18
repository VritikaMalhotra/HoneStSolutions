@extends('app')

{{-- @section('curosal-background',('temple.jpg')) --}}
@section('curosal-title',('Book'))
@section('curosal-subtitle',('The Corporate Bhagavad Gita'))
@section('succes_story__image',('arjun.jpg'))
@section('succes_story__title',('Discover The Arjuna in You'))
@section('succes_story__title-second',('Reliance Retail'))
@section('succes_story__subtitle',('A two hours Session  at the Ahmedabad office of Reliance Retail on the occasion of International Womens day. The title of the session was "Discover the Arjuna in you" which was aimed at enhancing the Organisational productivity by increasing productivity of people through powerful teachings of the Bhagavad Gita. We engaged the audience. We addressed a group of 40 people, which included 10 women. It was an interactive session . At the end of the session many of the participants took signed copies of the book " The Corporate Bhagvad Gita - Discover the Arjuna in You".'))
@section('main-content')
    @include('about/curosel')
    @include('book/buy-book')
    @include('book/carousel-look')
    @include('book/book')
    @include('book/about-auther')
    @include('book/book-review-que')
    @include('about/succes_story')
@endsection

