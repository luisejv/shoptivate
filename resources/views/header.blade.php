@extends('welcome')

@section('header')

<section id="header">
    <!-- anuncios -->
    <div class="container-fluid">
        <div class="row align-items-center justify-content-center text-center clock">
            <div class="col-6 col-md-3 text-right pAdvert">
                <!-- Aquí va la imagen de la oferta -->
                <span class="text-uppercase font-weight-bold">Descuentos Diarios</span>
            </div>
            <div class="col-6 col-md-5">
                <div class="row p-2">
                    <div class="col-12 col-md-6 phrase1 pt-1">No te lo pierdas, termina en</div>
                    <div class="col-12 col-md-6 count">
                        <!-- Aquí va el contador -->
                        01 : 03 : 10 min
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- navbar -->
    <div class="container-fluid navbar-color">
        <!-- primera fila navbar -->
        <div class="row align-items-center justify-content-center text-center pt-2">
            <!-- nav-bar -->
            <div id="navbar" class="d-none d-md-block">
                <nav class="navbar">
                    <button type="button" class="sideBarBtn" onclick="openNav()">
                        <span>&#9776;</span>
                    </button>
                </nav>
            </div>
            <div id="navbar" class="d-md-none">
                <nav class="navbar">
                    <button type="button" class="sideBarBtn" onclick="openNav()">
                        <span>&#9776;</span>
                    </button>
                </nav>
            </div>
            <!-- logo -->
            <div class="col-4 col-md-2">
                <a href="#" alt="Shoptivate">
                    <span class="shoptivate"></span>
                </a>
            </div>
            <!-- carrito móvil -->
            <div class="col-6 d-md-none text-right">
                <a href="" class="text-light font-weight-bold">
                    <i class="fas fa-shopping-cart"></i>
                </a>
            </div>
            <!-- buscador -->
            <div class="col-12 col-md-6 secRow py-1">
                <div class="input-group my-2" id="browser">
                    <button type="button" class="btn btn-light dropdown-toggle d-none d-md-block" data-toggle="dropdown"
                        aria-expanded="false" aria-haspopup="true">
                        Departamentos
                    </button>
                    <!-- falta definir el árbol de categorías -->
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#contains">Contains</a></li>
                        <li><a href="#its_equal">It's equal</a></li>
                        <li><a href="#greather_than">Greather than ></a></li>
                        <li><a href="#less_than">Less than < </a> </li> 
                        <li class="divider"></li>
                        <li><a href="#all">Anything</a></li>
                    </ul>
                    <input type="text" class="form-control" id="busc" placeholder="Busca ropa, tecnología, calzado..."
                        aria-label="Busca ropa, tecnología, calzado..." aria-describedby="button-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-warning" type="button" id="button-addon2"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </div>
            <!-- anuncios -->
            <div class="col-md-3 d-none d-md-block adds">
                Tus descuentazos de <strong>verano</strong>
            </div>
        </div>
        <!-- segunda fila navbar -->
        <div class="row align-items-center justify-content-center text-center" id="scdRow">
            <!-- ubicación -->
            <div class="col-12 col-md-2 mt-2 p2fit order-2 order-md-1 ubic px-5">
                <div class="row text-white">
                    <div class="col-md-3 d-none d-md-block">
                        <i class="fas fa-map-marker-alt text-white text-bold marker"></i>
                    </div>
                    <div class="col-md-9 d-none d-md-block ubicLineHeight">
                        <div class="row text-white-50">Enviar a ROBERT</div>
                        <div class="row"><strong>Lima 33192</strong></div>
                    </div>
                    <div class="col-6 d-md-none ubicM">
                        <div class="row flex-row justify-content-around align-items-center">
                            <i class="fas fa-map-marker-alt text-white text-bold marker"></i>
                            <span>Enviar a ROBERT</span>
                            <strong class="text-white">Lima 33192</strong>
                        </div>
                    </div>
                </div>
            </div>
            <!-- tabs -->
            <div class="col-12 col-md-6 order-1 order-md-2" id="tabindex">
                <div class="container">
                    <div class="row justify-content-around">
                        <div class="col-3 col-md-2">
                            <div class="dropdown" id="categoriesDD">
                                <button class="dropdown-toggle tabDropdown" type="button" id="categories" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    Categorías
                                </button>
                                <div class="dropdown-menu" aria-labelledby="categories">
                                    <ul class="nav justify-content-around align-items-center text-center">
                                        <li class="nav-item">
                                            <img class="tab1">
                                            <a href="#" class="nav-link">Celulares</a>
                                        </li>
                                        <li class="nav-item">
                                            <img class="tab2">
                                            <a href="#" class="nav-link">Moda</a>
                                        </li>
                                        <li class="nav-item">
                                            <img class="tab3">
                                            <a href="#" class="nav-link">Calzado</a>
                                        </li>
                                        <li class="nav-item">
                                            <img class="tab4">
                                            <a href="#" class="nav-link">Laptops</a>
                                        </li>
                                        <li class="nav-item">
                                            <img class="tab5">
                                            <a href="#" class="nav-link">TV y Audio</a>
                                        </li>
                                        <li class="nav-item">
                                            <img class="tab6">
                                            <a href="#" class="nav-link">Accesorios</a>
                                        </li>
                                        <li class="nav-item">
                                            <img class="tab7">
                                            <a href="#" class="nav-link">Tecnología</a>
                                        </li>
                                        <li class="nav-item">
                                            <button type="button" class="btn btn-warning btn-lg text-white">Ver Todas</button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-2">
                            <a href="">Opción</a>
                        </div>
                        <div class="col-2">
                            <a href="">Opción</a>
                        </div>
                        <div class="col-2">
                            <a href="">Opción</a>
                        </div>
                        <div class="col-2">
                            <a href="">Opción</a>
                        </div>
                        <div class="col-md-2 d-none d-md-block">
                            <a href="">Opción</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- idioma y carrito -->
            <div class="col-md-4 order-md-3 d-none d-md-block" id="userPref">
                <div class="row">
                    <!-- idioma -->
                    <div class="col-md-2 container">
                        <div class="row">
                            <div class="col borderRight px-0">
                                <div class="row text-white-50 align-items-center justify-content-around pl-4">ES</div>
                                <div class="row text-light font-weight-bold align-items-center justify-content-end px-4">
                                    <div class="dropdown">
                                        <button class="dropdown-toggle tabDropdown" type="button" id="dropdownMenuButton"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-globe"></i>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" id="dropdownLang">
                                            <div class="headerLang">Elige tu idioma</div>
                                            <div class="d-flex flex-row align-items-center">
                                                <input type="radio" name="lang" id="customRadio1" checked>
                                                <span class="custom-label">Español - ES</span>
                                            </div>
                                            <hr>
                                            <div class="d-flex flex-row align-items-center">
                                                <input type="radio" name="lang" id="customRadio2">
                                                <span class="custom-label">Inglés - EN</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- cuenta -->
                    <div class="col-md-3 container">
                        <div class="row text-white-50 justify-content-start"><span>Hola Robert</span></div>
                        <div class="row text-white font-weight-bold">
                            <div class="dropdown" id="dropdownAcc">
                                <button class="dropdown-toggle tabDropdown" type="button" id="dropdownMenuButton"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Cuenta y Listas
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <h6><strong>Mi cuenta</strong></h6>
                                    <ul>
                                        <li><a href="">Tu cuenta</a></li>
                                        <li><a href="">Tus pedidos</a></li>
                                        <li><a href="">Tus listas</a></li>
                                        <li><a href="">Tus recomendaciones</a></li>
                                    </ul>
                                    <button type="button" class="btn btn-warning text-white">Ir a mi cuenta</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- pedidos -->
                    <div class="col-md-3 ptop-1 pl-2">
                        <button type="button" class="dropdown-toggle tabDropdown" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false" id="orders">Pedidos</button>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="orders">
                            <h6><strong>Mis órdenes</strong></h6>
                            <p>Aquí podrás revisar el estado de tus órdenes</p>
                            <button type="button" class="btn btn-warning text-white">Seguimiento de mi orden</button>
                        </div>
                    </div>
                    <!-- carrito -->
                    <div class="col-md ptop-2 pl-4">
                        <div class="row">
                            <a href="" class="text-light font-weight-bold">
                                <i class="fas fa-shopping-cart"></i>
                                <span>Carrito</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@yield ('index')

