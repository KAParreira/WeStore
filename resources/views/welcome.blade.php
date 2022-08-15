 @extends('template.base')

 <link rel="stylesheet" href="{{url('CSS/carousel.css')}}">
 <link rel="stylesheet" href="{{url('CSS/home.css')}}">

 @section('content')

 <section>
     <div class="containerCar">
         <div class="carousel">
             <div class="carousel__face">
                 <span></span>
             </div>
             <div class="carousel__face">
                 <span></span>
             </div>
             <div class="carousel__face">
                 <span></span>
             </div>
             <div class="carousel__face">
                 <span></span>
             </div>
             <div class="carousel__face">
                 <span></span>
             </div>
             <div class="carousel__face">
                 <span></span>
             </div>
             <div class="carousel__face">
                 <span></span>
             </div>
             <div class="carousel__face">
                 <span></span>
             </div>
             <div class="carousel__face">
                 <span></span>
             </div>
         </div>
     </div>
     <img src="{{'../IMG/Carousel/CarBack.jpg'}}">
 </section>

 <div class="Conteudo">
     <h1>PRODUTOS</h1>
 </div>


 @endsection