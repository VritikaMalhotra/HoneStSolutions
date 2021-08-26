@extends('app')
<style>
    .conatct-us__background{
        background-image: url(img/background-ship.png),url(img/bacground-om.png);
        background-repeat: no-repeat;
        background-position: top left,bottom right;
        background-size: 200px,200px;
    }
</style>
@section('curosal-background',('ved16.jpg'))
@section('curosal-title',('CONTACT US'))
@section('curosal-subtitle',('Together We Can Make a Difference'))

@section('succes_story__image',('ama19-09-2019.png'))
@section('succes_story__title',('Six Virtues of Highly Successful Leaders'))
@section('succes_story__title-second',('Ahmedabad Management Association'))
@section('succes_story__subtitle',('One Day workshop conducted on Leadership Lessons from Indian Wisdom for middle and senior level management. Each participant was presented with a signed copy of our book "The Corporate Bhagavad Gita - Discover The Arjuna in You"'))
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

