@extends('app')

@section('curosal-background',('temple.jpg'))
@section('curosal-title',('GALLERY'))
@section('succes_story__image',('Ama12-09-2019.png'))
@section('succes_story__title',('Sales and Marketing'))
@section('succes_story__title-second',('Ahmedabad Management Association'))
@section('succes_story__subtitle',('Basics of Sales & Marketing course. Deliverd at AMA for small and medium entreprenuers and Sales and Marketing teams of SMEs and MSMEs in Gujarat (Offline) and Pan India (Online)'))
@section('curosal-subtitle',(''))
    @section('main-content')
        @include('about/curosel')
        @include('home/accordion-image')
        @include('gallery/gallery')
        @include('about/succes_story')
    @endsection
