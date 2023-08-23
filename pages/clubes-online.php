<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- favicon -->
    <link rel="shortcut icon" href="../img/logo-pelota.png">

   <!-- iconos -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    
    <!-- bootsrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <link rel="stylesheet" href="../styles/estilos.css">
    

    
    <title>Padel World - Club</title>


    
</head>
<body>
	
</body>
</html>

</head>
<body class="body-jugadores">


  <!-- NAV -->
  <nav class="navbar navbar-dark navbar-expand-lg" style="background-color: #040738;">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><img src="../img/logo-pelota.png" alt="" srcset="" width=" 35px"></a> <!-- modificar con css, cprregir detaslle -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item"><!-- modif agregar links a paginas -->
            <a class="nav-link active" aria-current="page" href="../index.html">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../pages/jugadores.html">Jugadores</a>
          </li>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../pages/clubes.html">Clubes</a>
        </li>
        </li>
          <li class="nav-item">
            <a class="nav-link" href="../pages/profesores.html">Profesores</a>
          </li>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../pages/torneos.html">Torneos</a>
        </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Otros
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="../pages/novedades.html">Novedades</a></li>
              <li><a class="dropdown-item" href="../pages/sobre-nosotros.html">Sobre nosotros</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Contacto</a></li>
            </ul>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2 flex-grow-1" type="search" placeholder="Ingrese su busqueda" aria-label="Search">
          <button class="btn btn-danger btn-enviar" type="submit"><i class="bi bi-search"></i></button>         
        </form>
        
        <!-- icono user -->
        <div class="nav-item dropdown ms-3">  <!-- modif consultar profe como hacer con el icono user   -->
          <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="bi bi-person-circle display-6"></i>
          </a>
          <ul class="dropdown-menu dropdown-menu-end">
            <li><a class="dropdown-item" href="#">Iniciar sesión</a></li>
            <li><a class="dropdown-item" href="#">Registrarse</a></li>
          </ul>
        </div>
        
        

      </div>
    </div>
  </nav>
  

  
  
  

  <!-- PERFIL JUGADOR -->
  <div class="container mt-4">
    
    <div class="row d-flex justify-content-center">
        
        <div class="col-md-12"> 
            <div class="card py-5">                
     
                <div class="text-center mt-1">
                    <span class="bg-secondary p-1 px-4 rounded text-white">MI CLUB</span>
                 
                    
                    <h2 class="mt-2 mb-0">Nombre del club </h2>

                    <h6 class="mt-2 mb-0">Cordoba, Argentina</h6>                 
                    <div class="px-3 mt-2">
                          
                    
                    </div>
                    
                     <ul class="social-list">
                        <li><i class="bi bi-facebook"></i></li>
                        <li><i class="bi bi-whatsapp"></i></li>
                        <li><i class="bi bi-instagram"></i></li>

                    </ul>
                    
                    <div class="buttons">
                        
                      <a href="../pages/club-reg.php"> <button class="btn btn-outline-success px-4">Editar <i class="bi bi-pencil-square"></i></button></a>
                    </div>            
                </div>           
            </div>      
        </div>       
    </div> 

    <div class="container">
      <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi obcaecati quidem tempore ad saepe cum optio, at aut, inventore ipsam assumenda eveniet placeat praesentium. Doloremque id blanditiis magni assumenda? Expedita?</h2>
    </div>


<!-- tarjetas jugadores -->
<div class="container JUGADOR">
  <div class="row ">
    <div class="col-md-4 ">
      <div class="card  ">
        <img src="../img/fondo-padel3.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">HORARIOS</h5>
          <p class="card-text">Un texto de ejemplo rápido para colocar cerca del título de la tarjeta y componer la mayor parte del contenido de la tarjeta.</p>
          <a href="#" class="btn btn-primary">Ir a algún lugar</a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card">
        <img src="../img/fondo-padel2.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">PRECIOS</h5>
          <p class="card-text">Un texto de ejemplo rápido para colocar cerca del título de la tarjeta y componer la mayor parte del contenido de la tarjeta.</p>
          <a href="#" class="btn btn-primary">Ir a algún lugar</a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card">
        <img src="../img/pxfuel.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">TORNEOS Y MAS</h5>
          <p class="card-text">Un texto de ejemplo rápido para colocar cerca del título de la tarjeta y componer la mayor parte del contenido de la tarjeta.</p>
          <a href="#" class="btn btn-primary">Ir a algún lugar</a>
        </div>
      </div>
    </div>
 
   
      </div>
    </div>
  </div>
