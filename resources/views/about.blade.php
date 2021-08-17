@extends('app')

@section('curosal-background',('banner-image7.jpg'))
@section('curosal-title',('ABOUT US'))
@section('curosal-subtitle',('togetter we can make a difference'))
    @section('main-content')
        @include('about/curosel')
        @include('about/about_details')
        @include('about/leader_slider')
        @include('about/succes_story')
    @endsection
