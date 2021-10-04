@extends('app')

<?php $page= 'about'; ?>

@section('curosal-background',('ved14.jpg'))
@section('curosal-title',('ABOUT US'))
@section('curosal-subtitle',('Together We Can Make a Difference'))

@section('succes_story__image',('Adani26-07-2019.png'))
@section('succes_story__title',('Discover The Arjuna in You'))
@section('succes_story__title-second',('Adani'))
@section('succes_story__subtitle',('Two days workshop of our signature program - "Discover The Arjuna In You" which invlolves using the concepts of Bhagavad Gita to increase productivity of individuals towards greater productivity of the organization. Each participant was given a copy of the book "The Corporate Bhagavad Gita" '))
    @section('main-content')
        @include('about/curosel')
        @include('about/about_details')
        @include('about/leader_slider')
        @include('about/succes_story')
    @endsection
