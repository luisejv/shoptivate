@extends('header')

@section('index')
<section id="slider-content">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <!-- ruleta -->
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <!-- imagenes -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100 slider1 img-fluid">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 slider1 img-fluid">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 slider1 img-fluid">
            </div>
        </div>
        <!-- controles manuales -->
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>
@yield('main-content')

<script type="text/javascript">
        // When the user scrolls the page, execute myFunction 
        window.onscroll = function () {
            myFunction()
        };

        // Get the navbar
        var navbar = document.getElementById("navbarSticky");

        // Get the offset position of the navbar
        var sticky = navbar.offsetTop;

        // Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
        function myFunction() {
            if (window.pageYOffset >= sticky) {
                navbar.classList.add("sticky")
            } else {
                navbar.classList.remove("sticky");
            }
        }

</script>
@stop
