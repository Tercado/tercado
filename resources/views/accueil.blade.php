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
            <img class="image-slide" src="http://www.letercado.com/wp-content/uploads/2016/10/14589769_676611709161568_1318159520529888795_o.jpg">
            <div class="text-from-left slide-left-right-first">
                <p class="text-content">BIENVENUE !</p>
            </div>
            <div class="text-from-right slide-right-left-first">
                <p class="text-content">à Saint Christophe</p>
            </div>
            <button class="voir-button">
                <p class="text-content">Voir</p>
            </button>
            <div class="slide-arrow-left first-third">
                <i class="fas fa-arrow-left fa-3x"></i>
            </div>
            <div class="slide-arrow-right first-second">
                <i class="fas fa-arrow-right fa-3x"></i>
            </div>
        </div>
        <div class="slide second-item">
            <img class="image-slide" src="http://www.letercado.com/wp-content/uploads/2016/10/IMG_0428-e1490686691340.jpg">
            <div class="text-from-left slide-left-right-second">
                <p class="text-content">AU BAR</p>
            </div>
            <div class="text-from-right slide-right-left-second">
                <p class="text-content">Du chant,de la danse et de la bonne humeur</p>
            </div>
            <div class="voir-button">
                <p class="text-content">Voir</p>
            </div>
            <div class="slide-arrow-right second-third">
                <i class="fas fa-arrow-right fa-3x"></i>
            </div>
            <div class="slide-arrow-left second-first">
                <i class="fas fa-arrow-left fa-3x"></i>
            </div>
        </div>
        <div class="slide third-item">
            <img class="image-slide" src="http://www.letercado.com/wp-content/uploads/2017/03/IMG_0330-e1488477740473.jpg">
            <div class="text-from-left slide-left-right-third">
                <p class="text-content">AU RESTAURANT</p>
            </div>
            <div class="text-from-right slide-right-left-third">
                <p class="text-content">Carte de saison, grenouilles, burgers...</p>
            </div>
            <div class="voir-button">
                <p class="text-content">Voir</p>
            </div>
            <div class="slide-arrow-right third-first">
                <i class="fas fa-arrow-right fa-3x"></i>
            </div>
            <div class="slide-arrow-left third-second">
                <i class="fas fa-arrow-left fa-3x"></i>
            </div>
        </div>
    </div>
@endsection
