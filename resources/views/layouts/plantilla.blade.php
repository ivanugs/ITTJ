<!doctype html>
<html lang="en">
    <head>
        <title>@yield('title')</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
        <link 
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        >
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <script src="https://cdn.tailwindcss.com"></script>
        
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    </head>
    <body>
        <header>
            <x-navbar />
        </header>
        <main>
            @yield('content')
        </main>
        <footer>
            <div class="container footer-custom p-6 mt-5">
                <div class="row justify-content-center">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-3 col-12">
                            <h5 class="text-white lead mb-2 fw-medium">Dirección</h5>
                            <p class="text-white lead">Km. 10 Carretera Tlajomulco-San Miguel Cuyutlán, Cto. Vicente Fernández Gómez, 45640 Tlajomulco de Zúñiga, Jal.</p>
                            <p class="my-5"></p>
                            <h5 class="text-white lead fw-medium">Contacto</h5>
                            <p class="text-white lead">
                                <a href="mailto:webmaster@tlajomulco.tecnm.mx">webmaster@tlajomulco.tecnm.mx</a>
                                <br> 
                                Conmutador: 33 29 02 11 30 - 47 
                                <br> 
                                Contamos con 17 líneas de atención					
                            </p> 
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-3 col-xs-12">
                            <h5 class="text-white lead fw-medium mb-2">Enlaces</h5>
                            <a class="text-white lead" href="//portaltransparencia.gob.mx/buscador/search/search.do?method=begin">Portal de Obligaciones de Transparencia</a><br>
                            <a class="text-white lead" href="//inicio.ifai.org.mx/SitePages/ifai.aspx">INAI</a><br>
                            <a class="text-white lead" href="https://forms.gle/DFKD4pXipF3qaadx9" target="new">Buzón de Quejas</a><br>
                            <p class="my-5"></p>
                            <p class="text-white lead mb-2 fw-medium">Número de visitas <span id="currentYear"></span>:</p>
                            <!-- Código para el contador de visitas-->
                            <div id="sfcxeq4dejh48xa5rfj1nlldahbxdn9cck8">
                                <a href="https://www.contadorvisitasgratis.com/geozoom.php?c=xeq4dejh48xa5rfj1nlldahbxdn9cck8&amp;base=counter7&amp;type_clic=1" target="_blank">
                                    <img border="0" src="https://counter7.contadorvisitasgratis.com/private/counter.php?c=xeq4dejh48xa5rfj1nlldahbxdn9cck8&amp;init=1711912203136&amp;init_freecounterstat=1&amp;library=library_counters&amp;coef=1&amp;type=163&amp;lenght=5&amp;pv=0" alt="clic para ver los detalles de las visitas este sitio" title="clic para ver los detalles de las visitas este sitio">
                                </a>
                                    <img style="border:none" src="https://counter7.optistats.ovh:4433/private/pointeur/pointeur.gif?|xeq4dejh48xa5rfj1nlldahbxdn9cck8|1080*1920|es|24|1711912203|bb402768702aea02ded2f3cfc9e69111|computer|windows|10|chrome|123|Mexico|MX|20.63810|-103.34800|Guadalajara|Megacable|-21600|1|1711912203|ok|http%3A//www.tlajomulco.tecnm.mx/index.php|http%3A//www.tlajomulco.tecnm.mx/index.php|js|177.245.223.162|||&amp;init=1711912203136" border="0" width="1" height="1">
                            </div>
                            <script type="text/javascript" src="https://counter7.optistats.ovh/private/counter.js?c=xeq4dejh48xa5rfj1nlldahbxdn9cck8&amp;down=async" async=""></script>
                            <br>
                            <noscript>
                                <a href="" title="contador de visitas gratis">
                                    <img src="https://counter7.optistats.ovh/private/contadorvisitasgratis.php?c=xeq4dejh48xa5rfj1nlldahbxdn9cck8" border="0" title="contador de visitas gratis" alt="contador de visitas gratis">
                                </a>
                            </noscript>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-3 col-xs-12 d-flex align-items-center justify-content-center">
                            <iframe 
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4476.824704119325!2d-103.42362218030623!3d20.442916284763754!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd31bc9f89150c788!2sInstituto%20Tecnologico%20de%20Tlajomulco!5e0!3m2!1ses-419!2smx!4v1607025672438!5m2!1ses-419!2smx" 
                                width="400" 
                                height="300" 
                                frameborder="0" 
                                style="border:0;" 
                                allowfullscreen="" 
                                aria-hidden="false" 
                                tabindex="0">
                            </iframe>
                        </div>
                        <div class="row mt-3 pt-3 border-top">
                            <div class="col-12">
                                <p class="text-white text-center lead">
                                    © Copyright 2024 TecNM / ITTJ - Todos los Derechos Reservados
                                </p>
                                <p class="text-white text-center lead">
                                    Última actualización: 10/Enero/2024
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
        <script>
            // Obtiene el elemento span
            var currentYearElement = document.getElementById("currentYear");
            // Obtiene el año actual
            var currentYear = new Date().getFullYear();
            // Asigna el año actual al elemento span
            currentYearElement.textContent = currentYear;
        </script>
        
    </body>
</html>
