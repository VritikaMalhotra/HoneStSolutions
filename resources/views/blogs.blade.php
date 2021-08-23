@extends('app')

@section('curosal-background',('banner-image5.jpg'))
@section('curosal-title',('BLOGS'))
@section('curosal-subtitle',('together we can make a difference'))
@section('succes_story__image',('VisamoKids.jpeg'))
@section('succes_story__title',('Bhagavad Gita & Guru'))
@section('succes_story__title-second',('Visamo Kids Foundation'))
@section('succes_story__subtitle',('Thanksgiving of schools by Visamo Kids Foundation. Addressed an elite gathering comprising Mr. Rajendra Khemani, Mr. VC of Gujarat VidyaPeeth, Mr. Amit Thakkar - Philanthropist, Mr. Parth Oza - Actor, Singer and Brand Ambassador (Visamo Kids)'))
    @section('main-content')
        @include('about/curosel')
        @include('blog/blog_card')
        @include('about/succes_story')
    @endsection

