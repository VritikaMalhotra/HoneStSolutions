@extends('app')
<style>
    .conatct-us__background{
        background-image: url(img/background-ship.png),url(img/bacground-om.png);
        background-repeat: no-repeat;
        background-position: top left,bottom right;
        background-size: 200px,150px;
    }
</style>
{{-- @section('curosal-background',('temple.jpg')) --}}
@section('curosal-title',('CONTACT US'))
@section('curosal-subtitle',('together we can make a difference'))

@section('succes_story__image',('arjun.jpg'))
@section('succes_story__title',('Discover The Arjuna in You'))
@section('succes_story__title-second',('Reliance Retail'))
@section('succes_story__subtitle',('A two hours Session  at the Ahmedabad office of Reliance Retail on the occasion of International Womens day. The title of the session was "Discover the Arjuna in you" which was aimed at enhancing the Organisational productivity by increasing productivity of people through powerful teachings of the Bhagavad Gita. We engaged the audience. We addressed a group of 40 people, which included 10 women. It was an interactive session . At the end of the session many of the participants took signed copies of the book " The Corporate Bhagvad Gita - Discover the Arjuna in You".'))
    @section('main-content')
        @include('about/curosel')
        @include('contact/simple-banner')
        @include('contact/proflle')
        <div class="conatct-us__background">
            <div class="container">
                <div class="row py-5">
                    <div class="col-lg-5">
                        @include('contact/contact-form')
                    </div>
                    <div class="col-lg-6 offset-lg-1">
                        @include('contact/contact')
                    </div>
                </div>
            </div>
        </div>

        @include('about/succes_story')
    @endsection

