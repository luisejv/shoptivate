@extends('header')

@section('index')

<section id="product">
    <div class="container-fluid">
        @yield('productType')
    </div>
</section>


<!-- características -->
<section id="specifications">
    <!-- cuadro especificaciones -->
    <div class="row justify-content-center" id="rowContainer">
        <div class="container-fluid p-0 bg-white mt-3 mb-4 col-12 col-md-8" id="specCont">
            <ul id="tabs" class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a id="specs" href="#pane-A" class="nav-link active" data-toggle="tab" role="tab">Características</a>
                </li>
                <li class="nav-item">
                    <a id="info" href="#pane-B" class="nav-link" data-toggle="tab" role="tab">Información</a>
                </li>
                <li class="nav-item">
                    <a id="ops" href="#pane-C" class="nav-link" data-toggle="tab" role="tab">Opiniones</a>
                </li>
                <li class="nav-item">
                    <a id="questions" href="#pane-D" class="nav-link" data-toggle="tab" role="tab">Preguntas</a>
                </li>
            </ul>
            <div id="content" class="tab-content" role="tablist">

                <div id="pane-A" class="card tab-pane fade" role="tabpanel" aria-labelledby="specs">
                    <div role="tab" id="heading-A" class="d-md-none">
                        <h5 class="mb-0">
                            <button type="button" data-toggle="collapse" href="#collapse-A" aria-expanded="true"
                                aria-controls="collapse-A" class="btn-spec col-12 py-2">
                                Características
                                <span class="ml-auto"></span>
                            </button>
                        </h5>
                    </div>
                    <div id="collapse-A" class="collapse show" data-parent="#content" role="tabpanel" aria-labelledby="heading-A">
                        <div class="card-body">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo voluptatibus sunt
                            reprehenderit, veniam aut porro quae earum obcaecati veritatis voluptatem suscipit mollitia
                            voluptas autem. Quos ut voluptate repellat exercitationem cumque!
                        </div>
                    </div>
                </div>

                <div id="pane-B" class="card tab-pane fade show active" role="tabpanel" aria-labelledby="info">
                    <div role="tab" id="heading-B" class="d-md-none">
                        <h5 class="mb-0">
                            <button type="button" class="btn-spec col-12 py-2" data-toggle="collapse" href="#collapse-B"
                                aria-expanded="false" aria-controls="collapse-B">
                                Información
                                <span class="ml-auto"></span>
                            </button>
                        </h5>
                    </div>
                    <div id="collapse-B" class="collapse" data-parent="#content" role="tabpanel" aria-labelledby="heading-B">
                        <div class="card-body">
                            <div class="info">
                                Te presentamos la nueva Lenovo 15.6" IdeaPad 330s Lorem ipsum dolor sit amet
                                consectetur adipisicing
                                elit. Asperiores odit quidem quae sunt quam inventore fuga animi dicta et iusto
                                pariatur facilis. <br>
                            </div>
                            <div class="performance mt-1">
                                <div class="infoHead font-weight-bold">Desempeño</div>
                                <p>
                                    Procesador Intel Core i3-8130U Dual-Core <br>
                                    Procesador Intel Core i3-8130U Dual-Core <br>
                                    Procesador Intel Core i3-8130U Dual-Core <br>
                                    Procesador Intel Core i3-8130U Dual-Core <br>
                                    Procesador Intel Core i3-8130U Dual-Core
                                </p>
                                <div class="infoHead font-weight-bold">Pantalla</div>
                                <p>
                                    Pantalla LCD 17.5"<br>
                                    Pantalla LCD 17.5"<br>
                                    Pantalla LCD 17.5"<br>
                                    Pantalla LCD 17.5"<br>
                                    Pantalla LCD 17.5"<br>
                                    Pantalla LCD 17.5"
                                </p>
                                <div class="infoHead font-weight-bold">Redes</div>
                                <p>
                                    Pantalla LCD 17.5"<br>
                                    Pantalla LCD 17.5"<br>
                                    Pantalla LCD 17.5"<br>
                                    Pantalla LCD 17.5"<br>
                                    Pantalla LCD 17.5"<br>
                                    Pantalla LCD 17.5"
                                </p>
                                <div class="infoHead font-weight-bold">Etc</div>
                                <p>
                                    Pantalla LCD 17.5"<br>
                                    Pantalla LCD 17.5"<br>
                                    Pantalla LCD 17.5"<br>
                                    Pantalla LCD 17.5"<br>
                                    Pantalla LCD 17.5"<br>
                                    Pantalla LCD 17.5"
                                </p>
                                <div class="infoHead font-weight-bold">Etc</div>
                                <p>
                                    Pantalla LCD 17.5"<br>
                                    Pantalla LCD 17.5"<br>
                                    Pantalla LCD 17.5"<br>
                                    Pantalla LCD 17.5"<br>
                                    Pantalla LCD 17.5"<br>
                                    Pantalla LCD 17.5"
                                </p>
                            </div>

                        </div>
                    </div>
                </div>

                <div id="pane-C" class="card tab-pane fade" role="tabpanel" aria-labelledby="ops">
                    <div role="tab" id="heading-C" class="d-md-none">
                        <h5 class="mb-0">
                            <button type="button" class="collapsed btn-spec col-12 py-2" data-toggle="collapse" href="#collapse-C"
                                aria-expanded="false" aria-controls="collapse-C">
                                Opiniones
                                <span class="ml-auto"></span>
                            </button>
                        </h5>
                    </div>
                    <div id="collapse-C" class="collapse" role="tabpanel" data-parent="#content" aria-labelledby="heading-C">
                        <div class="card-body">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo voluptatibus sunt
                            reprehenderit, veniam aut
                            porro quae earum obcaecati veritatis voluptatem suscipit mollitia voluptas autem. Quos ut
                            voluptate
                            repellat exercitationem cumque!
                        </div>
                    </div>
                </div>

                <div id="pane-D" class="card tab-pane fade" role="tabpanel" aria-labelledby="questions">
                    <div role="tab" id="heading-D" class="d-md-none">
                        <h5 class="mb-0">
                            <button type="button" class="collapsed btn-spec2 col-12 py-2" data-toggle="collapse" href="#collapse-D"
                                aria-expanded="false" aria-controls="collapse-D">
                                Preguntas
                                <span class="ml-auto"></span>
                            </button>
                        </h5>
                    </div>
                    <div id="collapse-D" class="collapse" role="tabpanel" data-parent="#content" aria-labelledby="heading-D">
                        <div class="card-body">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo voluptatibus sunt
                            reprehenderit, veniam aut
                            porro quae earum obcaecati veritatis voluptatem suscipit mollitia voluptas autem. Quos ut
                            voluptate
                            repellat exercitationem cumque!
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3 d-none d-md-block mt-3 mr-5">
            <div class="d-flex flex-column">
                <div class="container bg-white">
                    <div class="row border-bottom border-secondary py-2 pl-3">
                        Artículos Similares
                    </div>
                    <div class="row flex-column justify-content-center align-items-center py-3">
                        <div class="container my-3">
                            <div class="row">
                                <div class="col-6">
                                    <img src="https://picsum.photos/130/83/?random&image=0" alt="">
                                </div>
                                <div class="col-6">
                                    <div class="row">
                                        Lenovo 14" IdeaPad 530s Notebook
                                    </div>
                                    <div class="row font-weight-bold">S/250.00</div>
                                    <div class="row text-warning align-items-center">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container my-3">
                            <div class="row">
                                <div class="col-6">
                                    <img src="https://picsum.photos/130/83/?random&image=1" alt="">
                                </div>
                                <div class="col-6">
                                    <div class="row">
                                        Lenovo 14" IdeaPad 530s Notebook
                                    </div>
                                    <div class="row font-weight-bold">S/250.00</div>
                                    <div class="row text-warning">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container my-3">
                            <div class="row">
                                <div class="col-6">
                                    <img src="https://picsum.photos/130/83/?random&image=2" alt="">
                                </div>
                                <div class="col-6">
                                    <div class="row">
                                        Lenovo 14" IdeaPad 530s Notebook
                                    </div>
                                    <div class="row font-weight-bold">S/250.00</div>
                                    <div class="row text-warning">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container my-3">
                            <div class="row">
                                <div class="col-6">
                                    <img src="https://picsum.photos/130/83/?random&image=3" alt="">
                                </div>
                                <div class="col-6">
                                    <div class="row">
                                        Lenovo 14" IdeaPad 530s Notebook
                                    </div>
                                    <div class="row font-weight-bold">S/250.00</div>
                                    <div class="row text-warning">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container my-3 px-0">
                    <img class="purpose">
                </div>
                <div class="container mb-3 px-0">
                    <img class="gift">
                </div>
            </div>
        </div>
    </div>
    <!-- artículos similares -->
    <div class="container d-md-none">
        <div class="row sliderHead bg-white">
            Artículos similares
        </div>
        <div id="sliderRelated" class="carousel slide" data-ride="carousel">
            <!-- ruleta -->
            <ol class="carousel-indicators">
                <li data-target="#sliderRelated" data-slide-to="0" class="active"></li>
                <li data-target="#sliderRelated" data-slide-to="1"></li>
                <li data-target="#sliderRelated" data-slide-to="2"></li>
            </ol>
            <!-- imagenes -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100 sliderM1 img-fluid">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100 sliderM1 img-fluid">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100 sliderM1 img-fluid">
                </div>
            </div>
        </div>
    </div>
    <!-- te puede interesar -->
    <div class="container-fluid mb-4" id="interest">
        <div class="row sliderHead bg-white mx-0">
            Te puede interesar
        </div>
        <div id="sliderInterest" class="carousel slide bg-white" data-ride="carousel" data-interval="4000">
            <!-- ruleta -->
            <ol class="carousel-indicators d-md-none">
                <li data-target="#sliderInterest" data-slide-to="0" class="active"></li>
                <li data-target="#sliderInterest" data-slide-to="1"></li>
            </ol>
            <!-- imagenes -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="d-none d-lg-block">
                        <div class="slide-box">
                            <div class="container">
                                <div class="d-flex flex-column align-items-center justify-content-center">
                                    <img src="https://picsum.photos/120/120/?random&image=0" alt="first product">
                                    <div class="row">
                                        Lenovo 14" IdeaPad 530s Notebook
                                    </div>
                                    <div class="row text-warning align-items-center">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <span class="ml-1 text-dark">4.9 (40)</span>
                                    </div>
                                    <div class="row font-weight-bold">S/250.00</div>
                                    <button class="btn btn-warning text-white">
                                        Agregar
                                        <i class="fas fa-shopping-cart"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="container">
                                <div class="d-flex flex-column align-items-center justify-content-center">
                                    <img src="https://picsum.photos/120/120/?random&image=1" alt="first product">
                                    <div class="row">
                                        Lenovo 14" IdeaPad 530s Notebook
                                    </div>
                                    <div class="row text-warning align-items-center">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <span class="ml-1 text-dark">4.9 (40)</span>
                                    </div>
                                    <div class="row font-weight-bold">S/250.00</div>
                                    <button class="btn btn-warning text-white">
                                        Agregar
                                        <i class="fas fa-shopping-cart"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="container">
                                <div class="d-flex flex-column align-items-center justify-content-center">
                                    <img src="https://picsum.photos/120/120/?random&image=2" alt="first product">
                                    <div class="row">
                                        Lenovo 14" IdeaPad 530s Notebook
                                    </div>
                                    <div class="row text-warning align-items-center">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <span class="ml-1 text-dark">4.9 (40)</span>
                                    </div>
                                    <div class="row font-weight-bold">S/250.00</div>
                                    <button class="btn btn-warning text-white">
                                        Agregar
                                        <i class="fas fa-shopping-cart"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="container">
                                <div class="d-flex flex-column align-items-center justify-content-center">
                                    <img src="https://picsum.photos/120/120/?random&image=3" alt="first product">
                                    <div class="row">
                                        Lenovo 14" IdeaPad 530s Notebook
                                    </div>
                                    <div class="row text-warning align-items-center">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <span class="ml-1 text-dark">4.9 (40)</span>
                                    </div>
                                    <div class="row font-weight-bold">S/250.00</div>
                                    <button class="btn btn-warning text-white">
                                        Agregar
                                        <i class="fas fa-shopping-cart"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="container">
                                <div class="d-flex flex-column align-items-center justify-content-center">
                                    <img src="https://picsum.photos/120/120/?random&image=4" alt="first product">
                                    <div class="row">
                                        Lenovo 14" IdeaPad 530s Notebook
                                    </div>
                                    <div class="row text-warning align-items-center">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <span class="ml-1 text-dark">4.9 (40)</span>
                                    </div>
                                    <div class="row font-weight-bold">S/250.00</div>
                                    <button class="btn btn-warning text-white">
                                        Agregar
                                        <i class="fas fa-shopping-cart"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-none d-md-block d-lg-none"></div>
                    <div class="d-none d-sm-block d-md-none"></div>
                    <div class="d-block d-sm-none">
                        <img class="d-block w-100 sliderM1 img-fluid">
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="d-none d-lg-block">
                        <div class="slide-box">
                            <div class="container">
                                <div class="d-flex flex-column align-items-center justify-content-center">
                                    <img src="https://picsum.photos/120/120/?random&image=5" alt="first product">
                                    <div class="row">
                                        Lenovo 14" IdeaPad 530s Notebook
                                    </div>
                                    <div class="row text-warning align-items-center">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <span class="ml-1 text-dark">4.9 (40)</span>
                                    </div>
                                    <div class="row font-weight-bold">S/250.00</div>
                                    <button class="btn btn-warning text-white">
                                        Agregar
                                        <i class="fas fa-shopping-cart"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="container">
                                <div class="d-flex flex-column align-items-center justify-content-center">
                                    <img src="https://picsum.photos/120/120/?random&image=6" alt="first product">
                                    <div class="row">
                                        Lenovo 14" IdeaPad 530s Notebook
                                    </div>
                                    <div class="row text-warning align-items-center">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <span class="ml-1 text-dark">4.9 (40)</span>
                                    </div>
                                    <div class="row font-weight-bold">S/250.00</div>
                                    <button class="btn btn-warning text-white">
                                        Agregar
                                        <i class="fas fa-shopping-cart"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="container">
                                <div class="d-flex flex-column align-items-center justify-content-center">
                                    <img src="https://picsum.photos/120/120/?random&image=7" alt="first product">
                                    <div class="row">
                                        Lenovo 14" IdeaPad 530s Notebook
                                    </div>
                                    <div class="row text-warning align-items-center">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <span class="ml-1 text-dark">4.9 (40)</span>
                                    </div>
                                    <div class="row font-weight-bold">S/250.00</div>
                                    <button class="btn btn-warning text-white">
                                        Agregar
                                        <i class="fas fa-shopping-cart"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="container">
                                <div class="d-flex flex-column align-items-center justify-content-center">
                                    <img src="https://picsum.photos/120/120/?random&image=8" alt="first product">
                                    <div class="row">
                                        Lenovo 14" IdeaPad 530s Notebook
                                    </div>
                                    <div class="row text-warning align-items-center">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <span class="ml-1 text-dark">4.9 (40)</span>
                                    </div>
                                    <div class="row font-weight-bold">S/250.00</div>
                                    <button class="btn btn-warning text-white">
                                        Agregar
                                        <i class="fas fa-shopping-cart"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="container">
                                <div class="d-flex flex-column align-items-center justify-content-center">
                                    <img src="https://picsum.photos/120/120/?random&image=9" alt="first product">
                                    <div class="row">
                                        Lenovo 14" IdeaPad 530s Notebook
                                    </div>
                                    <div class="row text-warning align-items-center">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <span class="ml-1 text-dark">4.9 (40)</span>
                                    </div>
                                    <div class="row font-weight-bold">S/250.00</div>
                                    <button class="btn btn-warning text-white">
                                        Agregar
                                        <i class="fas fa-shopping-cart"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-none d-md-block d-lg-none"></div>
                    <div class="d-none d-sm-block d-md-none"></div>
                    <div class="d-block d-sm-none">
                        <img class="d-block w-100 sliderM1 img-fluid">
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev d-none d-md-flex" href="#sliderInterest" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next d-none d-md-flex" href="#sliderInterest" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <!-- personas también compraron -->
    <div class="container-fluid mt-3 mb-4" id="similar">
        <div class="row sliderHead bg-white mx-0">
            Otras personas también compraron
        </div>
        <div id="sliderSimilar" class="carousel slide bg-white" data-ride="carousel" data-interval="5500">
            <!-- ruleta -->
            <ol class="carousel-indicators d-md-none">
                <li data-target="#sliderSimilar" data-slide-to="0" class="active"></li>
                <li data-target="#sliderSimilar" data-slide-to="1"></li>
            </ol>
            <!-- imagenes -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="d-none d-lg-block">
                        <div class="slide-box">
                            <div class="container">
                                <div class="d-flex flex-column align-items-center justify-content-center">
                                    <img src="https://picsum.photos/120/120/?random&image=10" alt="first product">
                                    <div class="row">
                                        Lenovo 14" IdeaPad 530s Notebook
                                    </div>
                                    <div class="row text-warning align-items-center">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <span class="ml-1 text-dark">4.9 (40)</span>
                                    </div>
                                    <div class="row font-weight-bold">S/250.00</div>
                                    <button class="btn btn-warning text-white">
                                        Agregar
                                        <i class="fas fa-shopping-cart"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="container">
                                <div class="d-flex flex-column align-items-center justify-content-center">
                                    <img src="https://picsum.photos/120/120/?random&image=11" alt="first product">
                                    <div class="row">
                                        Lenovo 14" IdeaPad 530s Notebook
                                    </div>
                                    <div class="row text-warning align-items-center">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <span class="ml-1 text-dark">4.9 (40)</span>
                                    </div>
                                    <div class="row font-weight-bold">S/250.00</div>
                                    <button class="btn btn-warning text-white">
                                        Agregar
                                        <i class="fas fa-shopping-cart"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="container">
                                <div class="d-flex flex-column align-items-center justify-content-center">
                                    <img src="https://picsum.photos/120/120/?random&image=12" alt="first product">
                                    <div class="row">
                                        Lenovo 14" IdeaPad 530s Notebook
                                    </div>
                                    <div class="row text-warning align-items-center">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <span class="ml-1 text-dark">4.9 (40)</span>
                                    </div>
                                    <div class="row font-weight-bold">S/250.00</div>
                                    <button class="btn btn-warning text-white">
                                        Agregar
                                        <i class="fas fa-shopping-cart"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="container">
                                <div class="d-flex flex-column align-items-center justify-content-center">
                                    <img src="https://picsum.photos/120/120/?random&image=13" alt="first product">
                                    <div class="row">
                                        Lenovo 14" IdeaPad 530s Notebook
                                    </div>
                                    <div class="row text-warning align-items-center">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <span class="ml-1 text-dark">4.9 (40)</span>
                                    </div>
                                    <div class="row font-weight-bold">S/250.00</div>
                                    <button class="btn btn-warning text-white">
                                        Agregar
                                        <i class="fas fa-shopping-cart"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="container">
                                <div class="d-flex flex-column align-items-center justify-content-center">
                                    <img src="https://picsum.photos/120/120/?random&image=14" alt="first product">
                                    <div class="row">
                                        Lenovo 14" IdeaPad 530s Notebook
                                    </div>
                                    <div class="row text-warning align-items-center">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <span class="ml-1 text-dark">4.9 (40)</span>
                                    </div>
                                    <div class="row font-weight-bold">S/250.00</div>
                                    <button class="btn btn-warning text-white">
                                        Agregar
                                        <i class="fas fa-shopping-cart"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-none d-md-block d-lg-none"></div>
                    <div class="d-none d-sm-block d-md-none"></div>
                    <div class="d-block d-sm-none">
                        <img class="d-block w-100 sliderM1 img-fluid">
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="d-none d-lg-block">
                        <div class="slide-box">
                            <div class="container">
                                <div class="d-flex flex-column align-items-center justify-content-center">
                                    <img src="https://picsum.photos/120/120/?random&image=15" alt="first product">
                                    <div class="row">
                                        Lenovo 14" IdeaPad 530s Notebook
                                    </div>
                                    <div class="row text-warning align-items-center">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <span class="ml-1 text-dark">4.9 (40)</span>
                                    </div>
                                    <div class="row font-weight-bold">S/250.00</div>
                                    <button class="btn btn-warning text-white">
                                        Agregar
                                        <i class="fas fa-shopping-cart"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="container">
                                <div class="d-flex flex-column align-items-center justify-content-center">
                                    <img src="https://picsum.photos/120/120/?random&image=16" alt="first product">
                                    <div class="row">
                                        Lenovo 14" IdeaPad 530s Notebook
                                    </div>
                                    <div class="row text-warning align-items-center">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <span class="ml-1 text-dark">4.9 (40)</span>
                                    </div>
                                    <div class="row font-weight-bold">S/250.00</div>
                                    <button class="btn btn-warning text-white">
                                        Agregar
                                        <i class="fas fa-shopping-cart"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="container">
                                <div class="d-flex flex-column align-items-center justify-content-center">
                                    <img src="https://picsum.photos/120/120/?random&image=17" alt="first product">
                                    <div class="row">
                                        Lenovo 14" IdeaPad 530s Notebook
                                    </div>
                                    <div class="row text-warning align-items-center">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <span class="ml-1 text-dark">4.9 (40)</span>
                                    </div>
                                    <div class="row font-weight-bold">S/250.00</div>
                                    <button class="btn btn-warning text-white">
                                        Agregar
                                        <i class="fas fa-shopping-cart"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="container">
                                <div class="d-flex flex-column align-items-center justify-content-center">
                                    <img src="https://picsum.photos/120/120/?random&image=18" alt="first product">
                                    <div class="row">
                                        Lenovo 14" IdeaPad 530s Notebook
                                    </div>
                                    <div class="row text-warning align-items-center">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <span class="ml-1 text-dark">4.9 (40)</span>
                                    </div>
                                    <div class="row font-weight-bold">S/250.00</div>
                                    <button class="btn btn-warning text-white">
                                        Agregar
                                        <i class="fas fa-shopping-cart"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="container">
                                <div class="d-flex flex-column align-items-center justify-content-center">
                                    <img src="https://picsum.photos/120/120/?random&image=19" alt="first product">
                                    <div class="row">
                                        Lenovo 14" IdeaPad 530s Notebook
                                    </div>
                                    <div class="row text-warning align-items-center">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <span class="ml-1 text-dark">4.9 (40)</span>
                                    </div>
                                    <div class="row font-weight-bold">S/250.00</div>
                                    <button class="btn btn-warning text-white">
                                        Agregar
                                        <i class="fas fa-shopping-cart"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-none d-md-block d-lg-none"></div>
                    <div class="d-none d-sm-block d-md-none"></div>
                    <div class="d-block d-sm-none">
                        <img class="d-block w-100 sliderM1 img-fluid">
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev d-none d-md-flex" href="#sliderSimilar" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next d-none d-md-flex" href="#sliderSimilar" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</section>

@stop
