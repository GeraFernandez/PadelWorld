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
            <a class="nav-link" aria-current="page" href="/index.html">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../pages/jugadores.php">Jugadores</a>
          </li>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="../pages/clubes.php">Clubes</a>
        </li>
        </li>
          <li class="nav-item">
            <a class="nav-link" href="/pages/profesores.php">Profesores</a>
          </li>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/pages/torneos.html">Torneos</a>
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
            <li><a class="dropdown-item" href="/pages/login.html">Iniciar sesión</a></li>
            <li><a class="dropdown-item" href="/pages/registrarse.html">Registrarse</a></li>
          </ul>
        </div>
        
        

      </div>
    </div>
  </nav>

  

  

  <!-- PERFIL JUGADOR -->

<main id="club-offline">
  <h1 class="title">CLUBES</h1>
  <div class="acceso-login">
    <a class="login" href="">¿Sos un club?</a>
    <a class="login" href="">Registrate</a>
  </div>
</main>
  
<!-- info general -->
<section class="info-gral">
  <div class="info">
    <h1 class="title">Alquila tu cancha en tu complejo deportivo</h1>
    <p class="contenido">Te mostramos los beneficios de tener un canal online para gestionar tu club que permite a los usuarios reservar online.
    Dejanos tus datos de contacto así podemos ponernos en contacto contigo.</p>
  </div >

  <div class="botones">
    <button type="button" class="btn btn-outline-success"> Ver mas </button>
    <button type="button" class="btn btn-outline-success">Contacto</button>
  </div>
</section>


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


  
<!-- FILTROS -->
  <section id="club-filtros">

    <div class="combo-box">
      <label for="cbobox-icon"><i class="bi bi-arrow-down-up"></i></label>
      <select class="opcion">
       <option value="opcion1">-Ordenar-</option>
       <option value="opcion2">A-Z</option>
       <option value="opcion3">Precio</option>
       <option value="opcion3">Puntaje</option>
     </select>
    </div>

    <div class="combo-box">
      <label for="cbobox-icon"><i class="bi bi-bounding-box-circles"></i></label>
      <select class="opcion">
       <option value="opcion1">-Superficie-</option>
       <option value="opcion2">Sintetico</option>
       <option value="opcion3">Dura</option>
     </select>
    </div>

    <div class="combo-box">
      <label for="cbobox-icon"><i class="bi bi-clock-history"></i></label>
      <select class="opcion">
       <option value="opcion1">-Duracion-</option>
       <option value="opcion2">60 min</option>
       <option value="opcion3">90 min</option>
       <option value="opcion3">120 min</option>
     </select>
    </div>

    <div class="combo-box">
      <label for="cbobox-icon"><i class="bi bi-clipboard-check"></i></label>
      <select class="opcion">
       <option value="opcion1">-Otros servicios-</option>
       <option value="opcion2">Techada</option>
       <option value="opcion3">Estacionamiento</option>
     </select>
    </div>

  </section>

  <section class="galeria clubes">
    <img src="/img/club1.png" alt="">
    <img src="/img/club2.png" alt="">
    <img src="/img/club3.png" alt="">
    <img src="/img/club4.png" alt="">
    <img src="/img/club5.png" alt="">
    <img src="/img/club6.png" alt="">
    <img src="/img/club7.png" alt="">
    <img src="/img/club8.png" alt="">
  </section>

<!-- seccion clubes  -->
<section id="clubes">
  <div class="tarjetas">
    <div class="card">
      <div class="foto">
        <img src="/img/club1.png" alt="" srcset="">
       </div> 
      <div class="info">
        <div class="title">
           <h3>CLUB TELEFONOS PADEL</h3>
           <h3 class="star">4.6 <i class="bi bi-star-fill"></i></h3>
        </div>
        <h5> <i class="bi bi-geo-alt"></i> Av. Fernando Fader 4535 , Cordoba</h5>
        <h4> <i class="bi bi-telephone"></i> 351 - 4765430</h4>
        <h4> <i class="bi bi-whatsapp"></i><a href="https://api.whatsapp.com/send/?phone=5493517052467&text&type=phone_number&app_absent=0"> 3517052467</a></h4>
      </div>
    </div>

    <div class="card">
      <div class="foto">
        <img src="/img/fondo-club.png" alt="" srcset="">
       </div> 
      <div class="info">
        <div class="title">
           <h3>NEW GARDEN PADEL</h3>
           <h3 class="star">5.0 <i class="bi bi-star-fill"></i></h3>
        </div>
        <h5> <i class="bi bi-geo-alt"></i> Av. Fernando Fader 4535 , Cordoba</h5>
        <h4> <i class="bi bi-telephone"></i> 351 - 4765430</h4>
        <h4> <i class="bi bi-whatsapp"></i><a href="https://api.whatsapp.com/send/?phone=5493517052467&text&type=phone_number&app_absent=0"> 3517052467</a></h4>
      </div>
    </div>

    <div class="card">
      <div class="foto">
        <img src="/img/club3.png" alt="" srcset="">
       </div> 
      <div class="info">
        <div class="title">
           <h3>LES COURTS</h3>
           <h3 class="star">4.1 <i class="bi bi-star-fill"></i></h3>
        </div>
        <h5> <i class="bi bi-geo-alt"></i> Av. Goycoechea 2013 , Cordoba</h5>
        <h4> <i class="bi bi-telephone"></i> 351 - 4765430</h4>
        <h4> <i class="bi bi-whatsapp"></i><a href="https://api.whatsapp.com/send/?phone=5493517052467&text&type=phone_number&app_absent=0"> 3517052467</a></h4>
      </div>
    </div>

    <div class="card">
      <div class="foto">
        <img src="/img/club6.png" alt="" srcset="">
       </div> 
      <div class="info">
        <div class="title">
           <h3>TERRAZAS PADEL CLUB</h3>
           <h3 class="star">4.7 <i class="bi bi-star-fill"></i></h3>
        </div>
        <h5> <i class="bi bi-geo-alt"></i> Av. Goycoechea 2013 , Cordoba</h5>
        <h4> <i class="bi bi-telephone"></i> 351 - 4765430</h4>
        <h4> <i class="bi bi-whatsapp"></i><a href="https://api.whatsapp.com/send/?phone=5493517052467&text&type=phone_number&app_absent=0"> 3517052467</a></h4>
      </div>
    </div>

    <div class="card">
      <div class="foto">
        <img src="/img/club5.png"alt="" srcset="">
       </div> 
      <div class="info">
        <div class="title">
           <h3>PADEL BOX</h3>
           <h3 class="star">3.1 <i class="bi bi-star-fill"></i></h3>
        </div>
        <h5> <i class="bi bi-geo-alt"></i> Caseros 1727, Cordoba</h5>
        <h4> <i class="bi bi-telephone"></i> 351 - 4765430</h4>
        <h4> <i class="bi bi-whatsapp"></i><a href="https://api.whatsapp.com/send/?phone=5493517052467&text&type=phone_number&app_absent=0"> 3517052467</a></h4>
      </div>
    </div>
  </div>

  <div class="map">
    <h1 class="title">MAPA DE UBICACION</h1>
    <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d54481.59911245682!2d-64.21680612311262!3d-31.411372331615993!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1spadel!5e0!3m2!1ses-419!2sar!4v1686321285044!5m2!1ses-419!2sar" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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