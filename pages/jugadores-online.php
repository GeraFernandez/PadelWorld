<?php
//recordar la variable de sesion
session_start();
include '../pages/conecta.php';

//validamos que haya pasado por el login

$correo = $_SESSION['correo'];
if (isset($correo)) {
  header("Location: ../pages/login.php");
}

$consulta = "SELECT * FROM usuarios where correo='$correo'";
$ejecuta = $conecta->query($consulta);
$row = $ejecuta->fetch_assoc();



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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="../js/jquery.min.js"> </script>
    <script src="../js/moment.min.js"> </script>


    <link rel="stylesheet" href="../styles/estilos.css">
    <!-- bootsrap para full calendar (debe ir abajo del js) -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>






    <title>Padel World - Jugadores</title>



</head>



<body class="body-jugadores">


    <!-- NAV -->
    <nav class="navbar navbar-dark navbar-expand-lg" style="background-color: #040738;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="../img/logo-pelota.png" alt="" srcset="" width=" 35px"></a>
            <!-- modificar con css, cprregir detaslle -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <!-- modif agregar links a paginas -->
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
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Otros
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="../pages/novedades.php">Novedades</a></li>
                            <li><a class="dropdown-item" href="../pages/sobre-nosotros.php">Sobre nosotros</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Contacto</a></li>
                        </ul>
                    </li>
                </ul>
                <h2>
                    <?php echo $correo; ?>
                </h2>
                <form class="d-flex" role="search">
                    <input class="form-control me-2 flex-grow-1" type="search" placeholder="Ingrese su busqueda"
                        aria-label="Search">
                    <button class="btn btn-danger btn-enviar" type="submit"><i class="bi bi-search"></i></button>
                </form>

                <!-- icono user -->
                <div class="nav-item dropdown ms-3">
                    <!-- modif consultar profe como hacer con el icono user   -->
                    <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <i class="bi bi-person-circle display-6"></i>

                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="#">Iniciar sesión</a></li>
                        <li><a class="dropdown-item" href="#">Registrarse</a></li>
                        <li><a class="dropdown-item" href="../pages/cerrarsesion.php">Cerrar Sesion</a></li>
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
                    <div class="text-center">
                        <img src="../img/logo-dibujo.png" width="100" class="rounded-circle">
                    </div>
                    <div class="text-center mt-1">
                        <span class="bg-secondary p-1 px-4 rounded text-white">Level 6</span>
                        <h2 class="mt-2 mb-0">kcksdk</h2>
                        <h6 class="mt-2 mb-0">Cordoba, Argentina</h6>
                        <div class="px-3 mt-2">
                            <p class="fonts">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi totam
                                suscipit, unde
                                accusantium natus praesentium similique corrupti eligendi error quaerat, quia
                                necessitatibus! Magnam,
                                quia ad sequi nulla doloremque nihil animi debitis expedita. Quis minus rerum harum in
                                quisquam enim
                                cum..</p>

                        </div>

                        <ul class="social-list">
                            <li><i class="bi bi-facebook"></i></li>
                            <li><i class="bi bi-whatsapp"></i></li>
                            <li><i class="bi bi-instagram"></i></li>

                        </ul>

                        <div class="buttons">

                            <button class="btn btn-outline-primary px-4">Mensaje</button>
                            <button class="btn btn-primary px-4 ms-3">Contacto</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>


        <!-- CAJA BUSQUEDA -->
        <section>
            <div class="container">
                <div class="caja-busqueda">
                    <div class="busqueda-ubicacion">
                        <form class="row gx-2 gy-2 align-items-center mt-1 mb-1">
                            <div class="col-sm-2">
                                <label class="visually-hidden" for="specificSizeInputName">Club</label>
                                <input type="text" class="form-control" id="specificSizeInputName" placeholder="Club">
                            </div>
                            <div class="col-sm-2">
                                <label class="visually-hidden" for="specificSizeInputGroupUsername">fecha</label>
                                <div class="input-group">
                                    <input type="date" class="form-control" id="specificSizeInputGroupUsername"
                                        placeholder="Fecha">
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

                            <div class="col-auto">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="autoSizingCheck2">
                                    <label class="form-check-label" for="autoSizingCheck2">
                                        Recordar
                                    </label>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>






        <!-- menu jugodores -->
        <section id="menu-jugadores">
            <div class="titulos">
                <a class="item" href="#misreservas" onclick="seleccionar(this)">MIS RESERVAS</a>
                <a class="item" href="#mistorneos" onclick="seleccionar(this)">MIS TORNEOS</a>
                <a class="item" href="#misclases" onclick="seleccionar(this)">MIS CLASES</a>
                <a class="item" href="#amigos" onclick="seleccionar(this)">AMIGOS</a>
                <a class="item" href="#pagos" onclick="seleccionar(this)">METODOS DE PAGO</a>

            </div>


            <div class="contenido">

                <section id="misreservas">
                    <h3 class="title">MIS RESERVAS</h3>
                    <div class="row">
                        <div class="col"></div>
                        <div class="col-7">
                            <div id="CalendarioWeb">

                                <script>
                                $(document).ready(function() {
                                    var calendar = $('#calendar').fullCalendar({
                                        editable: true,
                                        header: {
                                            left: 'prev,next today',
                                            center: 'title',
                                            right: 'month,agendaWeek,agendaDay'
                                        },
                                        events: 'load.php',
                                        selectable: true,
                                        selectHelper: true,
                                        select: function(start, end, allDay) {
                                            var title = prompt("Enter Event Title");
                                            if (title) {
                                                var start = $.fullCalendar.formatDate(start,
                                                    "Y-MM-DD HH:mm:ss");
                                                var end = $.fullCalendar.formatDate(end,
                                                    "Y-MM-DD HH:mm:ss");
                                                $.ajax({
                                                    url: "insert.php",
                                                    type: "POST",
                                                    data: {
                                                        title: title,
                                                        start: start,
                                                        end: end
                                                    },
                                                    success: function() {
                                                        calendar.fullCalendar(
                                                            'refetchEvents');
                                                        alert("Added Successfully");
                                                    }
                                                })
                                            }
                                        },
                                        editable: true,
                                        eventResize: function(event) {
                                            var start = $.fullCalendar.formatDate(event.start,
                                                "Y-MM-DD HH:mm:ss");
                                            var end = $.fullCalendar.formatDate(event.end,
                                                "Y-MM-DD HH:mm:ss");
                                            var title = event.title;
                                            var id = event.id;
                                            $.ajax({
                                                url: "update.php",
                                                type: "POST",
                                                data: {
                                                    title: title,
                                                    start: start,
                                                    end: end,
                                                    id: id
                                                },
                                                success: function() {
                                                    calendar.fullCalendar(
                                                        'refetchEvents');
                                                    alert('Event Update');
                                                }
                                            })
                                        },

                                        eventDrop: function(event) {
                                            var start = $.fullCalendar.formatDate(event.start,
                                                "Y-MM-DD HH:mm:ss");
                                            var end = $.fullCalendar.formatDate(event.end,
                                                "Y-MM-DD HH:mm:ss");
                                            var title = event.title;
                                            var id = event.id;
                                            $.ajax({
                                                url: "update.php",
                                                type: "POST",
                                                data: {
                                                    title: title,
                                                    start: start,
                                                    end: end,
                                                    id: id
                                                },
                                                success: function() {
                                                    calendar.fullCalendar(
                                                        'refetchEvents');
                                                    alert("Event Updated");
                                                }
                                            });
                                        },

                                        eventClick: function(event) {
                                            if (confirm("Are you sure you want to remove it?")) {
                                                var id = event.id;
                                                $.ajax({
                                                    url: "delete.php",
                                                    type: "POST",
                                                    data: {
                                                        id: id
                                                    },
                                                    success: function() {
                                                        calendar.fullCalendar(
                                                            'refetchEvents');
                                                        alert("Event Removed");
                                                    }
                                                })
                                            }
                                        },

                                    });
                                });
                                </script>
                            </div>
                        </div>


                </section>
        </section>
        <!-- SECCION FOOTER -->
        <footer>

            <footer>
                <div class="redes">
                    <p class="footer-parrafo">© PADEL WORLD - Todos los derechos reservados 2023</p>
                    <a href="https://www.linkedin.com/in/fernandez-christe/" target="_blank"
                        style="display: inline-block;"><i class="bi bi-facebook"></i></a>
                    <a href="https://github.com/GeraFernandez" target="_blank" style="display: inline-block;"><i
                            class="bi bi-instagram"></i></a>
                    <a href="https://github.com/GeraFernandez" target="_blank" style="display: inline-block;"><i
                            class="bi bi-twitter"></i></a>
                </div>
            </footer>


            <!-- bootstrap js -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
                crossorigin="anonymous"></script>
</body>

</html>