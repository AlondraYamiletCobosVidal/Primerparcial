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
        <h1 class="display-4" style="text-align: center; font-size: 50px; justify-content: center;" >Flores representativas del luto.</h1><br>
        <p class="lead" style="text-align: center;"> 
            Las flores nos ayudan a sobrellevar los momentos más duros de nuestra vida, como la tristeza por el fallecimiento de un ser querido.
             Las flores de luto simbolizan nuestro respeto por el difunto y nos permiten enviar nuestras condolencias a los familiares antes o 
             después del funeral. Al tratarse de una situación delicada, es importante elegir el tipo y el color de flor adecuados para no 
             transmitir un mensaje equivocado. En este artículo podrás descubrir de dónde viene la tradición de regalar flores a los muertos y 
             el significado de algunas de las flores más típicas para difuntos.
             Si bien es cierto que las flores funerarias se pueden adaptar a los deseos del fallecido o de la familia, existen ciertas variedades
              que se repiten en la mayoría de arreglos florales para funerales. Por ejemplo:
              
              <ul class="plantas" style="font-size: 20px; margin-left: 47%; justify-content: center; align-items: center;">
                <li>  Lirios</li>
                <li>  Crisantemos</li>
                <li>  Orquídeas</li>
                <li>  Claveles</li>
            </ul>
            

             <br>
             <div style="align-items: center; margin-left: 27%;"> 
                <img src="/alondravid/Imagenes/lirios.jpg" width="20%" style="margin: 10px;">
                <img src="/alondravid/Imagenes/crisa.jpg" width="20%" style="margin: 10px;">
                <img src="/alondravid/Imagenes/claveles.jpg" width="20%" style="margin: 10px;">
            </div>
          
        </p>
        <hr class="my-4">
        <p style="text-align: center;"> <strong>Alondra Yamilet Cobos Vidal</strong> </p>
        <p class="lead">
            
        </p>
    </div>
    
        
    


</body>
</html>