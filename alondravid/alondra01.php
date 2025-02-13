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

    <link href="https://fonts.cdnfonts.com/css/brigetha-signature" rel="stylesheet">
                

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
                                <a class="dropdown-item" href="/alondravid/alondra01.php" style="color: black;">Tulipanes rojos</a><br>
                                <a class="dropdown-item" href="/alondravid/alondra02.php" style="color: black;">Claveles rojos</a><br>
                                <a class="dropdown-item" href="/alondravid/alondra03.php" style="color: black;">Dalias</a><br>
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
                                <a class="dropdown-item" href="/alondravid/alondra04.php" style="color: black;">Rosas amarillas</a><br>
                                <a class="dropdown-item" href="/alondravid/alondra05.php" style="color: black;">Fresias</a><br>
                                <a class="dropdown-item" href="/alondravid/alondra06.php" style="color: black;">Lirios de los incas</a><br>
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

    <?php 
    $username = "root";
    $password = "";
    $servername = "localhost";
    $database = "sanvalentin";

    $conexion = new mysqli($username, $password, $servername, $database);
    if($conexion->connect_error){
        die("Conexion Fallida: ". $conexion->connect_error);
    }
    $sql = "SELECT * FROM flores"; //nombre de la tabla//
    $resultado = $conexion->query($sql);
    
    
    ?>
        <h1 class="display-4" style="text-align: center; font-size: 50px; justify-content: center;" >Tulipanes rojos.</h1><br>
        <p class="lead" style="text-align: center;"> Si hay unos tulipanes que llaman la atención sin duda alguna son los de color rojo. 
            El color es realmente intenso y quieras o no la mirada se va con ellos. El significado de los tulipanes rojos se asocia a la pasión, 
            a ese amor en un principio, tan intenso y bonito. Un ramo de tulipanes rojos siempre dirá mucho más de lo que parece a primera vista.
             <br><br>
            El rojo es, sin lugar a dudas, el color por excelencia del amor y la pasión. Una simbología que, si bien es sumamente popular en
             flores como la rosa, también es común a otras como el tulipán.

            Más allá de que el tulipán rojo sea ideal para transmitir estos sentimientos, hay que saber algo más. 
            Y es que, en este color, estas flores 
            transmiten un significado sumamente profundo. Si regalamos o nos regalan tulipanes rojos, con ellos tendremos la declaración de un compromiso 
            absoluto con nuestra relación.<br>
           <img src="/Imagenes/tp.jpg" width="20%" style="margin: 10px;">
        </p>
        <hr class="my-4">
        <p style="text-align: center;"> <strong>Alondra Yamilet Cobos Vidal</strong> </p>
        <p class="lead">
            
        </p>
    </div>
    
        
    


</body>
</html>
