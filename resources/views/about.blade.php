@extends('app')

<?php $page= 'about'; ?>

@section('curosal-background',('ved14.jpg'))
@section('curosal-title',('ABOUT US'))
@section('curosal-subtitle',('Together We Can Make a Difference'))

@section('succes_story__image',('Adani26-07-2019.png'))
@section('succes_story__title',('Discover The Arjuna in You'))
@section('succes_story__title-second',('Adani'))
@section('succes_story__subtitle',('Two days workshop of our signature program - "Discover The Arjuna In You" which invlolves using the concepts of Bhagavad Gita to increase productivity of individuals towards greater productivity of the organization. Each participant was given a copy of the book "The Corporate Bhagavad Gita" '))
{{-- A two hours Session  at the Ahmedabad office of Reliance Retail on the occasion of International Women's day. The title of the session was "Discover the Arjuna in you" which was aimed at enhancing the Organisational productivity by increasing productivity of people through powerful teachings of the Bhagavad Gita. We engaged the audience. We addressed a group of 40 people, which included 10 women. It was an interactive session . At the end of the session many of the participants took signed copies of the book " The Corporate Bhagvad Gita - Discover the Arjuna in You". --}}
    @section('main-content')
        @include('about/curosel')
        @include('about/about_details')
        @include('about/leader_slider')
        @include('about/succes_story')
    @endsection
