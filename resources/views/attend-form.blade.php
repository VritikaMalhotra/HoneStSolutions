@extends('app')

<?php $page= ''; ?>


@section('curosal-background',('ved19.jpg'))
@section('curosal-title',('Experience the Power of Bhagvad Gita'))
@section('curosal-subtitle',(''))

@section('main-content')
    @include('about/curosel')
    <div class="container">
        @include('form/attend-form')
    </div>

@endsection

