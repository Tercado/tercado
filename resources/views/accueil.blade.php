@extends ('layouts.index')

@section('main')
    <div class="presentation-content">
        <p>Le TERCADO est un bar restaurant panoramique multi-culturel ou se côtoient

            toutes les formes d’arts. L’art pictural avec l’exposition d’artistes sur les murs de

            nos salles, l’art musical avec un bar d’ambiance proposant des thématiques

            musicales. L’art sculpturale avec la mise a disposition de nos espaces extérieurs

            aux artistes plasticiens et enfin l’art du vins avec notre boutique proposant tous

            les crus du beaujolais. Et bien sûr l’art culinaire avec une carte de saison,

            traditionnelle mais aussi créative.</p>
    </div>

    <div class="slide-container">
        <div class="slide first-item">
            <img src="http://www.letercado.com/wp-content/uploads/2016/10/14589769_676611709161568_1318159520529888795_o.jpg">
            <div class="text-from-left">
                <p class="text-content">BIENVENUE !</p>
            </div>
            <div class="text-from-right">
                <p class="text-content">à Saint Christophe</p>
            </div>
            <button class="voir-button">
                <p class="text-content">Voir</p>
            </button>
            <div class="slide-arrow-left">
                <i class="fas fa-arrow-left fa-3x"></i>
            </div>
            <div class="slide-arrow-right">
                <i class="fas fa-arrow-right fa-3x"></i>
            </div>
        </div>
        <div class="slide second-item">
            <div class="text-from-left">

            </div>
            <div class="text-from-right">

            </div>
            <div class="voir-button">

            </div>
        </div>
        <div class="slide third-item">
            <div class="text-from-left">

            </div>
            <div class="text-from-right">

            </div>
            <div class="voir-button">

            </div>
        </div>
    </div>
@endsection