<section id="footer" class="mt-3">
    <div class="container-fluid">
        <!-- newsletter -->
        <div class="row newsletter text-uppercase p-5 justify-content-center align-items-center">
            <div class="col-12 col-md-4 text-center text-white-50">
                <span id="subs">subscríbete a <strong>nuestra newsletter!</strong></span>
            </div>
            <div class="col-12 col-md-5">
                <div class="input-group text-capitalize">
                    <div class="d-flex flex-column justify-content-center pt-3" id="subs2">
                        <input type="text" class="form-control mt-2 rounded" placeholder="Escribe tu correo aquí..."
                            aria-describedby="button-addon4" id="newsletterInput">
                        <label for="newsletterInput" class="mt-1">
                            <input class="form-check-input" type="checkbox" id="gridCheck1">
                            <label class="form-check-label" for="gridCheck1">
                                <span class="text-white-50 ml-4 pt-2">Acepto la <a href="#" class="text-warning">política
                                        de Privacidad de Datos Personales</a></span>
                            </label>
                        </label>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="input-group-append" id="button-addon4">
                    <button class="btn btn-block btn-outline-secondary m-1 rounded text-white-50" type="button">Ofertas
                        Hombre</button>
                    <button class="btn btn-block btn-outline-secondary m-1 rounded text-white-50" type="button">Ofertas
                        Mujer</button>
                </div>
            </div>
        </div>
        <!-- mapa -->
        <div class="row map text-white-50 pt-3 d-none d-md-flex justify-content-around">
            <!-- opcion 1 -->
            <div>
                <h5>Compra con Confianza</h5>
                <ul>
                    <li><a href="#">Opción 1</a></li>
                    <li><a href="#">Opción 1</a></li>
                    <li><a href="#">Opción 1</a></li>
                    <li><a href="#">Opción 1</a></li>
                    <li><a href="#">Opción 1</a></li>
                </ul>
            </div>
            <!-- opcion 2 -->
            <div>
                <h5>Sobre Shoptivate</h5>
                <ul>
                    <li><a href="#">Opción 1</a></li>
                    <li><a href="#">Opción 1</a></li>
                    <li><a href="#">Opción 1</a></li>
                    <li><a href="#">Opción 1</a></li>
                    <li><a href="#">Opción 1</a></li>
                </ul>
            </div>
            <!-- opcion 3 -->
            <div>
                <h5>Mapa del Sitio</h5>
                <ul>
                    <li><a href="#">Opción 1</a></li>
                    <li><a href="#">Opción 1</a></li>
                    <li><a href="#">Opción 1</a></li>
                    <li><a href="#">Opción 1</a></li>
                    <li><a href="#">Opción 1</a></li>
                    <li><a href="#">Opción 1</a></li>
                    <li><a href="#">Opción 1</a></li>
                </ul>
            </div>
            <!-- medios de pago -->
            <div class="brandsWFS">
                <!-- marcas -->
                <h5>Medios de Pago</h5>
                <div class="row p2pays">
                    <a href="#"><span class="br-visa-gray"></span></a>
                    <a href="#"><span class="br-paypal-gray"></span></a>
                    <a href="#"><span class="br-mastercard-gray"></span></a>
                </div>
                <!-- redes -->
                <h5 class="mt-3">Síguenos</h5>
                <div class="row pl-3">
                    <a href="#"><span class="br-twitter-gray"></span></a>
                    <a href="#"><span class="br-instagram-gray"></span></a>
                    <a href="#"><span class="br-whatsapp-gray"></span></a>
                </div>
            </div>
        </div>
        <!-- mapa móvil -->
        <div class="row map text-white-50 d-md-none">
            <button class="btn-map col-12" type="button" data-toggle="collapse" data-target="#compra"
                aria-expanded="false" aria-controls="compra">
                Compra con confianza <span class="ml-auto"></span>
            </button>
            <div class="collapse pt-1" id="compra">
                <ul>
                    <li><a href="#">Opción 1</a></li>
                    <li><a href="#">Opción 1</a></li>
                    <li><a href="#">Opción 1</a></li>
                </ul>
            </div>
            <button class="btn-map col-12" type="button" data-toggle="collapse" data-target="#sobre"
                aria-expanded="false" aria-controls="sobre">
                Sobre Shoptivate <span class="ml-auto"></span>
            </button>
            <div class="collapse pt-1" id="sobre">
                <ul>
                    <li><a href="#">Opción 1</a></li>
                    <li><a href="#">Opción 1</a></li>
                    <li><a href="#">Opción 1</a></li>
                </ul>
            </div>
            <button class="btn-map col-12" type="button" data-toggle="collapse" data-target="#mas"
                aria-expanded="false" aria-controls="mas">
                Más sobre Shoptivate <span class="ml-auto"></span>
            </button>
            <div class="collapse pt-1" id="mas">
                <ul>
                    <li><a href="#">Opción 1</a></li>
                    <li><a href="#">Opción 1</a></li>
                    <li><a href="#">Opción 1</a></li>
                </ul>
            </div>
            <div class="col-12 pt-3">
                <!-- marcas -->
                <h6>Medios de Pago</h6>
                <div class="row p2pays pt-2">
                    <a href="#"><span class="br-visa-gray"></span></a>
                    <a href="#"><span class="br-paypal-gray"></span></a>
                    <a href="#"><span class="br-mastercard-gray"></span></a>
                </div>
            </div>
            <div class="col-12">
                <!-- redes -->
                <h6>Síguenos</h6>
                <div class="row pt-2">
                    <div class="col-11">
                        <a href="#"><span class="br-twitter-gray"></span></a>
                        <a href="#"><span class="br-instagram-gray"></span></a>
                        <a href="#"><span class="br-whatsapp-gray"></span></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- marca -->
        <div class="row foot p-4 justify-content-center d-none d-md-flex">
            <span class="text-white-50">Tiendas Peruanas S.A. Todos los derechos reservados. Av. Aviación 2405 Piso 3,
                San Borja</span>
        </div>
    </div>
</section>
@yield ('footer')

@stop
