<?php

session_start();

 $mysqli= new mysqli('localhost','root','','mecanicos') or die(mysqli_error($mysqli));

 
if(isset($_POST['guardardatos']))
{
    
    $folio = $_POST['folio'];
    $igarantia = $_POST['igarantia'];
    $fgarantia = $_POST['fgarantia'];

   $mysqli->query("INSERT INTO garantia VALUES ('$folio','$igarantia','$fgarantia') ") or die($mysqli->error);
   
    if($mysqli){
    
       echo "<script> alert('DATOS INGRESADOS CORRECTAMENTE');
        location.href = 'garantia.php';
       </script>";
       
    
    }else{
        echo "<script> alert('incorrecto');
        location.href = 'garantia.php';
        </script>";
        
    }
}
if(isset($_GET['delete']))
{

    $folio=$_GET['delete'];
    $mysqli->query("DELETE FROM garantia WHERE folio='$folio'") or die($mysqli->error);

    if($mysqli){

    echo "<script> alert('DATOS ELIMINADOS CORRECTAMENTE');
    location.href = 'garantia.php';
    </script>";

}else{
    echo "<script> alert('Error');
    location.href = 'garantia.php';
    </script>";
}
}

if(isset($_POST['actualizardatos']))
{
    include("conexion.php");
    $folio = $_POST['folio'];
    $igarantia = $_POST['igarantia'];
    $fgarantia = $_POST['fgarantia'];

    
    $modificar = "UPDATE garantia SET igarantia='$igarantia',fgarantia='$fgarantia' WHERE folio=$folio";

    $query = mysqli_query($conectar, $modificar);
    
    if($query){
    
        echo "<script> alert('DATOS MODIFICADOS CORRECTAMENTE');
        location.href = 'garantia.php';
        </script>";
    
    }else{
        echo "<script> alert('Error');
        location.href = 'garantia.php';
        </script>";
    }
}


?>