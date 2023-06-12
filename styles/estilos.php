/* ----------------------------------------------------ESTRUCTURA PRINCIPAL ---------------------------------------------- */
<?php
header("Content-Type: text/css; charset: UTF-8");

?>
@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600&display=swap');
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Montserrat';
}

html {
    scroll-behavior: smooth;
}

body{
    position: relative;
    padding-bottom: 3em;
    min-height: 100vh;
}
/* PRINCIPAL- seccion NAV */
.navbar {
    position: fixed;
    top: 0;
    width: 100%;
    z-index: 9999;
    background-color:#040738 ;
  }
  .navbar-nav .nav-link:hover {/* modif ver porque no funciona */
    color: red;
  }

  /* PRINCIPAL- seccion busqueda */
  .container {
    margin-top: 20px;
    margin-bottom: 25px;
    
  }
  
  .caja-busqueda {
    background-color: #f2f2f2;
    border: 1px solid #ccc;
    border-radius: 25px;
    padding: 20px;
  }

   /* PRINCIPAL-seccion FOOTER */       
 footer {
    background-color: #000;
    color: #fff;
    text-align: center;
    padding: 5px 0;
    position: absolute;
    bottom: 0;
    width: 100%;
  
      
}
footer a {
    text-decoration: none;
    color: #fff;
    display: inline-block;
    margin: 5px;
    font-size: 26px;
    text-align: center;
}
.footer-parrafo{
    display: inline-block;
}
  
 /* ----------------------------------------------INDEX--------------------------------------------------- */ 

 .carousel-title {
  text-shadow: -1px -1px 0 black, 1px -1px 0 black, -1px 1px 0 black, 1px 1px 0 black;
  font-size: 20px ;
 }


 /* INDEX - seccion funcionalidades */
 #funcionalidades {
    padding: 15px 15px;
    text-align: center;
    background-color: #f3f3f3;
    background: linear-gradient(to bottom, rgba(226, 85, 85, 0.9), rgba(0, 0, 0, 0.9)), url("/img/funcionalidades.png");
    background-size: cover;
    background-position: center center;
}

#funcionalidades .fila {
  display: flex;
  justify-content: space-between;
  max-width: 1450px;
  margin: 20px auto; 
}

#funcionalidades .fila .funcionalidades {
  width: 300px;
  background-color: #fff;
  padding: 25px;
    margin-top:  10px;
    margin-left: 10px ;
    border-radius: 5px;
    transition: .5s;
    display: flex;
    flex-direction: column;
  text-align: center;
  align-items: center; 
}
#funcionalidades .fila .funcionalidades:hover {
  box-shadow: 5px 5px 10px #565656, -5px -5px 10px #8a8a8a;
  background-color:rgba(0, 0, 255, 0.632);
  color: white  ;
  cursor: pointer;
}

#funcionalidades .fila .funcionalidades h4 {
  font-size: 22px;
  margin-bottom: 25px;
  color: red;
}

.circle-icon {
  width: 120px; 
  height: 120px;
  border-radius: 50%; 
  background-color: #f0f0f0;
  display: flex;
  justify-content: center;
  align-items: center;
}

.circle-icon .bi{
  color:rgba(0, 0, 255, 0.632); 
  font-size: 50px;
  
}
#funcionalidades .fila .funcionalidades hr {
  width: 30%;
  margin: auto;
  color: #000;
  margin-bottom: 25px;
}
#funcionalidades .fila .funcionalidades ul {
  list-style: none;
  display: flex;
  justify-content: space-around;
  margin-bottom: 10px;
}
#funcionalidades .fila .funcionalidades p {
  margin-top: 20px;
  font-size: 14px;
  line-height: 22px;
}



/* INDEX - seccion CONTACTO */
#contacto {
  padding: 100px 15px;
  background-color: #f3f3f3;
}
#contacto .titulo-seccion {
  margin-bottom: 20px;
}
#contacto .contenedor-form {
  max-width: 1100px;
  margin: auto;
}
#contacto .contenedor-form .fila {
  margin-bottom: 15px;
}
#contacto .contenedor-form .mitad {
    display: flex;
    justify-content: space-between;
}
#contacto .contenedor-form input,
#contacto .contenedor-form textarea {
    padding: 20px;
    border-radius: 20px;
    border: none;
    border: 1px solid #919191;
}
#contacto .contenedor-form .mitad input {
    width: 48%;
    
}
#contacto .contenedor-form .input-full {
    width: 100%;
}


