@extends('app')

@section('curosal-background',('ved2.jpg'))
@section('curosal-title',('Book'))
@section('curosal-subtitle',('The Corporate Bhagavad Gita'))
@section('succes_story__image',('Apple21-10-2018.png'))
@section('succes_story__title',('Discover The Arjuna in You'))
@section('succes_story__title-second',('Apple.inc'))
@section('succes_story__subtitle',('Our two sessions of "Discover the Arjuna in You" were held with the employees of Apple, West India Zone comprising employees from Gujarat, Maharastra and MP '))
@section('main-content')
    @include('about/curosel')
    @include('book/buy-book')
    @include('book/carousel-look')
    @include('book/book')
    @include('book/about-auther')
    @include('book/book-review-que')
    @include('about/succes_story')
@endsection

