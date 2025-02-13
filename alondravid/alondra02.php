<!DOCTYPE html>
<html lang="en">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap');
        *{
          margin: 0px;
          padding: 0px;
          align-items: center;
          font-family: 'Poppins', sans-serif;;
          justify-content: center;
        }
        .jumbotron{
            margin: 1.5%;
            align-items: center;
        }
        .row{
            display: flex;
            padding-left: 20px;   
        
        }
        .nav-link dropdown-toggle{
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        }
        .nav-link{
            font-size: 17px;
        }
       
        .navbar-brand{
            font-weight: bold;
            color: black; 
            font-size: 23px;
        }
        .dropdown-item {
            font-size: 15px;
        }
        .dropdown-item:hover {
            background-color: rgb(185, 111, 133);
            font-size: 16px;
        }
        .navbar-brand:hover{
            font-weight: bold;
            color: rgb(255, 255, 255); 
            font-size: 23px;
        }
       
    </style>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>


    <title>Alondra Vidal</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: #F74235;" >
        <div class="container">
            <a href="index.html" class="navbar-brand" style="font-size: 23px;"> Inicio </a>
            <!-- boton que lleva a si mismo de color ....-->

            <!--Menu dropdown para poner las ligas practicas-->
            <div class="collapse navbar-collapse" id="navbarNavDropdown"> 
                <ul class="nav navbar-nav">
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspoup="true"
                        aria-expanded="false" style="color: black; "> Para el amor </a>

                        <!--Lo que sigue son los menus que se van a desplegar hacia abajo, cada uno tendra el nombre de su practica,
                        ejemplo, practica 1 se llamará su nombre + el numero de la practica XX terminando con HTML-->

                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="background-color: #ffb8cd;">
                            <a href="" class="dropdown-menu" aria-labelledby="navbardropdownMenuLink">
                                <a class="dropdown-item" href="alondra01.html" style="color: black;">Tulipanes rojos</a><br>
                                <a class="dropdown-item" href="alondra02.html" style="color: black;">Claveles rojos</a><br>
                                <a class="dropdown-item" href="alondra03.html" style="color: black;">Dalias</a><br>
                            </a>
                        </div>
                        </a>
                    </li>

                    <li class="nav-item dropdown">
                        <a href="" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspoup="true"
                        aria-expanded="false" style="color: black;"> Para la amistad</a>

                        <!--Lo que sigue son los menus que se van a desplegar hacia abajo, cada uno tendra el nombre de su practica,
                        ejemplo, practica 1 se llamará su nombre + el numero de la practica XX terminando con HTML-->

                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="background-color: #ffb8cd;">
                            <a href="" class="dropdown-menu" aria-labelledby="navbardropdownMenuLink">
                                <a class="dropdown-item" href="alondra04.html" style="color: black;">Rosas amarillas</a><br>
                                <a class="dropdown-item" href="alondra05.html" style="color: black;">Fresias</a><br>
                                <a class="dropdown-item" href="alondra06.html" style="color: black;">Lirios de los incas</a><br>
                            </a>
                        </div>
                        </a>
                    </li>

                    <li class="nav-item dropdown">
                        <a href="" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspoup="true"
                        aria-expanded="false" style="color: black;"> Otros... </a>

                        <!--Lo que sigue son los menus que se van a desplegar hacia abajo, cada uno tendra el nombre de su practica,
                        ejemplo, practica 1 se llamará su nombre + el numero de la practica XX terminando con HTML-->

                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="background-color: #ffb8cd;">
                            <a href="" class="dropdown-menu" aria-labelledby="navbardropdownMenuLink">
                                <a class="dropdown-item" href="alondra07.html" style="color: black;">Condolencias</a><br>
                                <a class="dropdown-item" href="alondra08.html" style="color: black;">Cumpleaños</a><br>
                                <a class="dropdown-item" href="alondra09.html" style="color: black;">Nacimiento</a><br>
                            </a>
                        </div>
                        </a>
                    </li>
                </ul>
            </div>



        </div>
    </nav>

    
    <div class="jumbotron">
        <h1 class="display-4" style="text-align: center; font-size: 50px; justify-content: center;" >Clavel rojo.</h1><br>
        <p class="lead" style="text-align: center; font-size: 20px;"> El clavel es una planta típica del Mediterráneo y su belleza es tal que, 
            cuando se catalogó por primera vez en la Antigua Grecia, se le concedió el nombre de Dianthus. Esta palabra es la fusión de las
             palabras griegas “día”, o dios, y “anthos”, flor. Por lo que, literalmente, el clavel se considera la flor de los dioses. 
             La variedad más habitual es la Dianthus caryophyllus.<br><br>
             El rojo es el color de la pasión y del amor, por lo que el significado de los claveles rojos está muy unido al amor pasional.
              Cuanto más intenso sea el rojo de tus claveles, más claro quedará tu mensaje.<br>
           <img src="/Imagenes/claa.jpg" width="30%" style="margin: 13px;">
        </p>
        <hr class="my-4">
        <p style="text-align: center;"> <strong>Alondra Yamilet Cobos Vidal</strong> </p>
        <p class="lead">
            
        </p>
    </div>
    
