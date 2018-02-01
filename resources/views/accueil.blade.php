@extends ('layouts.index')

@section('main')
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="item">
                <img src="http://www.letercado.com/wp-content/uploads/2016/10/14589769_676611709161568_1318159520529888795_o.jpg" class="img-responsive" alt="Bienvenue !">
                <div class="container">
                    <div class="carousel-caption">
                        <div class="carousel-text">
                            <h1 class="animated bounceInRight">Bienvenue !</h1>
                            <ul class="list-unstyled carousel-list">
                                <li class="animated bounceInLeft" data-original-title="" title="">à Saint Christophe </li>
                            </ul>
                            <a class="enigma_blog_read_btn animated bounceInUp" href="http://www.letercado.com/page-d-exemple/" role="button">Voir</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="http://www.letercado.com/wp-content/uploads/2016/10/IMG_0428-e1490686691340.jpg" alt="...">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="http://www.letercado.com/wp-content/uploads/2017/03/IMG_0330-e1488477740473.jpg" alt="Third slide">
            </div>
        </div>
        <ol class="carousel-indicators">
            <li data-target="carouselExampleIndicators" data-slide-to="0" class="" data-original-title="" title=""></li>
            <li data-target="carouselExampleIndicators" data-slide-to="1" data-original-title="" title="" class="active"></li>
            <li data-target="carouselExampleIndicators" data-slide-to="2" data-original-title="" title="" class=""></li>
        </ol>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

@endsection
