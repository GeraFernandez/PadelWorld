
<?php
session_start();
error_reporting(0);
//solicitar la conexion a la base de datos

include '../modelo/conexion2.php';



if(isset($_POST['BtnGuardar'])){

  $mensaje="";
  $Id_usuarios= mysqli_real_escape_string($con,$_POST['razonSocial']);
  $RazonSocial= mysqli_real_escape_string($con,$_POST['razonSocial']);
  $Pronvicia= mysqli_real_escape_string($con,$_POST['CboProvincia']);
  $Ciudad= mysqli_real_escape_string($con,$_POST['CboCiudad']);
  $Calle= mysqli_real_escape_string($con,$_POST['calle']);
  $Numero= mysqli_real_escape_string($con,$_POST['numero']);
  $CodigoPostal= mysqli_real_escape_string($con,$_POST['codigoPostal']);
  
  $query= "INSERT INTO clubes (Id_usuarios,RazonSocial,Provincia,Ciudad,Calle,Numero,CodigoPostal) values ('$RazonSocial','$Pronvicia','$Ciudad','$Calle','$Numero','$CodigoPostal')";
  

  

  $query_run = mysqli_query($con, $query);
  if($query_run){
  
    $mensaje.="<div class='alert alert-success alert-dismissible fade show' role='alert'>
    <strong>Tu registro se realizo con exito</strong> 
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
    </div>";
  
  } else {
  
    $mensaje.="<div class='alert alert-danger alert-dismissible fade show' role='alert'>
  <strong>Tu registro no se realizo con exito</strong> 
  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
  </div>";
  
  
  } 
  

} 

?>







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

    
    <title>PW - Club registro</title>
</head>
<body >

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
            <a class="nav-link active" aria-current="page" href="../index.php">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../pages/jugadores.php">Jugadores</a>
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
            <li><a class="dropdown-item" href="../pages/cerrarsesion.php">Cerrar sesion</a></li>
          </ul>
        </div>
        
        

      </div>
    </div>
  </nav>

  <style>
    .container-form {
      margin-top: 50px;
    
      border: 2px solid black;
      border-radius: 20px;
      padding: 20px;
    }
    .text-red {
      color: red;
      font-weight: bold;
    }
  </style>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    $(document).ready(function() {
      $("#cancelarBtn").click(function() {
        var confirmacion = confirm("Si selecciona cancelar no se guardaran los cambios realizados");
        if (confirmacion) {
          window.location.href = "../pages/clubes-online.php";
        }
      });
    });

    
  </script>
</head>
<body>
  <div class="container container-form">
    <h2 class="text-center text-red">CLUB</h2>
    <form class="mx-auto">
      <div class="form-group">
        <label for="razonSocial">Razón social<span class="text-danger">*</span>:</label>
        <input type="text" class="form-control" name="razonSocial" id="razonSocial" placeholder="Ingresa la razón social" required>
      </div>
      <div class="form-row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="provincia">Provincia:</label>
            <select class="form-control" name="CboProvincia" id="provincia">
              <option value="provincia1">Provincia 1</option>
              <option value="provincia2">Provincia 2</option>
              <option value="provincia3">Provincia 3</option>
            </select>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="ciudad">Ciudad:</label>
            <select class="form-control"  name="CboCiudad" id="ciudad">
              <option value="ciudad1">Ciudad 1</option>
              <option value="ciudad2">Ciudad 2</option>
              <option value="ciudad3">Ciudad 3</option>
            </select>
          </div>
        </div>
      </div>
      <div class="form-row">
        <div class="col-md-4">
          <div class="form-group">
            <label for="calle">Calle:</label>
            <input type="text" class="form-control" name="calle" id="calle" placeholder="Ingresa la calle" required>
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label for="numero">Número:</label>
            <input type="text" class="form-control" name="numero" id="numero" placeholder="Ingresa el número" required>
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label for="codigoPostal">Código postal:</label>
            <input type="text" class="form-control" name="codigoPostal" id="codigoPostal" placeholder="Ingresa el código postal" required>
          </div>
        </div>
      </div>
     
      <div class="form-row" id="canchasContainer"></div>
      <button type="submit" name="BtnGuardar" class="btn btn-primary">Guardar</button>
      <button type="button" class="btn btn-secondary" id="cancelarBtn">Cancelar</button>
    </form>

    <?php echo $mensaje; ?>
  </div>
  

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

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
