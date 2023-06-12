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
    

    
    <title>Padel World - Jugadores</title>


    
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
            <a class="nav-link " aria-current="page" href="../index.php">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="../pages/jugadores.php">Jugadores</a>
          </li>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../pages/clubes.php">Clubes</a>
        </li>
        </li>
          <li class="nav-item">
            <a class="nav-link" href="../pages/profesores.php">Profesores</a>
          </li>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../pages/torneos.php">Torneos</a>
        </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Otros
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="../pages/novedades.php">Novedades</a></li>
              <li><a class="dropdown-item" href="../pages/sobre-nosotros.php">Sobre nosotros</a></li>
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
            <li><a class="dropdown-item" href="../pages/login.php">Iniciar sesión</a></li>
            <li><a class="dropdown-item" href="../pages/registrarse.php">Registrarse</a></li>
          </ul>
        </div>
        
        

      </div>
    </div>
  </nav>

  

  

  <!-- PERFIL JUGADOR -->

<main id="jugador-offline">
  <h1 class="title">JUGADORES</h1>
  <div class="acceso-login">
    <a class="login" href="">Iniciar sesion</a>
    <a class="login" href="">Registrarse</a>
  </div>
</main>
  


<!-- CAJA BUSQUEDA -->
<section>  
  <div class="container">
    <div class="caja-busqueda">
      <div class="busqueda-ubicacion">
        <form class="row gx-2 gy-2 align-items-center mt-1 mb-1">
          <div class="col-sm-3">
            <label class="visually-hidden" for="specificSizeInputName">Club</label>
            <input type="text" class="form-control" id="specificSizeInputName" placeholder="Club">
          </div>
          <div class="col-sm-2">
            <label class="visually-hidden" for="specificSizeInputGroupUsername">fecha</label>
            <div class="input-group">
              <input type="date" class="form-control" id="specificSizeInputGroupUsername" placeholder="Fecha">
            </div>
          </div>
          <div class="col-sm-3">
            <label class="visually-hidden" for="specificSizeSelect">Preferencia</label>
            <select class="form-select" id="specificSizeSelect">
              <option selected>Provincia</option>
              <option value="1">Uno</option>
              <option value="2">Dos</option>
              <option value="3">Tres</option>
            </select>
          </div>
          <div class="col-sm-3">
            <label class="visually-hidden" for="specificSizeSelect">Preferencia</label>
            <select class="form-select" id="specificSizeSelect">
              <option selected>Ciudad</option>
              <option value="1">Uno</option>
              <option value="2">Dos</option>
              <option value="3">Tres</option>
            </select>
          </div>
         
          <div class="col-auto">
            <button type="submit" class="btn btn-primary">Buscar</button>
          </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  </section>




<!-- seccion clubes -->
<!-- clubes cards -->
<section class="funciones-jugador">
  <div class="card main">
    <div class="circle-icon">
      <i class="bi bi-graph-up-arrow"></i>
    </div> 
    <div class="info">
      <h3 class="title">Historial, estadisticas y amigos</h3>
      <p class="parrafo">El lugar perfecto para conectar y competir en nuestra web de pádel. Mantén un registro detallado de tus partidos, sigue tu progreso a través de estadísticas precisas y encuentra nuevos compañeros de juego. Únete a nuestra comunidad y disfruta de una experiencia completa en el mundo del pádel.</p>
      <a class="link" href="">VER MAS</a>
    </div>
  </div>

  <div class="card">
    <div class="circle-icon">
      <i class="bi bi-mortarboard"></i>
    </div> 
    <div class="info">
      <h3 class="title">CLASES</h3>
      <p class="parrafo">Encontrá profesores de padel en todo el país, administrá tu calendario y coordina con los profesores para tomar clases. </p>
      <a class="link" href="">VER MAS</a>
    </div>
  </div>

  <div class="card">
    <div class="circle-icon">
      <i class="bi bi-person"></i>
    </div> 
    <div class="info">
      <h3 class="title">RIVALES</h3>
      <p class="parrafo">Lorem ipsum dolor sit amet consectetur adipisicing elit. A assumenda earum minus modi molestiae rem odit natus architecto cupiditate rerum?</p>
      <a class="link" href="">VER MAS</a>
    </div>
  </div>

 
  <div class="card">
    <div class="circle-icon">
      <i class="bi bi-trophy"></i>
    </div> 
    <div class="info">
      <h3 class="title">TORNEOS</h3>
      <p class="parrafo">Todos los partidos y torneos que se juegan, están en PADEL WORD. Entrá y conocé las novedades del circuito.</p>
      <a class="link" href="">VER MAS</a>
    </div>
  </div>

  
  <div class="card">
    <div class="circle-icon">
      <i class="bi bi-shop"></i>
    </div> 
    <div class="info">
      <h3 class="title">TIENDAS</h3>
      <p class="parrafo">Encontra los productos que necesites para tus partidos y torneos.</p>
      <a class="link" href="">VER MAS</a>
    </div>
  </div>
