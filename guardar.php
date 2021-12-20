<?php

session_start();

$mysqli= new mysqli('localhost','root','','mecanicos') or die(mysqli_error($mysqli));




if(isset($_POST['guardardatos']))
{
    $placa = $_POST['placa'];
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $marca  = $_POST['marca'];
    $modelo  = $_POST['modelo'];
    $anio = $_POST['anio'];
    $color = $_POST['color'];

    $mysqli->query("INSERT INTO clientes VALUES ('$placa','$nombre','$apellidos','$marca','$modelo','$anio','$color')") or die($mysqli->error);

    if($mysqli){
        echo "<script> alert('DATOS INGRESADOS CORRECTAMENTE');
        location.href = 'index.php';
       </script>";
    }else{
        echo "<script> alert('ERROR AL INGRESAR DATOS');
        location.href = 'index.php';
        </script>";
    }
  
}
if(isset($_GET['delete']))
{
    $placa = $_GET['delete'];
    $mysqli->query("DELETE FROM clientes WHERE placa='$placa'") or die($mysqli->error);

    if($mysqli){
        echo "<script> alert('DATOS ELIMINADOS CORRECTAMENTE');
        location.href = 'index.php';
       </script>";
    }else{
        echo "<script> alert('ERROR AL INGRESAR DATOS');
        location.href = 'index.php';
        </script>";
    }
}


if(isset($_POST['actualizardatos']))
{
    include("conexion.php");

    $placa=$_POST['placa'];
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $marca  = $_POST['marca'];
    $modelo  = $_POST['modelo'];
    $anio = $_POST['anio'];
    $color = $_POST['color'];

    $modificar = "UPDATE clientes SET nombre='$nombre',apellidos='$apellidos',marca='$marca',modelo='$modelo',anio='$anio',color='$color' WHERE placa='$placa'";

    $query = mysqli_query($conectar, $modificar);
    
    if($query){
    
        echo "<script> alert('DATOS MODIFICADOS CORRECTAMENTE');
        location.href = 'index.php';
        </script>";
    
    }else{
        echo "<script> alert('Error');
        location.href = 'index.php';
        </script>";
    }
}

/*
if($_SERVER['REQUEST_METHOD']=="POST"and isset($_POST['modificardatos']))
{
    $placa=$_POST['placa'];
    $modificar = "UPDATE clientes SET nombre='$nombre',apellidos='$apellidos',marca='$marca',modelo='$modelo',anio='$anio',color='$color' WHERE placa='$placa'";

    $query = mysqli_query($conectar, $modificar);
    
    if($query){
    
        echo "<script> alert('DATOS MODIFICADOS CORRECTAMENTE');
        location.href = 'index.php';
        </script>";
    
    }else{
        echo "<script> alert('Error');
        location.href = 'index.php';
        </script>";
    }
}
if($_SERVER['REQUEST_METHOD']=="POST"and isset($_POST['buscardatos']))
    {
        $buscar = "SELECT * FROM clientes WHERE folio=$folio";
    
        $query = mysqli_query($conectar, $buscar);
        
        if($query){
            header("Location:index.php");
            while($resul=mysqli_fetch_array($query))
            {
                $marca=$resul[0];
                $modelo=$resul[1];
                $placa=$resul[2];
    
            }
        }
        
        

        
    }*/








?>