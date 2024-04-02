@extends('layouts.plantilla')

@section('title', 'Resumen del proyecto')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
            <h1 class="text-center pt-3 pb-3 mb-4 h1 border-bottom fw-light">Resumen del proyecto</h1>
            <article class="text-center fs-5">
                <p class="mb-2">
                    El Herbario del Instituto Tecnológico de Tlajomulco cuenta con aproximadamente 1500 especies de plantas distribuidas en 4000 ejemplares debidamente montadas y etiquetadas. 🌿
                    Se encuentra registrado internacionalmente con el Código de Herbario<strong> CREG</strong> del <strong>Index Herbariorum</strong> y es de relevante importancia por ser reconocido como uno de los primeros que se forman en el Estado de Jalisco. Cuenta con ejemplares tipo y topotipo de la región.
                </p>
                <img class="mx-auto my-3" style="width:500px;" src="{{asset('images/about/collage.png')}}" alt="Banner herbario">

                <p class="mb-5">
                    Este museo apoya en la caracterización de plantas a nivel nacional e internacional pues una de las primeras actividades a realizar en los trabajos de investigación agrícola o biológica relacionadas con especies vegetales, es la correcta identificación de las plantas seguidas de la corroboración de los ejemplares lo cual se lleva a cabo sólo con la visita a algún Herbario.
                </p>

                <p class="mb-5">
                    Los avances en la tecnología a través del empleo del internet, ha favorecido la búsqueda de información requerida en la investigación. Esta actividad no está ajena al mundo de la Botánica y dichas herramientas pueden estar al alance en cualquier parte del mundo. El consultar un Herbario Virtual da como ventajas una revisión de ejemplares secos, apoyo en la identificación, reducción en costos de traslado, información a nivel internacional y disposición de información a todas aquellas personas relacionadas con el mundo de las plantas.
                </p>

                <p class="mb-5">
                    Únete a nosotros en este emocionante viaje de descubrimiento y conservación. ¡Explora, aprende y contribuye al conocimiento botánico en el Herbario Virtual del Instituto Tecnológico de Tlajomulco!
                </p>
            </article>
        </div>
    </div>
</div>
@endsection