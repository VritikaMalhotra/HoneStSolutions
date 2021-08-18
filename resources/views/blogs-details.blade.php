@extends('app')

@section('curosal-background',('banner-image6.jpg'))
@section('curosal-title',('TRAVEL DETAILS'))
@section('curosal-subtitle',('together we can make a difference'))

@section('succes_story__image',('arjun.jpg'))
@section('succes_story__title',('Discover The Arjuna in You'))
@section('succes_story__title-second',('Reliance Retail'))
@section('succes_story__subtitle',('A two hours Session  at the Ahmedabad office of Reliance Retail on the occasion of International Womens day. The title of the session was "Discover the Arjuna in you" which was aimed at enhancing the Organisational productivity by increasing productivity of people through powerful teachings of the Bhagavad Gita. We engaged the audience. We addressed a group of 40 people, which included 10 women. It was an interactive session . At the end of the session many of the participants took signed copies of the book " The Corporate Bhagvad Gita - Discover the Arjuna in You".'))
    @section('main-content')
        @include('about/curosel')
        <div class="container">
            <div class="row pt-5">
                <div class="col-md-4">
                    @include('travel/travel-cards')
                </div>
                <div class="col-md-8">
                    @include('travel/travel-details')
                </div>
            </div>
        </div>

        @include('blog/team')
        @include('about/succes_story')
    @endsection

