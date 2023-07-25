<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dapoerpoen</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />
    <link
      href="https://fonts.googleapis.com/css?family=Poppins"
      rel="stylesheet"
    />
  </head>
  <body>
    <div class="container">
      <div class="navbars">
        <a href="home.html"><img src="{{asset('image/logo.png')}}" class="logo" alt="" /></a>
        <div class="navbar-links" id="navlink">
          <a href="{{route('home')}}" style="<?php if($int == 0) echo("color: #ffdb9c;"); ?>" >Home</a>
          <a href="{{route('product')}}" style="<?php if($int == 1) echo("color: #ffdb9c;"); ?>" >Products</a>
          <a href="{{route('about')}}" style="<?php if($int == 2) echo("color: #ffdb9c;"); ?>" >About</a>
        </div>
      </div>
</body>
<script src="{{asset('js/script.js')}}"></script>