.input-mitad:hover, .input-full:hover {
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
}

.input-mitad:focus, .input-full:focus {
  outline: none;
  box-shadow: 0 0 5px rgba(255, 0, 0, 0.7);
  border: 2px solid red;
}

#contacto .titulo-seccion {
    text-align: center;
    font-size: 22px;
    text-transform: uppercase;
    color: #111135;
    text-decoration: underline;
    text-decoration-color: #d3d3d3;
    text-decoration-thickness: 5px;
}
#contacto .btn-enviar {
    display: block;
    margin: auto;
    cursor: pointer;
    transition: .5s;
    padding: 10px 15px !important;
}
#contacto .btn-enviar:hover {
    background-color:red;
    color: #fff;
}



/*---------------------------- PAGINA LOGIN------------------------------------- */
.background-image {
  background: linear-gradient(to bottom, rgba(255, 255, 255, 0.363),  rgba(5, 4, 56, 0.662)), url("/img/fondo-login.png");
    background-size: cover;
    
  }
  
 
  .bg-glass {
    background-color: hsla(0, 0%, 100%, 0.9) !important;
    backdrop-filter: saturate(200%) blur(25px);
  }
.texto-login{
    color: hsl(218, 81%, 85%)
}
      
body{
    background:#eee;
}


/*---------------------------- PAGINA JUGADORES----------------------------------- */

/* jugadores - cabecera */
#jugador-offline{
  background: linear-gradient(to bottom, rgb(5, 4, 56),  rgba(5, 4, 56, 0.662)), url("/img/fondo-jugadoresss.png");
  background-size: cover;
  height: 400px;
  background-color: blue;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
}

#jugador-offline .title{
  color: white;
  margin-top: 100px;
  font-size: 30px;
  font-weight: bold;
  letter-spacing: 10px;
}

#jugador-offline .acceso-login{
  margin-top: 80px;
  width: 400px;
  display: flex;
  flex-direction: row;
  justify-content: space-evenly;
}

#jugador-offline .acceso-login .login{
 color: rgb(15, 198, 15);
 font-size: 20px;
 text-decoration: none;
}   

#jugador-offline .acceso-login .login:hover{
  color: red  
}   

.body-jugadores{
  background-color: gainsboro;
}

/* JUGADORES - tarjetas */

.funciones-jugador{
  width: 1100px; 
  margin-left: auto;
  margin-right: auto;
  display: grid;
  grid-template-columns: 1fr 1fr;
  grid-row: 1fr 1fr 1fr;
  align-items: center;
  justify-content: center;
  gap: 10px; 
}

.funciones-jugador .card{
  background-color: white; 
  display: grid;
  grid-template-columns: 150px auto ;
  grid-template-rows: 200px auto ; 
  border-radius: 20px;
  justify-content: center
;
 
}

.funciones-jugador .card.main{
  grid-column: 1/3;
} 

.funciones-jugador .card:hover {
  background-color: blue; 
  box-shadow: 5px 5px 10px #080808, -5px -5px 10px #8a8a8a;
  color: white;
  transition: background-color 0.3s, box-shadow 1s;
}

.funciones-jugador .info{
  display: grid;
  grid-template-rows: 1fr 4fr 1fr  ;
  margin-top: 20px;
  margin-bottom: 20px;
}

.funciones-jugador .info .title{
  margin-top:auto;
  margin-bottom: 10px;
  font-size: 20px;
 
}
.funciones-jugador .info .parrafo{
  margin-right: 25px;
  font-size: 15px;
}

.funciones-jugador .info .link{
  margin-right:50px;
  margin-left: auto;
  color: red;
  font-weight: bolder;
}

