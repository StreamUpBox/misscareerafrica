<!DOCTYPE html>

<html lang="en-US">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{$title}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{$description}}" />
    <meta name="keywords" content="Miss Career, yegobox, flipper" />
    <meta name="author" content="Yegobox Team" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />



    <link rel="shortcut icon" href="{{ asset('/images/logo.png') }}">

    <link rel="stylesheet" href="{{ asset('css/superfish.css') }}">


    
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.min.css') }}">
    
    <link rel="stylesheet" href="{{ asset('css/cs-select.css') }}">
    <link rel="stylesheet" href="{{ asset('css/cs-skin-border.css') }}">

    
    <link rel="stylesheet" href="{{ asset('css/themify-icons.css') }}">
    
    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
    
    <link rel="stylesheet" href="{{ asset('css/icomoon.css') }}">
    
    <link rel="stylesheet" href="{{ asset('css/flexslider.css') }}">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="{{ asset('js/modernizr-2.6.2.min.js') }}"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
    <link rel="stylesheet" href="/css/gallery-grid.css">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

 <style>


.p.span{
    font-family: 'Gilroy-ExtraBold'!important;;

   
}

 </style>
</head>

<?php $vistor=new App\Models\Vistors; $vistor->saveVistor($activity) ?>