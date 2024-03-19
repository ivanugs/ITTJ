<div class="header-gob-custom">
    <div class="">
        <p class="title-custom">Herbario Virtual
            <span class="subt-custom">INSTITUTO TECNOLOGICO DE TLAJOMULCO DE ZUÑIGA, JALISCO.</span> 
        </p>
    </div>
    <img style="padding-left:20px; align-self: flex-end;" src="{{ asset('images/header/logo.png') }}" alt="TecNM" class="img-fluid" loading="lazy">
    <a class="" href="//www.tlajomulco.tecnm.mx/" target="_blank">
        <img style="padding-left:20px; align-self: flex-end;" src="{{ asset('images/header/pleca-ittj.png') }}" alt="TecNM" class="img-fluid" loading="lazy">
    </a>
</div>


<nav class="navbar navbar-expand-xl fixed-top p-2  navbar-custom">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title offcanvas-title-custom" id="offcanvasNavbarLabel">Menu</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body offcanvas-body-custom">
            <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
                <li class="nav-item nav-item-custom">
                    <a class="nav-link mx-lg-5 a-custom" href="{{route('home')}}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                            <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5z"/>
                        </svg>
                    </a>
                </li>
                <li class="nav-item nav-item-custom">
                    <a class="nav-link mx-lg-5 a-custom" href="{{route('planta-familias.index')}}">Ordenado por Nombre</a>
                </li>
                <li class="nav-item nav-item-custom">
                    <a class="nav-link mx-lg-5 a-custom" href="#">Ordenado por Familia</a>
                </li>
                <li class="nav-item nav-item-custom">
                    <a class="nav-link mx-lg-5 a-custom" href="#">Biblioteca</a>
                </li>
                {{-- <li class="nav-item nav-item-custom">
                    <a class="nav-link mx-lg-5 a-custom" href="#">Malezas</a>
                </li> --}}
                <li class="nav-item nav-item-custom dropdown">
                <a class="nav-link dropdown-toggle mx-lg-5 a-custom" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Acerca Del Herbario
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Resumen del Proyecto</a></li>
                    <li><a class="dropdown-item" href="#">Antecedentes</a></li>
                    <li><a class="dropdown-item" href="#">Importancia</a></li>
                    <li><a class="dropdown-item" href="#">Agradecimientos</a></li>
                    <li><a class="dropdown-item" href="#">Equipo</a></li>
                </ul>
                <li class="nav-item nav-item-custom">
                    <a class="nav-link mx-lg-5 a-custom" href="{{route('login')}}">Iniciar Sesion</a>
                </li>
                
            </ul>
        </div>
        </div>
    </div>
</nav>