/* seccion HABILIDADES*/
   
        
#habilidades {
  background: linear-gradient( #eb5a5acc, rgba(33, 16, 16, 0.8)), url("/img/A.PNG");
  background-attachment: fixed;
  background-repeat: no-repeat;
  background-size: cover;
  color: #fff;
  background-position: center center;
  padding: 20px 0;
  text-align: center;
  margin-top: 15px;
}

#habilidades .skills {
  max-width: 600px;
  margin: 30px auto;
}

#habilidades .skills .info {
  display: flex;
  justify-content: space-between;
}

#habilidades .skills .lista {
  display: inline-block;
  margin-right: 20px;
  height: 10px;
  width: 10px;
  background-color: #fff;
}

#habilidades .skills .barra {
  background-color: #919191;
  width: 100%;
  height: 6px;
  margin: 10px 0px;
}

#habilidades .skills .barra .barra-progreso1 {
  background-color: #fff;
  width: 95%;
  height: 6px;
  animation: progreso1 2s forwards;
}

#habilidades .skills .barra .barra-progreso2 {
  background-color: #fff;
  width: 90%;
  height: 6px;
  animation: progreso2 2s forwards;
}

#habilidades .skills .barra .barra-progreso3 {
  background-color: #fff;
  width: 90%;
  height: 6px;
  animation: progreso3 2s forwards;
}

#habilidades .skills .barra .barra-progreso4 {
  background-color: #fff;
  width: 85%;
  height: 6px;
  animation: progreso4 2s forwards;
}

@keyframes progreso1 {
  0% {
      width: 0;
  }
  100% {
      width: 75%;
  }
}

@keyframes progreso2 {
  0% {
      width: 0;
  }
  100% {
      width: 60%;
  }
}

@keyframes progreso3 {
  0% {
      width: 0;
  }
  100% {
      width: 90%;
  }
}

@keyframes progreso4 {
  0% {
      width: 0;
  }
  100% {
      width: 85%;
  }
}

/* menu juagadores- titulos */
#menu-jugadores{
  max-width: 1150px;
  margin:  20px auto 100px auto;
  display:grid;
  grid-template-columns: 1fr 2fr;
  

}

#menu-jugadores .titulos{

border-radius: 15px;
height: 200px;
margin: 10px;
padding: 10px;
display: flex;
flex-direction: column;
justify-content: space-between;
background-color: rgba(220,220,220,255);
}


#menu-jugadores .item{
  padding-left: 10px;
  text-decoration: none;
  font-size: 20px;
  border: 2px solid rgb(189, 189, 189);
  border-radius: 15PX;
  background-color: white;
}
#menu-jugadores .item:hover{
  background-color: red;
  color: white;
  
  
}
 
/* menu juagadores- contenido*/

#menu-jugadores .contenido {
  background-color: whitesmoke;
  border-radius: 15px;
  height: 200px;
  margin: 10px;
  padding: 10px;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  overflow-y: auto;
}

#menu-jugadores .contenido .title{
  font-size: 20px;
}


/* ---------------------------------------------PAGINA CLUBES------------------------------------- */


/* CLUBES - cabecera */
/* jugadores - cabecera */
#club-offline{
  background: linear-gradient(to bottom, rgb(5, 4, 56),  rgba(5, 4, 56, 0.662)), url("/img/fondo-club.png");
  background-size: cover;
  height: 400px;
  background-color: blue;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
}

#club-offline .title{
  color: white;
  margin-top: 100px;
  font-size: 30px;
  font-weight: bold;
  letter-spacing: 10px;
}

#club-offline .acceso-login{
  margin-top: 80px;
  width: 400px;
  display: flex;
  flex-direction: row;
  justify-content: space-evenly;
}

#club-offline .acceso-login .login{
 color: rgb(15, 198, 15);
 font-size: 20px;
 text-decoration: none;
}   

#club-offline .acceso-login .login:hover{
  color: whitesmoke 
 
}   

.body-jugadores{
  background-color: gainsboro;
}

  

/* filtros combobox */
.filtro-club{
  width: 1200px;
  display: flex;
  justify-content: center;
  align-items: center;
  margin: 30px auto 30px auto;
}

