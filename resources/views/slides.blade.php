<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
<link href="https://fonts.googleapis.com/css?family=Oswald|Pathway+Gothic+One|Source+Sans+Pro&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Cookie|Inconsolata&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/14dd9125ec.js"></script>
<link rel="stylesheet" href="./css/slides.css">
</head>
    <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active" data-interval="10000">

        <div class="head" class="d-block w-100">
          <div class="leyenda">
            <h2>Publica tu feria</h2>
            <h3>y compartila con tus clientes, ellos reservan los productos y los retiran ese dia!</h3>
          </div>
          @if(Auth::check())
            <a href="/crearFeria"><button id="boton" type="button" name="button">Crea tu feria!</button></a>
          @else
            <a href="/login"><button id="boton" type="button" name="button">Crea tu feria!</button></a>
          @endif
          <div class="lista">
            <ul>
              <li><i class="fas fa-star-of-life"></i>
             <span> Crea</span> tu feria</li>
              <li><i class="fas fa-star-of-life"></i><span> Publica</span> lo que no usas</li>
              <li><i class="fas fa-star-of-life"></i><span> Gestiona</span> las reservas</li>
              <li><i class="fas fa-star-of-life"></i><span> Ahorra</span> tiempo</li>
              <a href="/preguntas"><button type="button" name="button">Mas info!</button></a>
            </ul>
          </div>
          </div>
      </div>
      <div class="carousel-item" data-interval="2000">
        <div class="header">
          <div class="comprar">
          <img src="images/percha.jpg" alt="">
        </div>
        <div class="marca">
          <h2 >seguinos para enterarte donde estan las ferias este finde</h2>
        </div>
      <div class="redes animated swing" id="animacion">
        <a target="_blank" href="https://www.instagram.com/?hl=es-la"><i class="fab fa-instagram"></i></a>
        <a target="_blank" href="https://twitter.com/?lang=es"><i class="fab fa-twitter"></i></a>
        <a target="_blank" href="https://www.facebook.com"><i class="fab fa-facebook"></i></a>        
      </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
