@extends('layouts.mainlayout')
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