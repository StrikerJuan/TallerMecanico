<?php
include("conexion.php");



$placa = $_GET['edit'];
$sql = "SELECT * FROM clientes WHERE placa='$placa'";
$query = mysqli_query($conectar, $sql);
$row = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/styles/Styles.css">
    <link rel="stylesheet" href="src/styles/style-coche.css">
    <title>Actualizar</title>
</head>

<body>
    <div class="cover"></div>
    <section class="cabecera">
        <!-- <nav>
            <div class="logo">
                <a href="home.html">Equipo 7</a>
            </div>
        </nav> -->
        <h1>ACTUALIZAR DATOS</h1>
        <hr>
        <div class="contenido">
            <form method="POST" name="form-work" action="guardar.php">
                <input name="placa" value="<?php echo $row['placa'] ?>" placeholder="Ej. AAA-123" type="hidden">
                <label for="nombre">Nombres:</label>
                <input name="nombre" value="<?php echo $row['nombre'] ?>" placeholder="Ej. Arturo" type="text">
                <label for="apellidos">Apellidos:</label>
                <input name="apellidos" value="<?php echo $row['apellidos'] ?>" placeholder="Ej. Peréz Hernández" type="text">
                <label for="nome">Marca:</label>
                <input name="marca" value="<?php echo $row['marca'] ?>" placeholder="Ej. BMW" type="text">
                <label for="surname">Modelo:</label>
                <input name="modelo" value="<?php echo $row['modelo'] ?>" placeholder="Ej. BMW Serie 3 " type="text">
                <label for="anio">Año:</label>
                <input name="anio" value="<?php echo $row['anio'] ?>" placeholder="2000" type="text">
                <label for="color">Color:</label>
                <input name="color" value="<?php echo $row['color'] ?>" placeholder="Rojo" type="text">
                <br><br>
                <div class="login-log">
                    <!-- Aqui puede haber pedo, checalo
                    <input type="submit" name="guardardatos" value="Registrar" />
                    <input type="submit" name="eliminardatos" value="Eliminar">
                    <input type="submit" name="modificardatos" value="Actualizar"> -->
                    <input type="submit" name="actualizardatos" value="Guardar" />
                </div>
                
            </form>
            
            <!-- <input type="submit" name="actualizardatos" value="Guardar" /> -->
            <!-- <button type="submit" class="btn btn-info" name="actualizardatos">Guardar</button> -->
            
            <form class="botones" action="index.php" method="get">
                <div class="login-log">
                    
                    <input type="submit" value="Cancelar" />
                </div>
            </form>
        </div>

    </section>
    <section class="pie">
        <h1>Cruz Sánchez Miguel Zared</h1>
        <h1>Horta Alvarado Juan Carlos</h1>
        <h1>Jimenez Paniagua Aldo</h1>
        <h1>Montiel Padilla Paola Virginia</h1>
    </section>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

</html>