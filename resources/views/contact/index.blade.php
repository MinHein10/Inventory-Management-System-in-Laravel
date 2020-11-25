@extends('adminpanel/homepage')

@section('content')


<!-- General CSS Files -->
<link rel="stylesheet" href="{{asset('assets/css/app.min.css')}}">
<!-- Template CSS -->
<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/components.css')}}">
<!-- Custom style CSS -->
<link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">
<link rel='shortcut icon' type='image/x-icon' href='{{asset('assets/img/favicon.ico')}}' />

  <div id="app">
    <div class="container">
            
    </div> 
    
  </div>

  <!-- General JS Scripts -->
  <script src="{{asset('assets/js/app.min.js')}}"></script>
  <!-- JS Libraies -->
  <script src="http://maps.google.com/maps/api/js?key=AIzaSyB55Np3_WsZwUQ9NS7DP-HnneleZLYZDNw&amp;sensor=true"></script>
  <script src="{{asset('assets/bundles/gmaps.js')}}"></script>
  <!-- Page Specific JS File -->
  <script src="{{asset('assets/js/page/contact.js')}}"></script>
  <!-- Template JS File -->
  <script src="{{asset('assets/js/scripts.js')}}"></script>
  <!-- Custom JS File -->
  <script src="{{asset('assets/js/custom.js')}}"></script>
    
@endsection