</div>


<!-- menu jugodores -->
<DIV class="container mt-4">
<div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Acordeón artículo #1
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>Este es el cuerpo del acordeón del primer elemento.</strong> Se muestra de forma predeterminada, hasta que el complemento de colapso agrega las clases apropiadas que usamos para diseñar cada elemento. Estas clases controlan la apariencia general, así como la visualización y ocultación a través de transiciones CSS. Puedes modificar cualquiera de esto con CSS personalizado o sobrescribir nuestras variables predeterminadas. También vale la pena señalar que casi cualquier php puede ir dentro de <code>.accordion-body</code>, aunque la transición limita el desbordamiento.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Acordeón artículo #2
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>Este es el cuerpo del acordeón del segundo elemento.</strong> Está oculto de manera predeterminada, hasta que el complemento de Collapse agregue las clases apropiadas que usamos para diseñar cada elemento. Estas clases controlan la apariencia general, así como la visualización y ocultación a través de transiciones CSS. Puedes modificar cualquiera de esto con CSS personalizado o sobrescribir nuestras variables predeterminadas. También vale la pena señalar que casi cualquier HTML puede ir dentro de <code>.accordion-body</code>, aunque la transición limita el desbordamiento.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        Acordeón artículo #3
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>Este es el cuerpo del acordeón del tercer elemento.</strong> Está oculto de manera predeterminada, hasta que el complemento Collapse agregue las clases apropiadas que usamos para diseñar cada elemento. Estas clases controlan la apariencia general, así como la visualización y ocultación a través de transiciones CSS. Puedes modificar cualquiera de esto con CSS personalizado o sobrescribir nuestras variables predeterminadas. También vale la pena señalar que casi cualquier HTML puede ir dentro de <code>.accordion-body</code>, aunque la transición limita el desbordamiento.
      </div>
    </div>
  </div>
</div>
</DIV>


<DIV class="container">
<div class="calendar">
    <div class="calendar__info">
        <div class="calendar__prev" id="prev-month">&#9664;</div>
        <div class="calendar__month" id="month"></div>
        <div class="calendar__year" id="year"></div>
        <div class="calendar__next" id="next-month">&#9654;</div>
    </div>

    <div class="calendar__week">
        <div class="calendar__day calendar__item">Mon</div>
        <div class="calendar__day calendar__item">Tue</div>
        <div class="calendar__day calendar__item">Wed</div>
        <div class="calendar__day calendar__item">Thu</div>
        <div class="calendar__day calendar__item">Fri</div>
        <div class="calendar__day calendar__item">Sat</div>
        <div class="calendar__day calendar__item">Sun</div>
    </div>

    <div class="calendar__dates" id="dates"></div>
</div>
</DIV>

<script src="/js/scrips.js"></script>


<!-- SECCION FOOTER -->
<footer>
  
  <footer>
    <div class="redes" >
      <p class="footer-parrafo">© PADEL WORLD - Todos los derechos reservados 2023</p>
        <a href="https://www.linkedin.com/in/fernandez-christe/" target="_blank" style="display: inline-block;"><i class="bi bi-facebook"></i></a>
        <a href="https://github.com/GeraFernandez" target="_blank" style="display: inline-block;"><i class="bi bi-instagram"></i></a>
        <a href="https://github.com/GeraFernandez" target="_blank" style="display: inline-block;"><i class="bi bi-twitter"></i></a>
    </div>
  </footer>

    
    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>