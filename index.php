<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/styles/Styles.css">
    <link rel="stylesheet" href="src/styles/style-coche.css">
    <title>Coche Page</title>
</head>

<body>
    <div class="cover"></div>
    <section class="cabecera">
        <nav>
            <div class="logo">
                <a href="home.html">Equipo 7</a>
            </div>
        </nav>
        <div class="contenido">
            <form method="POST" name="form-work" action="guardar.php">
                <label for="placa">Placa:</label>
                <input type="text" placeholder="Ej. AAA-123" id="placa" name="placa">
                <label for="nombre">Nombres:</label>
                <input type="text" placeholder="Ej. Arturo" id="nombre" name="nombre">
                <label for="apellidos">Apellidos:</label>
                <input type="text" placeholder="Ej. Peréz Hernández" id="apellidos" name="apellidos">
                <label for="nome">Marca:</label>
                <input type="text" placeholder="Ej. BMW" id="marca" name="marca">
                <label for="surname">Modelo:</label>
                <input type="text" placeholder="Ej. BMW Serie 3 " id="modelo" name="modelo">
                <label for="anio">Año:</label>
                <input type="text" placeholder="1970" id="anio" name="anio">
                <label for="color">Color:</label>
                <input type="text" placeholder="Rojo" id="color" name="color">
                <br><br>
                <div class="login-log">
                    <!-- Aqui puede haber pedo, checalo -->
                    <input type="submit" name="guardardatos" value="Registrar" />
                    <!-- <input type="submit" name="eliminardatos" value="Eliminar">
                    <input type="submit" name="modificardatos" value="Actualizar"> -->
                </div>
            </form>
        </div>
        <div class="tabla">
            <!-- <p>Aqui va a ir la tabla x jala el css jotod</p> -->
            <?php
       $mysqli= new mysqli('localhost','root','','mecanicos') or die(mysqli_error($mysqli));
       $result = $mysqli->query("SELECT * FROM clientes") or die($mysqli->error);
    ?>
        <div class="row justify-content-center">
          <table class="table">
            <thead>
              <tr>
                <th>Placa</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Año</th>
                <th>Color</th>
                <th colspan="2">Acciones</th>
              </tr>
            </thead>
            <?php
            while ($row=$result->fetch_assoc()):?>
              <tr>
                <td><?php echo $row['placa']; ?></td>
                <td><?php echo $row['nombre']; ?></td>
                <td><?php echo $row['apellidos']; ?></td>
                <td><?php echo $row['marca']; ?></td>
                <td><?php echo $row['modelo']; ?></td>
                <td><?php echo $row['anio']; ?></td>
                <td><?php echo $row['color']; ?></td>
                <td>
                  <a href="actualizarclientes.php?edit=<?php echo $row['placa']; ?>"
                    class="btn btn-info">Editar</a>
                  <a href="guardar.php?delete=<?php echo $row['placa']; ?>"
                    class="btn btn-danger">Eliminar</a>
                </td>
              </tr>
              <?php endwhile; ?>
           </table>
        </div>

    <?php
        function pre_r($array){
         echo '<pre>';
         print_r($array);
         echo '</pre>';
       }
    ?>

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