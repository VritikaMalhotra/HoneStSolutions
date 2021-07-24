@extends('app')

@section('curosal-title',('CONTACT US'))
@section('curosal-subtitle',('logetter we can make a difference'))
    @section('main-content')
        @include('about/curosel')
        @include('contact/proflle')
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
        
        @include('about/succes_story')
    @endsection

