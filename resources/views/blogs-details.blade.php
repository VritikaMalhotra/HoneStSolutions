@extends('app')


<?php $page= 'blogs'; ?>

@section('curosal-background',('banner-image6.jpg'))
@section('curosal-title',('Gita Chanting is Enchanting'))
@section('curosal-subtitle',(''))

@section('succes_story__image',('calorx26-06-2019.png'))
@section('succes_story__title',('Bhagavad Gita in School'))
@section('succes_story__title-second',('Calorx Public School'))
@section('succes_story__subtitle',('Importance of focusing on goals through the teachings of the Bhagavad Gita. The students were motivated to read, understand imbibe and implement the teachings of Bhagavad Gita in their daily lives to enrich living in pursuit to happiness! Two copies of " The Corporate Bhagvad Gita - Discover the Arjuna in You" were presented to the school Library.'))
    @section('main-content')
        @include('about/curosel')
        <div class="container">
            <div class="row pt-5">
                <div class="col-md-4">
                    @include('travel/travel-card-2')
                </div>
                <div class="col-md-8">
                    @include('travel/blog1')
                </div>
            </div>
        </div>

      
        @include('about/succes_story')
    @endsection

