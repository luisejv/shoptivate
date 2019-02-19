@extends('productView')

@section('productType')

<!-- breadcrumbs -->
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
        <li class="breadcrumb-item"><a href="#">Computadoras</a></li>
        <li class="breadcrumb-item active" aria-current="page">Lenovo</li>
    </ol>
</nav>
<!-- contenido producto -->
<div class="d-flex flex-md-row flex-column" id="productCont">

    <!-- columna 1 / slider producto -->
    <div class="product-slider order-2 order-md-1 col-md px-0">
        <div id="sliderProduct" class="carousel slide" data-ride="carousel">
            <!-- imágenes -->
            <div class="carousel-inner mt-1">
                <div class="carousel-item active"> <img class="w-100 sliderP img-fluid"> </div>
                <div class="carousel-item"> <img class="w-100 sliderP img-fluid"> </div>
                <div class="carousel-item"> <img class="w-100 sliderP img-fluid"> </div>
                <div class="carousel-item"> <img class="w-100 sliderP img-fluid"> </div>
                <div class="carousel-item"> <img class="w-100 sliderP img-fluid"> </div>
            </div>
        </div>
        <div class="clearfix ml-3">
            <div id="thumbcarousel" class="carousel slide" data-interval="false">
                <div class="carousel-inner">
                    <div class="carousel-item item active">
                        <div data-target="#sliderProduct" data-slide-to="0" class="thumb my-1 mt-md-2"><img src="{{URL::asset('img/sliderLi1.png')}}"></div>
                        <div data-target="#sliderProduct" data-slide-to="1" class="thumb my-1 mt-md-2"><img src="{{URL::asset('img/sliderLi2.png')}}"></div>
                        <div data-target="#sliderProduct" data-slide-to="2" class="thumb my-1 mt-md-2"><img src="{{URL::asset('img/sliderLi3.png')}}"></div>
                        <div data-target="#sliderProduct" data-slide-to="3" class="thumb my-1 mt-md-2"><img src="{{URL::asset('img/sliderLi4.png')}}"></div>
                        <div data-target="#sliderProduct" data-slide-to="4" class="thumb my-1 mt-md-2"><img src="{{URL::asset('img/sliderLi5.png')}}"></div>
                    </div>
                </div>
            </div>
            <!-- /thumbcarousel -->
        </div>
    </div>

    <!-- columna 2 -->
    <div class="order-md-2 col-md-5 pl-5" id="column2">
        <!-- 1era parte columna 2 -->
        <div class="order-1">
            <h5><strong>Lenovo 15.6" IdeaPad 330s</strong></h5>
            <div class="row d-none d-md-flex">
                <div class="col-7 actualPrice">
                    <strong>S/ 1500,57</strong>
                </div>
                <div class="col-5 prevPrice pt-3">
                    <div class="row">
                        Antes
                    </div>
                    <div class="row">
                        S/ 1800,57
                    </div>
                </div>
            </div>
            <div class="row calif justify-content-center text-center">
                <div class="col-3 px-0">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="col-8">
                    <a href="#" class="opi">20 opiniones de clientes</a>
                    <a href="#">3 preguntas respondidas</a>
                </div>
            </div>
        </div>
        <hr class="d-none d-md-block">
        <!-- 2da parte columna 2 -->
        <div class="order-3">
            <!-- otros modelos -->
            <div class="container mt-3">
                <div class="row pb-2">
                    <h6><strong>Otros modelos: A6-7310 processor</strong></h6>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6 p-0 px-md-3">
                        <button class="btn btn-block btn-outline-warning">
                            <div class="row">
                                <div class="col-10">
                                    <div class="row px-3">
                                        <span><strong>A6-7310 processor</strong></span>
                                    </div>
                                    <div class="row px-3">
                                        <span class="anthrMod"><strong>S/ 1120.00</strong></span>
                                    </div>
                                </div>
                                <div class="col-2 align-self-center d-md-none">
                                    <i class="fas fa-caret-right"></i>
                                </div>
                            </div>
                        </button>
                    </div>
                    <div class="d-none d-md-block col-md-6">
                        <button class="btn btn-block btn-outline-secondary">
                            <div class="row">
                                <div class="col-10">
                                    <div class="row px-3">
                                        <span><strong>A6-7310 processor</strong></span>
                                    </div>
                                    <div class="row px-3">
                                        <span class="anthrMod"><strong>S/ 160.00</strong></span>
                                    </div>
                                </div>
                                <div class="col-2 align-self-center d-md-none">
                                    <i class="fas fa-caret-right"></i>
                                </div>
                            </div>
                        </button>
                    </div>
                </div>
            </div>
            <!-- cantidad -->
            <div class="container mt-3" id="quantitySec">
                <div class="row">
                    <h6><strong>Cantidad</strong></h6>
                </div>
                <div class="row">
                    <div class="col-8 col-md-5">
                        <div class="input-group text-center">
                            <input type="text" class="form-control" placeholder="1" aria-label="cantidad"
                                aria-describedby="quantity" disabled>
                            <div class="input-group-append" id="quantity">
                                <button class="btn btn-outline-warning" type="button">-</button>
                                <button class="btn btn-outline-warning" type="button">+</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 col-md-3 text-center pt-2">
                        <i class="fas fa-check-circle text-success"></i>
                        <span>En stock</span>
                    </div>
                </div>
            </div>
            <!-- promociones -->
            <div class="container py-2 my-3 borderProm" id="offer">
                <span class="promTitle p-1">Oferta Promocional</span> Lorem ipsum dolor sit amet consectetur
                adipisicing
                elit. Dicta ipsam iusto, magnam libero assumenda aliquid enim aut sapiente sit quo rem
                provident
                placeat
                quam similique vero quaerat odio nesciunt facere.
            </div>
        </div>
        <!-- 3ra parte columna 2 -->
        <div class="order-5">
            <!-- compartir -->
            <div class="container my-2 py-2 borderShare" id="social">
                <div class="row">
                    <div class="col-4 col-md-6 d-flex">
                        <span class="text-primary font-weight-bold align-self-center">Compartir</span>
                    </div>
                    <div class="col-8 col-md-6 d-flex justify-content-around brandsFS">
                        <span class="br-gmail"></span>
                        <span class="br-facebook"></span>
                        <span class="br-twitter"></span>
                        <span class="br-pinterest"></span>
                    </div>
                </div>
            </div>
            <!-- opiniones -->
            <div class="container pb-2" id="opinions">
                <h6 class="headOpFS d-flex justify-content-between">
                    Lenovo 15.6" IdeaPad 330s Laptop opiniones
                    <a href="#" id="moreOpinions" class="d-none d-md-inline align-self-center">
                        Ver más opiniones(6)
                    </a>
                </h6>
                <div class="row justify-content-center px-3">
                    <!-- usuario -->
                    <div class="col-3 p-0 d-flex flex-column justify-content-center align-items-center">
                        <div class="profile text-center align-self-center">R</div>
                        <span class="font-weight-bold userFS">robert</span>
                        <span class="dateFS">07/02/2019</span>
                        <div class="row pb-1" id="starsRatingComment">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                    <!-- opinión -->
                    <div class="col-9 d-flex flex-column justify-content-around align-items-start opinionFS pl-4">
                        <div class="row">
                            "Bueno"
                        </div>
                        <div class="row">
                            <strong>Ventajas: </strong> Lorem ipsum dolor sit
                        </div>
                        <div class="row">
                            <strong>Desventajas: </strong> Lorem ipsum dolor sit
                        </div>
                        <div class="row">
                            <strong>¿Recomendado?:</strong> Si
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- columna 3 -->
    <div class="order-4 order-md-3 col-md-3" id="column3">
        <!-- preforma -->
        <div class="container mb-2" id="preform">
            <div class="row px-3"><span class="text-warning">S/ 98.96</span></div>
            <div class="row px-3">Envío gratis</div>
            <div class="row px-3 mb-2">Vendido por <span class="text-primary"> St3 Group </span> y enviado por
                <span class="text-primary">Shoptivate.</span> Se puede envolver para regalo</div>
            <button class="btn btn-block btn-warning text-white">Agregar al carrito</button>
            <button class="btn btn-block btn-secondary text-white">Comprar ahora con 1-Click</button>
            <div class="row borderbGray justify-content-start py-3 mx-1">
                <div class="form-check">
                    <input type="checkbox" name="" id="gift" class="form-check-input">
                    <label class="form-check-label preformFS" for="gift">
                        Es un regalo
                    </label>
                </div>
            </div>
            <div class="row justify-content-center borderbGray mx-1 py-2">
                <div class="ubicM">
                    <div class="row">
                        <i class="fas fa-map-marker-alt text-bold mr-2"></i>
                        <span class="preformFS">Enviar a ROBERT - Lima 33192</span>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mt-2 pt-2 mx-1">
                <button class="btn btn-block btn-outline-secondary dropdown-toggle" type="button" id="list" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Agregar a la Lista
                </button>
                <div class="dropdown-menu" aria-labelledby="list">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </div>
        </div>
        <!-- medios de pago -->
        <div class="container mt-2 brandsFS">
            <div class="row justify-content-around p-2">
                <span class="br-paypal"></span>
                <span class="br-visa"></span>
                <span class="br-mastercard"></span>
                <span class="br-applepay"></span>
            </div>
            <div class="row justify-content-around p-2">
                <span class="br-tesla"></span>
                <span class="br-etsy"></span>
                <span class="br-behance"></span>
                <span class="br-hatenabookmark"></span>
            </div>
        </div>
    </div>

</div>


@stop
