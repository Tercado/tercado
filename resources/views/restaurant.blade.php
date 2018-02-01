@extends ('layouts.index')

@section('main')
 <div class="restaurant-content">
     <div class="restaurant-un">
         <div>
            <h3>Le Tercado vous propose : </h3>
            <p>Un menu du jour à 13€ avec :<br>Entrée, plat, fromage, dessert et café.</p>
            <p>Un menu du jour à 13,50€ avec : <br>Entrée, plat, fromage, dessert, café et vin.</p>
         </div>
         <div>
            <img src="./img/restaurant1.jpg">
         </div>
     </div>
     <h3 class="title-restaurant-deux">Du lundi au vendredi</h3>
     <div class="restaurant-deux">
        <div class="carte">
            <p>Cartes de saison</p>
        </div>
        <div class="burgers">
            <p>Burgers</p>
        </div>
     </div>
 </div>
@endsection