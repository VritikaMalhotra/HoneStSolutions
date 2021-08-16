@extends('app')

@section('curosal-background',('temple.jpg'))
@section('curosal-title',('TRAVEL DETAILS'))
@section('curosal-subtitle',('together we can make a difference'))
    @section('main-content')
        @include('about/curosel')
        <div class="container">
            <div class="row pt-5">
                <div class="col-md-4">
                    @include('travel/travel-cards')
                </div>
                <div class="col-md-8">
                    @include('travel/travel-details')
                </div>
            </div>
        </div>

        @include('blog/team')
        @include('about/succes_story')
    @endsection

