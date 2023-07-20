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
        <div class="navbar-links">
          <a href="{{route('home')}}" style="color: #ffdb9c;">Home</a>
          <a href="{{route('product')}}">Products</a>
          <a href="{{route('about')}}">About</a>
        </div>
      </div>