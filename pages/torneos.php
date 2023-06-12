<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- favicon -->
    <link rel="shortcut icon" href="/img/logo-pelota.png">

   <!-- iconos -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    
    <!-- bootsrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <link rel="stylesheet" href="/styles/estilos.css">

    
    <title>Padel World - Torneos</title>
</head>
<body >

  <!-- NAV -->
  <nav class="navbar navbar-dark navbar-expand-lg" style="background-color: #040738;">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><img src="/img/logo-pelota.png" alt="" srcset="" width=" 35px"></a> <!-- modificar con css, cprregir detaslle -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item"><!-- modif agregar links a paginas -->
            <a class="nav-link" aria-current="page" href="/index.php">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/pages/jugadores.php">Jugadores</a>
          </li>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/pages/clubes.php">Clubes</a>
        </li>
        </li>
          <li class="nav-item">
            <a class="nav-link" href="/pages/profesores.php">Profesores</a>
          </li>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="/pages/torneos.php">Torneos</a>
        </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Otros
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/pages/novedades.html">Novedades</a></li>
              <li><a class="dropdown-item" href="/pages/sobre-nosotros.html">Sobre nosotros</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#contacto">Contacto</a></li>

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
            <li><a class="dropdown-item" href="/pages/login.php">Iniciar sesión</a></li>
            <li><a class="dropdown-item" href="/pages/registrarse.php">Registrarse</a></li>
          </ul>
        </div>
        
        

      </div>
    </div>
  </nav>

  <!-- torneos -->
<main id="torneo-offline">
  <h1 class="title">TORNEOS</h1>
  <div class="acceso-login">
    <a class="login" href="">Iniciar sesion</a>
    <a class="login" href="">Registrarse</a>
  </div>
</main>
  

<main class="torneos-main ">
  <h3 class="title">Tus torneos, más simples</h3>
  <p class="content">PADEL WORD te ayuda a centralizar la gestión de tus torneos en un solo lugar. Utilizamos los tipos de torneos más comunes pero brindamos la flexibilidad suficiente para que puedas migrar tus torneos a nuestra plataforma rápidamente.</p>
</main>

  <section class="galeria">
    <img src="/img/TORNEOS1.PNG" alt="">
    <img src="/img/TORNEOS2.PNG" alt="">
    <img src="/img/TORNEOS3.PNG" alt="">
    <img src="/img/TORNEOS4.PNG" alt="">
    <img src="/img/TORNEOS5.PNG" alt="">
    <img src="/img/TORNEOS6.PNG" alt="">
    <img src="/img/TORNEOS7.PNG" alt="">
    <img src="/img/TORNEOS8.PNG" alt="">

  </section>
    

 <!-- SECCION FUNCIONALIDADES PRINCIPALES -->
<section id="torneos-funcionalidades">
  <div class="funciones uno ">

    <h2>Cuadros automáticos</h2>
    <p>Generá los cuadros de tus torneos automáticamente: ligas todo contra todos o torneo por zonas o eliminacion directa</p>
  </div>


  <div class="funciones dos">
    <h2>Calendario de partidos</h2>
    <p>Todos los partidos de tu Circuito disponibles en PADEL WORD, tus torneos al alcance de todos..</p>

  </div>

  <div class="funciones">
    <h2>Alertas y Notificaciones</h2>
    <p>Notificaciones para jugadores de próximos partidos, noticias del circuito, nuevas etapas, etc.</p>
  </div>

  <div class="funciones">
    <h2>Inscripción Online</h2>
    <p>Los jugadores pueden subir sus resultados a través de nuestra aplicación móvil.</p>
    
  </div>



</section>

 
         

   

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