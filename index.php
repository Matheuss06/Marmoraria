<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Pedra Bela</title>
</head>
<body>

<!-- Inclusão do Header -->
<?php include 'header.html' ?>

<div class="container1">

<h1 class="titulo">Principais Serviços</h1>
<hr class="linhatitulo">

  <div class="carousel-div">
    <!-- 1° Carousel -->
    <div class="w3-content w3-section" style="margin: auto;">
      <img class="mySlides2 imgs-carousel" src="imgs/marmoreTeste01.jpg">
      <img class="mySlides2 imgs-carousel" src="imgs/marmoreTeste02.jpg">
      <img class="mySlides2 imgs-carousel" src="imgs/wallpaperAleatorio01.jpg">
    </div>

    <!-- 2° Carousel -->
    <div class="w3-content w3-section" style="margin: auto;">
      <img class="mySlides1 imgs-carousel" src="imgs/marmoreTeste01.jpg">
      <img class="mySlides1 imgs-carousel" src="imgs/marmoreTeste02.jpg">
      <img class="mySlides1 imgs-carousel" src="imgs/wallpaperAleatorio01.jpg">
    </div>
  </div>

</div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>


<!-- Script do Carousel -->
<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides1");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 5000); 
}
</script>


<script>
var myIndexx = 0;
carousel1();

function carousel1() {
  var i;
  var x = document.getElementsByClassName("mySlides2");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndexx++;
  if (myIndexx > x.length) {myIndexx = 1}    
  x[myIndexx-1].style.display = "block";  
  setTimeout(carousel1, 5000); 
}
</script>

</html>

