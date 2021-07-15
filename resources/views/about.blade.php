@extends('app')

@section('curosal-title',('ABOUT'))
@section('curosal-subtitle',('logetter we can make a difference'))
    @section('main-content')
        @include('about/curosel')
        @include('about/about_details')
        @include('about/leader_slider')
        @include('about/succes_story')
    @endsection