<?php
 session_start();

 $mysqli= new mysqli('localhost','root','','mecanicos') or die(mysqli_error($mysqli));



if($_SERVER['REQUEST_METHOD']=="POST"and isset($_POST['guardardatos']))
{
    $folio = $_POST['folio'];
    $tipo = $_POST['tipo'];
    $descripcion = $_POST['descripcion'];
    $costo  = $_POST['costo'];

    $mysqli->query("INSERT INTO reparacion VALUES ('$folio','$tipo','$descripcion','$costo') ") or die($mysqli->error);
    
    if($mysqli){
    
       echo "<script> alert('DATOS INGRESADOS CORRECTAMENTE');
        location.href = 'reparacion.php';
       </script>";
       
    
    }else{
        echo "<script> alert('incorrecto');
        location.href = 'reparacion.php'; 
        </script>";
        
    }
}
if(isset($_GET['delete']))
{
    $folio=$_GET['delete'];
    $mysqli->query("DELETE FROM reparacion WHERE folio='$folio'") or die($mysqli->error);

if($mysqli){

    echo "<script> alert('DATOS ELIMINADOS CORRECTAMENTE');
    location.href = 'reparacion.php';
    </script>";

}else{
    echo "<script> alert('Error');
    location.href = 'reparacion.php';
    </script>";
}
}

if(isset($_POST['actualizardatos']))
{
    include("conexion.php");

    $folio = $_POST['folio'];
    $tipo = $_POST['tipo'];
    $descripcion = $_POST['descripcion'];
    $costo  = $_POST['costo'];

    
    $modificar = "UPDATE reparacion SET tipo='$tipo',descripcion='$descripcion',costo='$costo' WHERE folio='$folio'";

    $query = mysqli_query($conectar, $modificar);
    
    if($query){
    
        echo "<script> alert('DATOS MODIFICADOS CORRECTAMENTE');
        location.href = 'reparacion.php';
        </script>";
    
    }else{
        echo "<script> alert('Error');
        location.href = 'reparacion.php';
        </script>";
    }
}

?>