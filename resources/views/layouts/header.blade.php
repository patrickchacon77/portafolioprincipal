<header>
{{-- barra de navegación  --}}
<div class="container-fluid  min-vh-100 py-0" id="header-fondo">
    <div class="container fs-5 d-flex px-2 py-0 my-2 align-center justify-content-left  fixed-top sticky-md-top">
        {{-- se incluye la barra de navegación --}}
        @include('layouts.nav')
    </div>
    {{-- header-main --}}
    <div class="container my-4 py-5">
    <div class="container">
        <div class="row">
            <div class="col-12  col-md-6">
                <div class="card border-0">
                    <H2 class="fs-4 fw-lighter pt-3">¡Hola a todos!</H2>
                    <H1 class="fs-1 pt-1">Yo soy Patrick Chacón</H1>
                    <div class="d-inline-flex  p-0 pt-2">
                    <span class="escribir1"></span>
                    <p class="text-uppercase fs-4"><span class="typed"></span></p>
                    <div class="titulo" id="cadenas-texto">
                        <p class="text-uppercase fs-4"><i class="profesion">Desarrollador</i></p>
                        <p class="text-uppercase fs-4"><i class="profesion">Diseñador</i></p>
                        <p class="text-uppercase fs-4"><i class="profesion">Ingeniero</i></p>
                        <p class="text-uppercase fs-4"><i class="profesion">Docente</i></p>
                    </div>
                    <span class="escribir2"></span>
                    </div>

                    <p class="text-uppercase fs-5  fw-lighter pt-2">Full-stack</p>
                    <div class="container-fluid p-0 pt-2">
                        <a href="https://www.facebook.com/Patrickchacon7/" class="me-4"><img id="icono-facebook"></a>
                        <a href="" class="me-4"><img id="icono-intagram"></a>
                        <a href="" class="me-4"><img id="icono-linkerin"></a>
                    </div>
                </div>
            </div>
            <div class="col-12  col-md-6 header-columan2">
                <div class="d-flex  sm-flex-row-reverse">
                    <div class="col-">
                        <div class="card-img-top ">
                            <img class="" id="imagen-objeto1">
                            <img id="imagen-objeto2">
                            <img id="imagen-principal">
                            <img id="imagen-objeto3">
                            <img id="imagen-objeto4">
                            <img id="imagen-objeto5">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

</header>