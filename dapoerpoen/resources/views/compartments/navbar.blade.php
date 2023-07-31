<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
          <ul style="list-style: none; padding: 0; display: inline-block;">
            <li style="display: inline-block; margin-right: 10px;">
                <a href="javascript:void(0)" onclick="changelanguage(1);" style="<?php if(session('language') == "EN") echo("color: #ffdb9c;"); ?>">EN</a>
            </li>
            <li style="display: inline-block;">
                <span style="color: #fff;">|</span>
            </li>
            <li style="display: inline-block; margin-left: 10px;">
                <a href="javascript:void(0)" onclick="changelanguage(2);" style="<?php if(session('language') == "ID") echo("color: #ffdb9c;"); ?>">ID</a>
            </li>
        </ul>
        </div>        
      </div>
</body>
<script src="{{asset('js/script.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>