</section>


<!-- SECCION HABILIDADES -->
<div id="habilidades">
  <h3>HABILIDADES </h3>

      <div class="skills">
      <div class="info">
          <p> <span class="lista"> </span>Saque</p>
          <span class="porcentaje">75%</span>
      </div>

      <div class="barra">
          <div class="" id="html"></div>
      </div>
  </div>
  <div class="skills">
      <div class="info">
          <p> <span class="lista"> </span>Reves</p>
          <span class="porcentaje">60%</span>
      </div>

      <div class="barra">
          <div class="" id="js"></div>
      </div>
  </div>
  <div class="skills">
      <div class="info">
          <p> <span class="lista"> </span>Derecha</p>
          <span class="porcentaje">90%</span>
      </div>

      <div class="barra">
          <div class="" id="bd"></div>
      </div>
  </div>
  <div class="skills">
      <div class="info">
          <p> <span class="lista"> </span>Volea</p>
          <span class="porcentaje">85%</span>
      </div>

      <div class="barra">
          <div class="" id="c#"></div>
      </div>
  </div>
</div>



<!-- menu jugodores -->
<section id="menu-jugadores">
  <div class="titulos">
        <a class="item" href="#misreservas" onclick="seleccionar(this)">MIS RESERVAS</a>
        <a class="item" href="#mistorneos" onclick="seleccionar(this)">MIS TORNEOS</a>
        <a class="item" href="#misclases" onclick="seleccionar(this)">MIS CLASES</a>
        <a class="item" href="#amigos" onclick="seleccionar(this)">AMIGOS</a>
        <a class="item" href="#pagos" onclick="seleccionar(this)">METODOS DE PAGO</a>
      </div>
    </div>

    <div class="contenido">
  
  <section id="misreservas">
    <h3 class="title" >MIS RESERVAS</h3>
    <p>Gestiona tus reserva de turnos, dias y horarios.</p> 
      <p>INICIA SESION PARA VER TU INFORMACION PERSONALIZADA</p>
  </section>

  <section id="mistorneos">
    <h3 class="title">MIS TORNEOS</h3>
    <p>Resultados en tiempo real, analisis de rivales, actualizá tu propio score, accedé a los rankings y mucho más. </p>
    <p>INICIA SESION PARA VER TU INFORMACION PERSONALIZADA</p>
  </section>

  <section id="misclases">
    <h3 class="title">MIS CLASES</h3>
    <p>Encontrá profesores de tenis en todo el país, administrá tu calendario. </p>
    <p>INICIA SESION PARA VER TU INFORMACION PERSONALIZADA</p>
  </section>

  <section id="amigos">
    <h3 class="title">AMIGOS</h3>
    <p>Conecta con amigos y busca rivales, avisales cuando quieras jugar e invitalos a tus partidos</p>
    <p>INICIA SESION PARA VER TU INFORMACION PERSONALIZADA</p>
  </section>

  <section id="pagos">
    <h3 class="title">METODOS DE PAGO</h3>
    <p>Administra tus medios de pago de la formas mas segura.</p>
    <p>INICIA SESION PARA VER TU INFORMACION PERSONALIZADA</p>
  </section>
    </div>
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