.combobox {
  width: 200px;
  height: 30px;
  font-size: 14px;
  background-color: #f2f2f2;
  border: 1px solid #ccc;
  border-radius: 45px;
  padding: 5px;
  margin-right: 20px;
}

.combobox option {
  background-color: #fff;
  color: #333;
}


/* filtros clubes */
#club-filtros{
  display: flex;
  align-items: center;
  justify-content: center;
  margin-bottom: 15px;
  gap: 20px;
  font-size: 15px;
}

#club-filtros .opcion{
  border-radius: 15px;
  width: 150px;
}
  


/* clubes */
#clubes {
  
  max-width: 1300px;
  margin: auto;
  margin-bottom: 50px;
  display: grid;
  grid-template-columns: 1fr 1fr;
  align-items: center;
  justify-content: space-between;
}

#clubes .tarjetas{
  height: 500px;
  overflow-y: auto;

  
}

#clubes .card{
  border-radius: 10px;
  display: grid;
  grid-template-columns: 1fr 3fr;
  align-items: center;
  justify-content: space-between;
}
#clubes .card .foto{
  margin-left: 10px;
  
}

#clubes .card img{
  border-radius: 10px;
  max-width: 100%;
  height: auto;
}
#clubes .card .info{
  display: flex;
  flex-direction: column;
  margin-left: 10px;
}

#clubes .card .info .title{
  display: grid;
  grid-template-columns: 5fr 1fr;
  cursor: pointer;
}

#clubes .card .info .title h3{
  font-size: 20px;
  color: red;
}

#clubes .card .info .title .star{
  font-size: 20px;
  color: goldenrod;
}

#clubes .card .info h5{
  font-size: 15px;
}

#clubes .card .info h4{
  font-size: 15px;
}

/* MAPA */
#clubes .map {
  height: 500px;
  background-color: whitesmoke;
  padding: 0px 30px 0px 30px;
  border-radius: 15px;
  margin: auto;
}


/* ------------------------------------------PAGINA TORNEOS------------------- */

/* torneo - cabecera */
#torneo-offline{
  background: linear-gradient(to bottom, rgb(5, 4, 56),  rgba(5, 4, 56, 0.662)), url("/img/fondo-torneos.png");
  background-size: cover;
  height: 400px;
  background-color: blue;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
}

#torneo-offline .title{
  color: white;
  margin-top: 100px;
  font-size: 30px;
  font-weight: bold;
  letter-spacing: 10px;
}

#torneo-offline .acceso-login{
  margin-top: 80px;
  width: 400px;
  display: flex;
  flex-direction: row;
  justify-content: space-evenly;
}

#torneo-offline .acceso-login .login{
 color: rgb(15, 198, 15);
 font-size: 20px;
 text-decoration: none;
}   

#torneo-offline .acceso-login .login:hover{
  color: red  
}   

.body-jugadores{
  background-color: gainsboro;
}


/* torneos main */
.torneos-main{
  max-width: 1200px;
  margin: 20px auto 20px auto;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}

.torneos-main .title{
  color: red;
  text-transform: uppercase;
  font-weight: bold;
}

.torneos-main .content{
margin-left: 150px;
margin-right: 150px;
text-align: center;
}

/* torneos - galeria de imagenes */
.galeria{
  margin: auto;
  display: flex;
  width: 700px;
  height: 430px;
}

.galeria.clubes{
  margin: auto;
  display: flex;
  width: 1000px;
  height: 300px;
  margin-bottom: 30px;
}

.galeria img{
  width: 0px;
  flex-grow: 1;
  object-fit: cover;
  opacity: .8;
  filter: sepia(.8);
  transition: 0.5s ease;
} 

.galeria img:hover{
  cursor: pointer;
  width: 300px;
  opacity: 1;
  filter: contrast(120%);
}



/* funcionalidades */
#torneos-funcionalidades{
  max-width: 1100px;
  display: flex ;
  flex-direction: row;
  gap: 10px;
  justify-content: center;
  align-items: center;
  padding-bottom: 20px;
}

#torneos-funcionalidades .imagen{
  width: 800px;
  height: 300px;
}

#torneos-funcionalidades .imagen img{
  width: auto;
  height: 100%;
}


