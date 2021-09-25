@extends('app')

<?php $page= ''; ?>


@section('curosal-background',('ved19.jpg'))
@section('curosal-title',('Gita Chanting is Enchanting'))
@section('curosal-subtitle',(''))

@section('main-content')
    @include('about/curosel')
    <div class="container">
        @include('form/attend-form')
    </div>

@endsection

