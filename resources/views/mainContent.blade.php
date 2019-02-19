@extends('content')

@section('main-content')

<section id="main-content" class="text-uppercase pt-3">
    <!-- contenedor productos -->
    <div class="container-fluid mb-5 pb-3" id="container1">
        <h4 class="font-weight-bold px-3">Nuestras <span class="text-orange">Ofertas</span></h4>
        <div class="contain pl-5 pt-2">
            <img class="p1">
            <img class="p2">
            <img class="p3">
            <img class="p4 d-none d-md-block">
        </div>
    </div>
    <!-- sticky bar -->
    <div id="navbarSticky" class="row justify-content-around align-items-center">
        <a href="#" class="active"><i class="fas fa-mobile-alt"></i><span class="d-none d-md-inline pl-2">Categoría</span></a>
        <a href="#"><i class="fas fa-mobile-alt"></i><span class="d-none d-md-inline pl-2">Categoría</span></a>
        <a href="#"><i class="fas fa-mobile-alt"></i><span class="d-none d-md-inline pl-2">Categoría</span></a>
        <a href="#"><i class="fas fa-mobile-alt"></i><span class="d-none d-md-inline pl-2">Categoría</span></a>
        <a href="#"><i class="fas fa-mobile-alt"></i><span class="d-none d-md-inline pl-2">Categoría</span></a>
        <a href="#"><i class="fas fa-mobile-alt"></i><span class="d-none d-md-inline pl-2">Categoría</span></a>
    </div>
    <!-- contenedor productos 2 -->
    <div class="container-fluid pt-4" id="container2">
        <h4 class="font-weight-bold px-3">Recomendados <span class="text-orange">Teléfonos</span></h4>
        <div class="contain2 pl-5 pt-2">
            <img class="p5">
            <img class="p6">
            <img class="p7">
            <img class="p8">
            <img class="p15">
        </div>
    </div>
    <!-- contenedor productos 3 -->
    <div class="container-fluid d-none d-md-block" id="container3">
        <h4 class="font-weight-bold px-3">Recomendados <span class="text-orange">Computadoras</span></h4>
        <div class="contain3 pl-5 pt-3">
            <img class="p9">
            <img class="p10">
            <img class="p11">
        </div>
        <div class="contain4 pl-5">                
            <img class="p12">
            <img class="p13">
            <img class="p14">
        </div>
    </div>
</section>

@stop