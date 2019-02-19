@extends('header')

@section('footer')
<section id="footer" class="d-none d-sm-block">
    <div class="container-fluid">
        <!-- newsletter -->
        <div class="row newsletter text-uppercase p-5 justify-content-center align-items-center">
            <div class="col-4 text-right text-white-50">
                <span>subscríbete a <strong>nuestra newsletter!</strong></span>
            </div>
            <div class="col-4">
                <div class="input-group text-capitalize">
                    <div class="d-flex flex-column justify-content-center pt-3">
                        <input type="text" class="form-control mt-2 rounded" placeholder="Escribe tu correo aquí..." aria-describedby="button-addon4" id="newsletterInput">
                        <label for="newsletterInput" class="mt-1">
                            <input class="form-check-input" type="checkbox" id="gridCheck1"> 
                            <label class="form-check-label" for="gridCheck1">
                                <span class="text-white-50 ml-4 pt-2">Acepto la <a href="#" class="text-warning">política de Privacidad de Datos Personales</a></span>   
                            </label>
                        </label>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="input-group-append" id="button-addon4">
                    <button class="btn btn-outline-secondary m-2 rounded text-white-50" type="button">Ofertas Hombre</button>
                    <button class="btn btn-outline-secondary m-2 rounded text-white-50" type="button">Ofertas Mujer</button>
                </div>
            </div>
        </div>
        <!-- mapa -->
        <div class="row map text-white-50 pt-3 px-5">
            <!-- opcion 1 -->
            <div class="col-3">
                <h5 class="font-weight-bold">Compra con Confianza</h5>
                <ul>
                    <li><a href="#">Opción 1</a></li>
                    <li><a href="#">Opción 1</a></li>
                    <li><a href="#">Opción 1</a></li>
                    <li><a href="#">Opción 1</a></li>
                    <li><a href="#">Opción 1</a></li>
                </ul>
            </div>
            <!-- opcion 2 -->
            <div class="col-2">
                <h5 class="font-weight-bold">Sobre Shoptivate</h5>
                <ul>
                    <li><a href="#">Opción 1</a></li>
                    <li><a href="#">Opción 1</a></li>
                    <li><a href="#">Opción 1</a></li>
                    <li><a href="#">Opción 1</a></li>
                    <li><a href="#">Opción 1</a></li>
                </ul>
            </div>
            <!-- opcion 3 -->
            <div class="col-2">
                <h5 class="font-weight-bold">Mapa del Sitio</h5>
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
            <div class="col">
                <!-- marcas -->
                <h5 class="font-weight-bold">Medios de Pago</h5>
                <div class="row p2pays">
                    <img class="visa">
                    <img class="paypal">
                    <img class="mercadopago">
                    <img class="mastercard">
                </div>
                <!-- redes -->
                <h5 class="mt-3 font-weight-bold">Síguenos</h5>
                <div class="row">
                    <div class="col-8">
                        <a href="#"><img class="twitter"></a>
                        <a href="#"><img class="instagram"></a>
                        <a href="#"><img class="whatsapp"></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- marca -->
        <div class="row foot p-4 justify-content-center">
            <span class="text-white-50">Tiendas Peruanas S.A. Todos los derechos reservados. Av. Aviación 2405 Piso 3, San Borja</span>
        </div>
    </div>
</section>
@stop