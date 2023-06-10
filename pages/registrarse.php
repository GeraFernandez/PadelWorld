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

    
    <title>Padel World - Registro  </title>
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
            <a class="nav-link active" aria-current="page" href="/index.html">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/pages/jugadores.html">Jugadores</a>
          </li>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/pages/clubes.html">Clubes</a>
        </li>
        </li>
          <li class="nav-item">
            <a class="nav-link" href="/pages/profesores.html">Profesores</a>
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

<!--SEC LOGIN -->

  <section class="background-image overflow-hidden">
 
  
    <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
      <div class="row gx-lg-5 align-items-center mb-5">
        <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
          <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
            Bienvenido a la red mas grande del mundo <br />
            <span style="color: hsl(234, 79%, 65%)">PADEL WORLD</span>
          </h1>
          <p class="mb-4 opacity-70 texto-login">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit.
            Temporibus, expedita iusto veniam atque, magni tempora mollitia
            dolorum consequatur nulla, neque debitis eos reprehenderit quasi
            ab ipsum nisi dolorem modi. Quos?
          </p>
        </div>
  
        <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
          <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
          <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>
  
          <div class="bg-glass">
            <div class="card-body px-4 py-5 px-md-5">
              <form>

                  <!-- NOMBRE input -->
                  <div class="form-outline mb-3">
                    <label class="form-label" for="form3Example3">NOMBRE</label>
                    <input type="text" id="form3Example3" class="form-control" />
                  </div>

                    <!-- APELLIDO input -->
                <div class="form-outline mb-3">
                  <label class="form-label" for="form3Example3">APELLIDO</label>
                  <input type="text" id="form3Example3" class="form-control" />
                 
                </div>
                
  
                <!-- Email input -->
                <div class="form-outline mb-3">
                  <label class="form-label" for="form3Example3">EMAIL</label>
                  <input type="email" id="form3Example3" class="form-control" placeholder="ejemplo@gmail.com" />
                
                </div>
  
                <!-- Password input -->
                <div class="form-outline mb-3">
                  <label class="form-label" for="form3Example4">CONTRASEÑA</label>
                  <input type="password" id="form3Example4" class="form-control" placeholder="Minimo 8 caracteres" />
                </div>

                 <!-- Password input -->
                 <div class="form-outline mb-3">
                  <label class="form-label" for="form3Example4">REPETIR CONTRASEÑA</label>
                  <input type="password" id="form3Example4" class="form-control" placeholder="Minimo 8 caracteres" />                  
                </div>
  
                <!-- Checkbox -->
                <div class="form-check d-flex justify-content-left mb-4">
                  <input class="form-check-input me-2" type="checkbox" value="" id="form2Example33" checked />
                  <label class="form-check-label" for="form2Example33">
                   Acepto los terminos y condiciones
                  </label>
                </div>
  
                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-4">
                  INICIAR SESION
              </button>
              <p>
                  ¿Ya tienes cuenta? 
                  <a href="/pages/login.html">Iniciar sesion</a>
              </p>
              
  
                <!-- Register buttons -->
                <div class="text-center mb-3 mt-5" ><!-- modif con css -->
                  <p>O iniciar sesion con:</p>
                  
                  <button type="button" class="btn btn-link btn-floating mx-1">
                    <i class="bi bi-google"></i>
                  </button>
  
                  <button type="button" class="btn btn-link btn-floating mx-1">
                    <i class="bi bi-facebook"></i>
                  </button>
  
                  <button type="button" class="btn btn-link btn-floating mx-1">
                    <i class="bi bi-twitter"></i>
                  </button>
  
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Section: Design Block -->






<!-- SECCION FOOTER -->
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