#torneos-funcionalidades .funciones{
  display: grid;
  grid-template-columns: 1fr 1fr;
  grid-template-rows: 1fr 1fr;
  margin: 20px;
  grid-column-gap: 10px;
  grid-row-gap: 10px;
  justify-items: center;


}

#torneos-funcionalidades .tarjetas{
  justify-items: center;
  border: #000;
  background-color: white; 
  border-radius: 20px;
  display: grid;
  grid-template-rows: 2fr 1fr 2fr;
  padding: 5px;

}

#torneos-funcionalidades .tarjetas:hover{
  background-color: blue; 
  box-shadow: 5px 5px 10px #080808, -5px -5px 10px #8a8a8a;
  color: white;
  transition: background-color 0.3s, box-shadow 1s;
}



#torneos-funcionalidades .tarjetas h2{
  color: red;
  font-size: 20px;
  margin: 5px auto 10px auto;
  
}

#torneos-funcionalidades .tarjetas p{
  margin-right: 25px;
  font-size: 15px;
  margin: 15px 30px 15px 30px;

  
}


/* JUGADORES - tarjetas */
.funciones-jugador .info{
  display: grid;
  grid-template-rows: 1fr 4fr 1fr  ;
  margin-top: 20px;
  margin-bottom: 20px;
}

.funciones-jugador .info .title{
  margin-top:auto;
  margin-bottom: 10px;
  font-size: 20px;
 
}
.funciones-jugador .info .parrafo{
  margin-right: 25px;
  font-size: 15px;
}

.funciones-jugador .info .link{
  margin-right:50px;
  margin-left: auto;
  color: red;
  font-weight: bolder;
}


/* -------------------------------------------PAGINA NOSOTROS -------------------------------------------*/
/* nosotros - cabecera */

#torneos-funcionalidades{
  margin: auto;
  width: 1300px;
}

#nosotros{
  background: linear-gradient(to bottom, rgb(5, 4, 56),  rgba(5, 4, 56, 0.662)), url("/img/fondo-nosotros.png");
  background-size: cover;
  height: 400px;
  background-color: blue;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
} 

#nosotros .title-nosotros{
  color: white;
  margin-top: 100px;
  font-size: 30px;
  font-weight: bold;
  letter-spacing: 10px;
}

/* club info general */
.info-gral{
  width: 1200px;
  margin: 0 auto;
  margin-top: 20px;
  border-radius: 20px;
  background: linear-gradient(to right, rgba(255, 255, 255, 0), rgba(255, 255, 255, 1));
  border: 1px solid rgba(0, 0, 0, 0.2);
  box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);
  padding: 20px;
  cursor: pointer;
  display: grid;
  grid-template-columns: 2fr 1fr;
}

/* nosotros info general */
.info-gral.nosotros{
  display: grid;
  grid-template-columns: 1fr 2fr;
}

.info-gral .title{
  color: red;
  font-weight: bold ;
}

.info-gral .contenido{
  font-weight: bold ;
}

/* info general botnoes */
.info-gral .botones{
  height: 100px;
  margin: auto 50px auto 50px;
  display: flex;
  flex-direction: column;
  text-align: center;
  justify-content: space-between;
  

}


/* INDEX - seccion nosotros info */
#nosotros-info {
  padding: 15px 15px;
  text-align: center;
  background-color: #f3f3f3;
  background: linear-gradient(to bottom, rgba(255, 255, 255, 0.9), rgba(0, 0, 0, 0.9)), url("/img/fondo-padel.jpg");
  background-size: cover;
  background-position: center center;
}

#nosotros-info .fila {
display: flex;
justify-content: center;
max-width: 1200px;
margin: auto;
}

#nosotros-info .fila .info {
width: 300px;
background-color: #fff;
padding: 25px;
  margin-top:  10px;
  margin-left: 10px ;
  border-radius: 5px;
  transition: .5s;
  display: flex;
  flex-direction: column;
  text-align: center;
  align-items: center; 
}
#nosotros-info .fila .info:hover {
box-shadow: 5px 5px 10px #565656, -5px -5px 10px #8a8a8a;
background-color:rgba(255, 0, 0, 0.632);
color: white  ;
cursor: pointer;
}

