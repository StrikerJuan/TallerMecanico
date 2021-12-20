<?php
    include("conexion.php");

$folio=$_GET['edit'];
$sql="SELECT * FROM reparacion WHERE folio='$folio'";
$query=mysqli_query($conectar, $sql);
$row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/styles/Styles.css">
    <link rel="stylesheet" href="src/styles/style-repar.css">
    <title>Actualizar</title>
</head>

<body>
    <div class="cover"></div>
    <section class="cabecera">
    <h1>ACTUALIZAR DATOS</h1>
        <hr>
        <div class="contenido">
            <form method="POST" name="form-work" action="logicareparacion.php">
                <input name="folio" value="<?php echo $row['folio'] ?>" class="form-control" placeholder="Ej. 00070531" type="hidden">
                <label for="tipo">Tipo de reparación:</label>
                <select value="<?php echo $row['tipo'] ?>" name="tipo" id="tipo">
                    <option value="Preventiva">Preventiva</option>
                    <option value="Por daños">Por daños</option>
                </select>
                <label for="descripcion">Descripción:</label>
                <input name="descripcion" value="<?php echo $row['descripcion'] ?>" class="form-control" placeholder="Describa el problema" type="text">
                <label for="costo">Costo:</label>
                <input name="costo" value="<?php echo $row['costo'] ?>" class="form-control" placeholder="$9,999" type="text">
                <br><br>
                <div class="login-log">
                    <!-- <input type="submit" name="guardardatos" value="Registrar" />
                    <input type="submit" name="eliminardatos" value="Eliminar">
                    <input type="submit" name="modificardatos" value="Actualizar"> -->
                    <input type="submit" name="actualizardatos" value="Guardar" />
                </div>
                
            </form>
            <br>
            <form class="botones" action="reparacion.php" method="get">
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