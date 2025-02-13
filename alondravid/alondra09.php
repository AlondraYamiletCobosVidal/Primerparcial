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
            color: rgb(255, 255, 255); 
            font-size: 23px;
        }
        .dropdown-item {
            font-size: 15px;
        }
        .dropdown-item:hover {
            background-color: rgb(110, 192, 110);
            font-size: 16px;
        }
        .navbar-brand:hover{
            font-weight: bold;
            color: rgb(0, 0, 0); 
            font-size: 23px;
        }
        .imagen{
            text-align: center;
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
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: #2a9134;" >
        <div class="container">
            <a href="index.html" class="navbar-brand" style="font-size: 23px;"> Inicio </a>
            <!-- boton que lleva a si mismo de color ....-->

            <!--Menu dropdown para poner las ligas practicas-->
            <div class="collapse navbar-collapse" id="navbarNavDropdown"> 
                <ul class="nav navbar-nav">
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspoup="true"
                        aria-expanded="false" style="color: rgb(255, 255, 255); "> Para el amor </a>

                        <!--Lo que sigue son los menus que se van a desplegar hacia abajo, cada uno tendra el nombre de su practica,
                        ejemplo, practica 1 se llamará su nombre + el numero de la practica XX terminando con HTML-->

                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="background-color: #3FA34D;">
                            <a href="" class="dropdown-menu" aria-labelledby="navbardropdownMenuLink">
                                <a class="dropdown-item" href="/alondravid/alondra01.php" style="color: rgb(255, 255, 255);">Tulipanes rojos</a><br>
                                <a class="dropdown-item" href="/alondravid/alondra02.php" style="color: rgb(255, 255, 255);">Claveles rojos</a><br>
                                <a class="dropdown-item" href="/alondravid/alondra03.php" style="color: rgb(255, 255, 255);">Dalias</a><br>
                            </a>
                        </div>
                        </a>
                    </li>

                    <li class="nav-item dropdown">
                        <a href="" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspoup="true"
                        aria-expanded="false" style="color: rgb(255, 255, 255);"> Para la amistad</a>

                        <!--Lo que sigue son los menus que se van a desplegar hacia abajo, cada uno tendra el nombre de su practica,
                        ejemplo, practica 1 se llamará su nombre + el numero de la practica XX terminando con HTML-->

                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="background-color: #3FA34D;">
                            <a href="" class="dropdown-menu" aria-labelledby="navbardropdownMenuLink">
                                <a class="dropdown-item" href="/alondravid/alondra04.php" style="color: rgb(255, 255, 255);">Rosas amarillas</a><br>
                                <a class="dropdown-item" href="/alondravid/alondra05.php" style="color: rgb(255, 255, 255);">Fresias</a><br>
                                <a class="dropdown-item" href="/alondravid/alondra06.php" style="color: rgb(255, 255, 255);">Lirios de los incas</a><br>
                            </a>
                        </div>
                        </a>
                    </li>

                    <li class="nav-item dropdown">
                        <a href="" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspoup="true"
                        aria-expanded="false" style="color: rgb(255, 255, 255);"> Otros... </a>

                        <!--Lo que sigue son los menus que se van a desplegar hacia abajo, cada uno tendra el nombre de su practica,
                        ejemplo, practica 1 se llamará su nombre + el numero de la practica XX terminando con HTML-->

                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="background-color: #3FA34D;">
                            <a href="" class="dropdown-menu" aria-labelledby="navbardropdownMenuLink">
                                <a class="dropdown-item" href="/alondravid/alondra07.php" style="color: rgb(255, 255, 255);">Condolencias</a><br>
                                <a class="dropdown-item" href="/alondravid/alondra08.php" style="color: rgb(255, 255, 255);">Cumpleaños</a><br>
                                <a class="dropdown-item" href="/alondravid/alondra09.php" style="color: rgb(255, 255, 255);">Nacimiento</a><br>
                            </a>
                        </div>
                        </a>
                    </li>
                </ul>
            </div>



        </div>
    </nav>

    
    <div class="jumbotron">
        <h1 class="display-4" style="text-align: center; font-size: 50px; justify-content: center;" >Nacimiento.</h1><br>
        <p class="lead" style="text-align: center;"> 
            Buscar un regalo para el nacimiento de un bebé puede suponer un reto, porque las opciones cada día son mayores. Sin embargo, 
            una apuesta segura a la vez que sencilla y emotiva son las flores. 
            Para saber qué tipo de flores se regalan en un nacimiento es recomendable para tener en cuenta qué variedades son las más
             habituales, así como su significado. Cada una cuenta con un mensaje implícito que harán del detalle una entrega muy especial.
            ¿Por qué se regalan flores en un nacimiento?<br>
             La belleza, el aroma… No hay una sola razón con la que se pueda explicar por qué se regalan flores para el nacimiento de un bebé. 
             De hecho, la propia acción de entregar flores como una muestra de los sentimientos se remonta a las primeras comunidades del ser 
             humano.
            Quizá la respuesta esté, además de valorar las características que podemos percibir a través de nuestros sentidos como la vista o 
            el olfato, en aquello que no se puede describir con palabras ni tampoco captar de forma física.
            El simbolismo de una flor, o incluso de un ramo de flores, como regalo ayuda a materializar la alegría y la ilusión. Así, su 
            significado consigue transmitir sentimientos para conseguir expresarlos de una manera inigualable

             <br>
             <div class="imagen" style="align-items: center; "> 
                <img src="/alondravid/Imagenes/gardenia.jpg" width="30%" style="margin: 10px;">
                <img src="/alondravid/Imagenes/glado.jpg" width="30%" style="margin: 10px;">
            </div>
          
        </p>
        <hr class="my-4">
        <p style="text-align: center;"> <strong>Alondra Yamilet Cobos Vidal</strong> </p>
        <p class="lead">
            
        </p>
    </div>
    
        
    


</body>
</html>