#nosotros-info .fila .info h4 {
font-size: 25px;
margin-top: 20px;
}
#nosotros-info .fila .info h5 {
  font-size: 15px;
}
#nosotros-info .fila .info h6 {
  margin: 15px;
}

.circle-icon {
margin: auto;
width: 120px; 
height: 120px;
border-radius: 50%; 
background-color: #f0f0f0;
display: flex;
justify-content: center;
align-items: center;
}

.circle-icon .bi{
color:rgba(0, 0, 255, 0.632); 
font-size: 50px;

}
#nosotros-info .fila .info hr {
width: 30%;
margin: auto;
color: #000;
margin-bottom: 25px;
}
#nosotros-info .fila .info ul {
list-style: none;
display: flex;
justify-content: space-around;
margin-bottom: 10px;
}
#nosotros-info .fila .info p {
margin-top: 20px;
font-size: 14px;
line-height: 22px;
}



/*---------------------------- seccion RESPONSIVE----------------------------------- */
@media screen and (max-width: 800px) {
  
     /* seccion funcionalidades */
     #funcionalidades {
        padding: 50px 10px;
    }
    #funcionalidades .fila {
        display: inline-block;
    }
    #funcionalidades .fila .proyecto {
        margin: auto 50%;
    }
  }

  

  /* ----------------------------------pagina PROFESORES------------------------------------- */
  .carousel-inner{
    margin-top: 65px;
}

.elegirProfe h1, .misdatos h1{
    text-align: center;
    margin-top: 60px;
    margin-bottom: 30px;
}

.col-md-4 {
    margin-top: 20px ;
    margin-bottom: 20px;
}

.card-img-top:hover{
    transform:scale(1.2);
}
.contactar{
    display: flex;
    justify-content: space-around;
    align-items: center;
}

.misdatos{
    margin-top: 50px;
}

.containercalendario {
    position: relative;
    width: 1200px;
    min-height: 850px;
    margin: 0 auto;
    padding: 5px;
    color: #fff;
    display: flex;
    border-radius: 10px;
    background-color: #373c4f;
}
.left {
    width: 60%;
    padding: 20px;
}
.calendar {
    position: relative;
    width: 100%;
    height: 100%;
    display: flex;
    flex-direction: column;
    flex-wrap: wrap;
    justify-content: space-between;
    color: #878895;
    border-radius: 5px;
    background-color: #fff;
}
  /* set after behind the main element */
