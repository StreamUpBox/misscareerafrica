<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en-US">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{$title}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{$description}}" />
    <meta name="keywords" content="Miss Career, yegobox, flipper" />
    <meta name="author" content="Yegobox Team" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <!--
//////////////////////////////////////////////////////

Website: 		http://yegobox.com/
Email: 			info@yegobox.com
Twitter: 		http://twitter.com/yegobox
Facebook: 		https://www.facebook.com/yegobox

//////////////////////////////////////////////////////
-->

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content="" />
    <meta property="og:image" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:description" content="" />
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />


    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="{{ asset('/images/logo.png') }}">
    <!-- <link href='https://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700italic,900,700,900italic' rel='stylesheet' type='text/css'> -->

    <!-- Stylesheets -->
    <!-- Dropdown Menu -->
    <link rel="stylesheet" href="{{ asset('css/superfish.css') }}">
    <!-- Owl Slider -->
    <!-- <link rel="stylesheet" href="css/owl.carousel.css"> -->
    <!-- <link rel="stylesheet" href="css/owl.theme.default.min.css"> -->
    <!-- Date Picker -->
    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.min.css') }}">
    <!-- CS Select -->
    <link rel="stylesheet" href="{{ asset('css/cs-select.css') }}">
    <link rel="stylesheet" href="{{ asset('css/cs-skin-border.css') }}">

    <!-- Themify Icons -->
    <link rel="stylesheet" href="{{ asset('css/themify-icons.css') }}">
    <!-- Flat Icon -->
    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
    <!-- Icomoon -->
    <link rel="stylesheet" href="{{ asset('css/icomoon.css') }}">
    <!-- Flexslider  -->
    <link rel="stylesheet" href="{{ asset('css/flexslider.css') }}">

    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Modernizr JS -->
    <script src="{{ asset('js/modernizr-2.6.2.min.js') }}"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
    <link rel="stylesheet" href="/css/gallery-grid.css">
    
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
<script src="js/respond.min.js"></script>
<![endif]-->
 <style>
 body{
    font-family: 'Comfortaa', display!important;
 }

p,span{
    font-family: 'Comfortaa', display!important;;
    font-size: 28!important;;
    font-weight: 400!important;;
    color: #767676!important;
    transition: 0.5s!important;;
    -webkit-transition: 0.5s!important;;
    font-style: normal!important;;
    line-height: 1.6!important;;
    letter-spacing: 1px!important;;
    
    
}

 </style>
</head>

<?php $vistor=new App\Models\Vistors; $vistor->saveVistor($activity) ?>