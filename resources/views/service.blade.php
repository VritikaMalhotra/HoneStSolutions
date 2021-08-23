@extends('app')

@section('curosal-background',('about_us_banner.jpg'))
@section('curosal-title',('SERVICE'))
@section('curosal-subtitle',('together we can make a difference'))

@section('succes_story__image',('arjun.jpg'))
@section('succes_story__title',('Discover The Arjuna in You'))
@section('succes_story__title-second',('Reliance Retail'))
@section('succes_story__subtitle',('A two hours Session  at the Ahmedabad office of Reliance Retail on the occasion of International Womens day. The title of the session was "Discover the Arjuna in you" which was aimed at enhancing the Organisational productivity by increasing productivity of people through powerful teachings of the Bhagavad Gita. We engaged the audience. We addressed a group of 40 people, which included 10 women. It was an interactive session .'))
    @section('main-content')
        @include('about/curosel')
        @include('service/service-card')
        @include('about/succes_story')
    @endsection
