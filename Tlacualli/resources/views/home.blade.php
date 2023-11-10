@extends('layouts.mainlayoutHome')
@section('content')
<section class="sectionCarrusel">
    <div class="slideshow-container">
    <div class="mySlides fade">
        <img id="carrusel" src="https://veracruz.uo.edu.mx/sites/default/files/Desarrollo-Sustentable.jpeg" >
        <div id="presentacion">
            Tlacualli
        </div>
    </div>
    
    <div class="mySlides fade">
        <img id="carrusel" src="https://lolmagazine.com.mx/wp-content/uploads/2020/12/Mercado-libre-lanza-categoria-Eco-Friendly.jpeg">
        <div id="presentacion">
            Tlacualli
        </div>
    </div>
    
    <div class="mySlides fade">
        <img id="carrusel" src="https://parabienoparamal.com/wp-content/uploads/2021/08/Te-mostramos-co%CC%81mo-hacer-composta-en-casa.jpeg">
        <div id="presentacion">
            Tlacualli
        </div>
    </div>
</div>
<br>
<div style="text-align:center">
<span class="dot"></span> 
<span class="dot"></span> 
<span class="dot"></span> 
</div>
</section>
<br>
<section class="principalContent">
    <div>
        <h1 class="title">La composta</h1>
        <p>La composta es un abono orgánico que se forma por la degradación microbiana de materiales acomodados en capas y sometidos a un proceso de descomposición. <br><br>

Los microorganismos que llevan a cabo la descomposición o mineralización de los materiales ocurren de manera natural en el ambiente; el método para producir este tipo de abono es económico y fácil de implementar.<br><br>

Por acción de los microorganismos se da origen a un material (materia orgánica) de gran utilidad para los suelos agrícolas ya que mejora la estructura y la fertilidad de estos.</p></div>
</section>

<script>
    let slideIndex = 0;
    showSlides();
    
    function showSlides() {
      let i;
      let slides = document.getElementsByClassName("mySlides");
      let dots = document.getElementsByClassName("dot");
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
      }
      slideIndex++;
      if (slideIndex > slides.length) {slideIndex = 1}    
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";  
      dots[slideIndex-1].className += " active";
      setTimeout(showSlides, 4000); // Change image every 2 seconds
    }
    </script>

<section id="info-section" class="info-section">
<div class="container">
<div class="info-card">
  <img src="https://www.traza.net/wp-content/uploads/2021/04/Reciclaje-contenedores-de-basura-en-restaurantes.jpg" class="card-img-top" alt="Imagen 1">
  <div class="card-body">
    <h5 class="card-title">Restaurantes</h5>
    <p class="card-text">Reduce el peso y volumen de los residuos hasta el 90%<br><br>
                        Elimina la necesidad de contar con áreas refrigeradas destinadas al almacenamiento de los residuos<br><br>
                        Termina con los malos olores, líquidos, gérmenes y bacterias<br><br>
                        Evita la temida contaminación cruzada<br><br>
                        Ahorra costes: limpieza, desinfección, bolsas de basura y contenedores</p>
  </div>
</div>

<div class="info-card">
  <img src="https://i.ytimg.com/vi/BiFTS6N7LJg/mqdefault.jpg" class="card-img-top" alt="Imagen 2">
  <div class="card-body">
    <h5 class="card-title">Asociaciones</h5>
    <p class="card-text">Consejo de Compostaje de los Estados Unidos USCC <br><br>
    Asociación Nacional de Agricultura de Conservación ANAC A.C.<br><br>
    Asociación Mexicana de Productores, Formuladores y Distribuidores de Insumos Orgánicos, Biologicos y Ecologicos AMPFYDIOBE A.C.<br><br>
    Lombricultores Unidos A.C.LUAC<br><br>
    THE WORM FARMING ALLIANCE WFA</p>
  </div>
</div>


<div class="info-card text-center">
  <img src="https://media-temporary.preziusercontent.com/frames-public/7/a/6/8/3/ecfa4bb415e82d304c5ee23019e380.jpeg" class="card-img-top" alt="Imagen 3">
  <div class="card-body">
    <h5 class="card-title">Tipos de compostas</h5>
    <p class="card-text">1. Tradicional<br><br>
                          2. Humus<br><br>
                          3. De estiércol<br><br>
                          4. Avicomposta<br><br>
                          5. Composta de café<br><br>
                          6. Turba</p>
  </div>
</div>
</div>
</section>

    <script>
        let slideIndex = 0;
        showSlides();
        
        function showSlides() {
          let i;
          let slides = document.getElementsByClassName("mySlides");
          let dots = document.getElementsByClassName("dot");
          for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";  
          }
          slideIndex++;
          if (slideIndex > slides.length) {slideIndex = 1}    
          for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
          }
          slides[slideIndex-1].style.display = "block";  
          dots[slideIndex-1].className += " active";
          setTimeout(showSlides, 4000); // Change image every 2 seconds
        }
        </script>
@endsection