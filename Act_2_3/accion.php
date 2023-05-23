<?php
if (isset($_POST['btn'])){

    $nombre =$_POST['nombre'];
    $apellidoPaterno =$_POST['apellidoPaterno'];
    $apellidoMaterno =$_POST['apellidoMaterno'];

    $auto=$_POST['auto'];
     
            
      
     
    echo"informacion recibida </br>";

    echo"El Nombre recibido es:  ".$nombre. "</br>";
    echo"El Apellido Paterno recibido es.  ". $apellidoPaterno ."</br>";
    echo"El Apellido Materno recibido es.  ". $apellidoMaterno ."</br>";
    echo"El Auto  es.  ". $auto ."</br>";
    if(!empty($_POST['fruta'])){

        foreach($_POST['fruta'] as $select){
    echo"Las frutas son:  ". $select ."</br>";
    
}
}
}