<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="">
	<meta name="description" content="">

	<title>Snapshot HTML CSS Web Template</title>
<!--
Snapshot Template
http://www.templatemo.com/tm-493-snapshot

Zoom Slider
https://vegas.jaysalvat.com/

Caption Hover Effects
http://tympanus.net/codrops/2013/06/18/caption-hover-effects/
-->
	<link rel="stylesheet" href="{{asset('1-asset-landingpage/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('1-asset-landingpage/css/animate.min.css')}}">
	<link rel="stylesheet" href="{{asset('1-asset-landingpage/css/font-awesome.min.css')}}">
  	<link rel="stylesheet" href="{{asset('1-asset-landingpage/css/component.css')}}">

    <link rel="stylesheet" href="{{asset('1-asset-landingpage/css/owl.theme.css')}}">
	<link rel="stylesheet" href="{{asset('1-asset-landingpage/css/owl.carousel.css')}}">
	<link rel="stylesheet" href="{{asset('1-asset-landingpage/css/vegas.min.css')}}">
	<link rel="stylesheet" href="{{asset('1-asset-landingpage/css/style.css')}}">

	<!-- Google web font  -->
	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,300' rel='stylesheet' type='text/css'>

</head>
<body id="top" data-spy="scroll" data-offset="50" data-target=".navbar-collapse">


<!-- Preloader section -->
{{--
<div class="preloader">
     <div class="sk-spinner sk-spinner-pulse"></div>
</div> --}}


@include('1-komponen.header');


<!-- Home section -->

@include('1-komponen.home')


<!-- About section -->

@include('1-komponen.about')


<!-- team carousel -->

@include('1-komponen.carousel')


<!-- Gallery section -->

@include('1-komponen.gallery')


<!-- Contact section -->

@include('1-komponen.contact')


<!-- Footer section -->

@include('1-komponen.footer')

<!-- Back top -->
<a href="#" class="go-top"><i class="fa fa-angle-up"></i></a>

<!-- Javascript  -->
<script src="{{asset('1-asset-landingpage/js/jquery.js')}}"></script>
<script src="{{asset('1-asset-landingpage/js/bootstrap.min.js')}}"></script>
<script src="{{asset('1-asset-landingpage/js/vegas.min.js')}}"></script>
<script src="{{asset('1-asset-landingpage/js/modernizr.custom.js')}}"></script>
<script src="{{asset('1-asset-landingpage/js/toucheffects.js')}}"></script>
<script src="{{asset('1-asset-landingpage/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('1-asset-landingpage/js/smoothscroll.js')}}"></script>
<script src="{{asset('1-asset-landingpage/js/wow.min.js')}}"></script>
<script src="{{asset('1-asset-landingpage/js/custom.js')}}"></script>

</body>
</html>
