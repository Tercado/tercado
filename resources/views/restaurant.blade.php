@extends ('layouts.index')

@section('main')
 <div class="restaurant-content">
     <div class="restaurant-un">
         <div class="content-restaurant">
            <h3 class="center-restaurant">Le Tercado vous propose : </h3>
            <p class="center-restaurant texte-restaurant">Un menu du jour à 13€ avec :<br>Entrée, plat, fromage, dessert et café.</p>
            <p class="center-restaurant texte-restaurant">Un menu du jour à 13,50€ avec : <br>Entrée, plat, fromage, dessert, café et vin.</p>
         </div>
         <div>
            <img class="photo-restaurant" src="./img/restaurant1.jpg">
         </div>
     </div>
     <h3 class="title-restaurant-deux">Du lundi au vendredi</h3>
     <div class="restaurant-deux">
        <div href="/carte" class="carte photo-restaurant">
            <p>Cartes de saison</p>
        </div>
         <div class="burgers photo-restaurant">
            <p>Burgers</p>
        </div>
     </div>
 </div>
@endsection