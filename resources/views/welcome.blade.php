@extends('layouts.app')

@section('content')
    <div id="slider" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            @foreach ($slides as $index => $slide)
                <li data-target="#slider" data-slide-to="{{ $index }}" class="{{ $index === 0 ? 'active' : '' }}"></li>
            @endforeach
        </ol>
        <div class="carousel-inner">
            @foreach ($slides as $index => $slide)
                <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                    <img src="{{ asset($slide['image']) }}" alt="{{ $slide['title'] }}">
                    <div class="carousel-caption">
                       
                    </div>
                </div>
            @endforeach
        </div>
        <a class="carousel-control-prev" href="#slider" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#slider" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Siguiente</span>
        </a>
    </div>

    <div class="jumbotron">
        <h1>Bienvenido a Secretos De Cocina</h1>
        <p>El lugar donde los verdaderos secretos culinarios se comparten y se descubren. 
            Sumérgete en el fascinante mundo de la gastronomía y descubre recetas únicas, técnicas de cocina sorprendentes
            y consejos de expertos que te ayudarán a elevar tus habilidades culinarias a un nivel superior.</p>
    </div>

    <section class="seccion1" id="seccion1">
        <h2>Utensilios de Cocina Imprescindibles</h2>
        <p>En esta sección hablaremos sobre los utensilios de cocina que son imprescindibles para cualquier cocinero o cocinera.
        Veremos desde las ollas y sartenes básicas, hasta herramientas más especializadas que pueden hacer nuestra vida en 
        la cocina mucho más fácil.</p>
        <a href="https://www.elmueble.com/orden-limpieza-ahorro/25-utensilios-imprescindibles-tu-cocina_43776" class="button">Ir</a>
    </section>
      
    <section class="seccion2" id="seccion2">
        <h2>Recetas Fáciles y Saludables</h2>
        <p>En esta sección nos enfocaremos en recetas fáciles y saludables, perfectas para aquellos que quieren comer bien pero 
        no tienen mucho tiempo ni experiencia en la cocina. Aprenderás a preparar platos deliciosos con ingredientes simples y 
        accesibles.</p>
        <a href="https://www.cocinacaserayfacil.net/recetas-sanas-faciles" class="button">Ir</a>
    </section>
      
    <section class="otraseccion" id="otraseccion">
        <h2>Tips de Cocina para Principiantes</h2>
        <p>En esta sección te daremos algunos consejos prácticos para que tus aventuras en la cocina sean más exitosas. Aprenderás
        desde cómo elegir los ingredientes frescos hasta cómo armar una despensa bien equipada. Además, te daremos algunos
        trucos para preparar tus platos favoritos de manera más eficiente.</p>
        <a href="https://www.cuerpomente.com/blogs/gastronomia-consciente/trucos-cocina-principiantes_1389" class="button">Ir</a>
    </section>

    <div class="container">
        <h1 class="text-center">Recetas Populares</h1>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
            <div class="col">
            <div class="card h-100">
                <img src="https://images.pexels.com/photos/775583/pexels-photo-775583.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="card-img-top" alt="...">
                <div class="card-body">
                        <h3 class="card-title">Tarta de Fresa</h3>
                        <p class="card-text">La tarta de fresa es un postre delicioso con una base crujiente y un relleno jugoso de fresas frescas.</p>
                        <a href="https://www.recetasnestle.com.mx/recetas/postres-tarta-fresa" class="btn btn-primary">Ver Receta</a>
                </div>
            </div>
            </div>
            <div class="col">
            <div class="card h-100">
                <img src="https://images.pexels.com/photos/14737/pexels-photo.jpg?auto=compress&cs=tinysrgb&w=1600" class="card-img-top" alt="...">
                <div class="card-body">
                        <h3 class="card-title">Pasta en salsa de tomate</h3>
                        <p class="card-text">La pasta en salsa de tomate es un plato clásico con fideos y una deliciosa salsa de tomate.</p>
                        <a href="https://www.lamayorista.com.co/recetas/pasta-en-salsa-de-tomate" class="btn btn-primary">Ver Receta</a>
                </div>
            </div>
            </div>
            <div class="col">
            <div class="card h-100">
                <img src="https://images.pexels.com/photos/410648/pexels-photo-410648.jpeg?auto=compress&cs=tinysrgb&w=1600" class="card-img-top" alt="...">
                <div class="card-body">
                        <h3 class="card-title">Costilla al horno </h3>
                        <p class="card-text">Las costillas de cerdo horneadas son jugosas y sabrosas, cocinadas lentamente en el horno hasta que estén tiernas.</p>
                        <a href="https://www.comedera.com/como-hacer-costillas-al-horno/" class="btn btn-primary">Ver Receta</a>
                </div>
            </div>
            </div>
            <div class="col">
            <div class="card h-100">
                <img src="https://images.pexels.com/photos/56007/jause-eat-delicious-food-56007.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="card-img-top" alt="...">
                <div class="card-body">
                        <h3 class="card-title">Tabla de carnes y quesos</h3>
                        <p class="card-text">La tarta de fresa es un postre delicioso con una base crujiente y un relleno jugoso de fresas frescas.</p>
                        <a href="https://www.kiwilimon.com/receta/botanas/bocadillos-faciles/tabla-de-carnes-frias-y-quesos" class="btn btn-primary">Ver Receta</a>
                </div>
            </div>
            </div>
            <div class="col">
            <div class="card h-100">
                <img src="https://images.pexels.com/photos/1213710/pexels-photo-1213710.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="card-img-top" alt="...">
                <div class="card-body">
                        <h3 class="card-title">Ensalada Griega</h3>
                        <p class="card-text">La tarta de fresa es un postre delicioso con una base crujiente y un relleno jugoso de fresas frescas.</p>
                        <a href="https://www.hogarmania.com/cocina/recetas/ensaladas-verduras/ensalada-griega-3903.html" class="btn btn-primary">Ver Receta</a>
                </div>
            </div>
            </div>
            <div class="col">
            <div class="card h-100">
                <img src="https://images.pexels.com/photos/3535383/pexels-photo-3535383.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="card-img-top" alt="...">
                <div class="card-body">
                        <h3 class="card-title">Lomo al horno</h3>
                        <p class="card-text">La tarta de fresa es un postre delicioso con una base crujiente y un relleno jugoso de fresas frescas.</p>
                        <a href="https://www.cocinacaserayfacil.net/lomo-al-horno-receta/" class="btn btn-primary">Ver Receta</a>
                </div>
            </div>
            </div>
            <div class="col">
            <div class="card h-100">
                <img src="https://images.pexels.com/photos/1143754/pexels-photo-1143754.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="card-img-top" alt="...">
                <div class="card-body">
                        <h3 class="card-title">Tacos de aguacate</h3>
                        <p class="card-text">La tarta de fresa es un postre delicioso con una base crujiente y un relleno jugoso de fresas frescas.</p>
                        <a href="https://www.7diasdesabor.com/recetas/tacos-de-aguacate-con-cebolla/" class="btn btn-primary">Ver Receta</a>
                </div>
            </div>
            </div>
            <div class="col">
            <div class="card h-100">
                <img src="https://images.pexels.com/photos/1833333/pexels-photo-1833333.jpeg?auto=compress&cs=tinysrgb&w=1600" class="card-img-top" alt="...">
                <div class="card-body">
                        <h3 class="card-title">Ensalada de pepino y queso</h3>
                        <p class="card-text">La tarta de fresa es un postre delicioso con una base crujiente y un relleno jugoso de fresas frescas.</p>
                        <a href="https://www.recetasgratis.net/receta-de-ensalada-fresca-de-pepino-y-queso-62309.html" class="btn btn-primary">Ver Receta</a>
                </div>
            </div>
            </div>
            <div class="col">
            <div class="card h-100">
                <img src="https://images.pexels.com/photos/10942354/pexels-photo-10942354.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="card-img-top" alt="...">
                <div class="card-body">
                        <h3 class="card-title">Filete de pescado a la plancha</h3>
                        <p class="card-text">La tarta de fresa es un postre delicioso con una base crujiente y un relleno jugoso de fresas frescas.</p>
                        <a href="https://recetacubana.com/filete-de-pescado-a-la-plancha/" class="btn btn-primary">Ver Receta</a>
                </div>
            </div>
            </div>
            <div class="col">
            <div class="card h-100">
                <img src="https://images.pexels.com/photos/5638539/pexels-photo-5638539.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="card-img-top" alt="...">
                <div class="card-body">
                        <h3 class="card-title">Robalo apanado</h3>
                        <p class="card-text">La tarta de fresa es un postre delicioso con una base crujiente y un relleno jugoso de fresas frescas.</p>
                        <a href="https://www.colombia.com/gastronomia/recetas-colombianas/robalo-apanado-r150" class="btn btn-primary">Ver Receta</a>
                </div>
            </div>
            </div>
            <div class="col">
            <div class="card h-100">
                <img src="https://images.pexels.com/photos/5638540/pexels-photo-5638540.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="card-img-top" alt="...">
                <div class="card-body">
                        <h3 class="card-title">Postres</h3>
                        <p class="card-text">La tarta de fresa es un postre delicioso con una base crujiente y un relleno jugoso de fresas frescas.</p>
                        <a href="https://www.elmueble.com/recetas/postres-para-chuparse-dedos-comer-sin-culpa_44703" class="btn btn-primary">Ver Receta</a>
                </div>
            </div>
            </div>
            <div class="col">
            <div class="card h-100">
                <img src="https://images.pexels.com/photos/4001870/pexels-photo-4001870.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="card-img-top" alt="...">
                <div class="card-body">
                        <h3 class="card-title">Filete de res a la plancha</h3>
                        <p class="card-text">La tarta de fresa es un postre delicioso con una base crujiente y un relleno jugoso de fresas frescas.</p>
                        <a href="https://99recetas.com/res/filete-de-res-a-la-plancha/" class="btn btn-primary">Ver Receta</a>
                </div>
            </div>
            </div>
        </div>
        </div>
@endsection