.calendar::before,
.calendar::after {
    content: "";
    position: absolute;
    top: 50%;
    left: 100%;
    width: 12px;
    height: 97%;
    border-radius: 0 5px 5px 0;
    background-color: #d3d4d6d7;
    transform: translateY(-50%);
}
.calendar::before {
    height: 94%;
    left: calc(100% + 12px);
    background-color: rgb(153, 153, 153);
}
.calendar .month {
    width: 100%;
    height: 150px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0 50px;
    font-size: 1.2rem;
    font-weight: 500;
    text-transform: capitalize;
}
.calendar .month .prev,
.calendar .month .next {
    cursor: pointer;
}
.calendar .month .prev:hover,
.calendar .month .next:hover {
    color: var(--primary-clr);
}
.calendar .weekdays {
    width: 100%;
    height: 100px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0 20px;
    font-size: 1rem;
    font-weight: 500;
    text-transform: capitalize;
}
.weekdays div {
    width: 14.28%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
}
.calendar .days {
    width: 100%;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    padding: 0 20px;
    font-size: 1rem;
    font-weight: 500;
    margin-bottom: 20px;
}
.calendar .days .day {
    width: 14.28%;
    height: 90px;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    color: var(--primary-clr);
    border: 1px solid #f5f5f5;
}
.calendar .days .day:nth-child(7n + 1) {
    border-left: 2px solid #f5f5f5;
}
.calendar .days .day:nth-child(7n) {
    border-right: 2px solid #f5f5f5;
}
.calendar .days .day:nth-child(-n + 7) {
    border-top: 2px solid #f5f5f5;
}
.calendar .days .day:nth-child(n + 29) {
    border-bottom: 2px solid #f5f5f5;
}
.calendar .days .day:not(.prev-date, .next-date):hover {
    color: #fff;
    background-color: var(--primary-clr);
}
.calendar .days .prev-date,
.calendar .days .next-date {
    color: #b3b3b3;
}
.calendar .days .active {
    position: relative;
    font-size: 2rem;
    color: #fff;
    background-color: var(--primary-clr);
}
.calendar .days .active::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    box-shadow: 0 0 10px 2px var(--primary-clr);
}
.calendar .days .today {
    font-size: 2rem;
}
.calendar .days .event {
    position: relative;
}
.calendar .days .event::after {
    content: "";
    position: absolute;
    bottom: 10%;
    left: 50%;
    width: 75%;
    height: 6px;
    border-radius: 30px;
    transform: translateX(-50%);
    background-color: var(--primary-clr);
}
.calendar .days .day:hover.event::after {
    background-color: #fff;
}
.calendar .days .active.event::after {
    background-color: #fff;
    bottom: 20%;
}
.calendar .days .active.event {
    padding-bottom: 10px;
}
.calendar .goto-today {
    width: 100%;
    height: 50px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 5px;
    padding: 0 20px;
    margin-bottom: 20px;
    color: var(--primary-clr);
}
.calendar .goto-today .goto {
    display: flex;
    align-items: center;
    border-radius: 5px;
    overflow: hidden;
    border: 1px solid var(--primary-clr);
}
.calendar .goto-today .goto input {
    width: 100%;
    height: 30px;
    outline: none;
    border: none;
    border-radius: 5px;
    padding: 0 20px;
    color: var(--primary-clr);
    border-radius: 5px;
}
.calendar .goto-today button {
    padding: 5px 10px;
    border: 1px solid var(--primary-clr);
    border-radius: 5px;
    background-color: transparent;
    cursor: pointer;
    color: var(--primary-clr);
}
.calendar .goto-today button:hover {
    color: #fff;
    background-color: var(--primary-clr);
}
.calendar .goto-today .goto button {
    border: none;
    border-left: 1px solid var(--primary-clr);
    border-radius: 0;
}
.containercalendario .right {
    position: relative;
    width: 40%;
    min-height: 100%;
    padding: 20px 0;
}
.right .today-date {
    width: 100%;
    height: 50px;
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    align-items: center;
    justify-content: space-between;
    padding: 0 40px;
    padding-left: 70px;
    margin-top: 50px;
    margin-bottom: 20px;
    text-transform: capitalize;
}
.right .today-date .event-day {
    font-size: 2rem;
    font-weight: 500;
}
.right .today-date .event-date {
    font-size: 1rem;
    font-weight: 400;
    color: #878895;
}
.events {
    width: 100%;
    height: 100%;
    max-height: 600px;
    overflow-x: hidden;
    overflow-y: auto;
    display: flex;
    flex-direction: column;
    padding-left: 4px;
}
.events .event {
    position: relative;
    width: 95%;
    min-height: 70px;
    display: flex;
    justify-content: center;
    flex-direction: column;
    gap: 5px;
    padding: 0 20px;
    padding-left: 50px;
    color: #fff;
    background: linear-gradient(90deg, #3f4458, transparent);
    cursor: pointer;
}
  /* even event */
.events .event:nth-child(even) {
    background: transparent;
}
.events .event:hover {
    background: linear-gradient(90deg, var(--primary-clr), transparent);
}
.events .event .title {
    display: flex;
    align-items: center;
    pointer-events: none;
}
.events .event .title .event-title {
    font-size: 1rem;
    font-weight: 400;
    margin-left: 20px;
}
.events .event i {
    color: var(--primary-clr);
    font-size: 0.5rem;
}
.events .event:hover i {
    color: #fff;
}
.events .event .event-time {
    font-size: 0.8rem;
    font-weight: 400;
    color: #878895;
    margin-left: 15px;
    pointer-events: none;
}
.events .event:hover .event-time {
    color: #fff;
}
  /* add tick in event after */
.events .event::after {
    content: "✓";
    position: absolute;
    top: 50%;
    right: 0;
    font-size: 3rem;
    line-height: 1;
    display: none;
    align-items: center;
    justify-content: center;
    opacity: 0.3;
    color: var(--primary-clr);
    transform: translateY(-50%);
}
.events .event:hover::after {
    display: flex;
}
.add-event {
    position: absolute;
    bottom: 30px;
    right: 30px;
    width: 40px;
    height: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1rem;
    color: #878895;
    border: 2px solid #878895;
    opacity: 0.5;
    border-radius: 50%;
    background-color: transparent;
    cursor: pointer;
}
.add-event:hover {
    opacity: 1;
}
.add-event i {
    pointer-events: none;
}
.events .no-event {
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.5rem;
    font-weight: 500;
    color: #878895;
}
.add-event-wrapper {
    position: absolute;
    bottom: 100px;
    left: 50%;
    width: 90%;
    max-height: 0;
    overflow: hidden;
    border-radius: 5px;
    background-color: #fff;
    transform: translateX(-50%);
    transition: max-height 0.5s ease;
}
.add-event-wrapper.active {
    max-height: 300px;
}
.add-event-header {
    width: 100%;
    height: 50px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0 20px;
    color: #373c4f;
    border-bottom: 1px solid #f5f5f5;
}
.add-event-header .close {
    font-size: 1.5rem;
    cursor: pointer;
}
.add-event-header .close:hover {
    color: var(--primary-clr);
}
.add-event-header .title {
    font-size: 1.2rem;
    font-weight: 500;
}
.add-event-body {
    width: 100%;
    height: 100%;
    display: flex;
    flex-direction: column;
    gap: 5px;
    padding: 20px;
}
.add-event-body .add-event-input {
    width: 100%;
    height: 40px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 10px;
}
.add-event-body .add-event-input input {
    width: 100%;
    height: 100%;
    outline: none;
    border: none;
    border-bottom: 1px solid #f5f5f5;
    padding: 0 10px;
    font-size: 1rem;
    font-weight: 400;
    color: #373c4f;
}
.add-event-body .add-event-input input::placeholder {
    color: #a5a5a5;
}
.add-event-body .add-event-input input:focus {
    border-bottom: 1px solid var(--primary-clr);
}
.add-event-body .add-event-input input:focus::placeholder {
    color: var(--primary-clr);
}
.add-event-footer {
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 20px;
}
.add-event-footer .add-event-btn {
    height: 40px;
    font-size: 1rem;
    font-weight: 500;
    outline: none;
    border: none;
    color: #fff;
    background-color: var(--primary-clr);
    border-radius: 5px;
    cursor: pointer;
    padding: 5px 10px;
    border: 1px solid var(--primary-clr);
}
.add-event-footer .add-event-btn:hover {
    background-color: transparent;
    color: var(--primary-clr);
}

  /* media queries */

@media screen and (max-width: 1000px) {
body {
    align-items: flex-start;
    justify-content: flex-start;
    }
.containercalendario {
    min-height: 100vh;
    flex-direction: column;
    border-radius: 0;
}
.containercalendario .left {
    width: 100%;
    height: 100%;
    padding: 20px 0;
    }
    .containercalendario .right {
    width: 100%;
    height: 100%;
    padding: 20px 0;
}
.calendar::before,
.calendar::after {
    top: 100%;
    left: 50%;
    width: 97%;
    height: 12px;
    border-radius: 0 0 5px 5px;
    transform: translateX(-50%);
    }
    .calendar::before {
    width: 94%;
    top: calc(100% + 12px);
    }
    .events {
    padding-bottom: 340px;
    }
    .add-event-wrapper {
    bottom: 100px;
    }
}
@media screen and (max-width: 500px) {
.calendar .month {
    height: 75px;
    }
.calendar .weekdays {
    height: 50px;
    }
.calendar .days .day {
    height: 40px;
    font-size: 0.8rem;
}
.calendar .days .day.active,
.calendar .days .day.today {
    font-size: 1rem;
    }
    .right .today-date {
    padding: 20px;
}
}






