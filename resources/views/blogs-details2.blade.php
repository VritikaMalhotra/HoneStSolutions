@extends('app')


<?php $page= 'blogs'; ?>

@section('curosal-background',('banner-image6.jpg'))
@section('curosal-title',('Experience the Power of Bhagvad Gita'))
@section('curosal-subtitle',(''))

@section('succes_story__image',('booksclubandbliss23-04-2019.png'))
@section('succes_story__title',('Happiness from Bhagavad Gita'))
@section('succes_story__title-second',('Books & Bliss Club'))
@section('succes_story__subtitle',('Books and Bliss club in collaboration with "Atrangi Community" and American Corner Library held an author meetup with Prasun Kundu, Author of The Corporate Bhagavad Gita. We engaged the audience with a brief about the book and how Bhagavad Gita can help us lead a life full of happiness. At the end of the session many of the participants took signed copies of the book " The Corporate Bhagavad Gita - Discover the Arjuna in You"'))
    @section('main-content')
        @include('about/curosel')
        <div class="container">
            <div class="row pt-5">
                <div class="col-md-4">
                    @include('travel/travel-cards')
                </div>
                <div class="col-md-8">
                    @include('travel/blog2')
                </div>
            </div>
        </div>

        @include('blog/team')
        @include('about/succes_story')
    @endsection

