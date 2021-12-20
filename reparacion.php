<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/styles/Styles.css">
    <link rel="stylesheet" href="src/styles/style-repar.css">
    <title>Reparaciones Page</title>
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
            <form method="POST" name="form-work" action="logicareparacion.php">
                <label for="folio">Folio de coche:</label>
                <input type="text" placeholder="Ej. 00070531" id="folio" name="folio">
                <label for="tipo">Tipo de reparación:</label>
                <select name="tipo" id="tipo">
                    <option value="Preventiva">Preventiva</option>
                    <option value="Por daños">Por daños</option>
                </select>
                <label for="descripcion">Descripción:</label>
                <input type="text" placeholder="Describa el problema" id="descripcion" name="descripcion">
                <label for="costo">Costo:</label>
                <input type="text" placeholder="$9,999" id="costo" name="costo">
                <br><br>
                <div class="login-log">
                    <input type="submit" name="guardardatos" value="Registrar" />
                    <!-- <input type="submit" name="eliminardatos" value="Eliminar">
                    <input type="submit" name="modificardatos" value="Actualizar"> -->
                </div>
            </form>
        </div>
        <div class="tabla">
        <?php
       $mysqli= new mysqli('localhost','root','','mecanicos') or die(mysqli_error($mysqli));
       $result = $mysqli->query("SELECT * FROM reparacion") or die($mysqli->error);
    ?>
        <div class="row justify-content-center">
          <table class="table">
            <thead>
              <tr>
                <th>Folio</th>
                <th>Tipo de Reparación</th>
                <th>Descripción</th>
                <th>Costo</th>
                <th colspan="2">Acciones</th>
              </tr>
            </thead>
            <?php
            while ($row=$result->fetch_assoc()):?>
              <tr>
                <td><?php echo $row['folio']; ?></td>
                <td><?php echo $row['tipo']; ?></td>
                <td><?php echo $row['descripcion']; ?></td>
                <td><?php echo $row['costo']; ?></td>
                
                <td>
                  <a href="actualizarreparacion.php?edit=<?php echo $row['folio']; ?>"
                    class="btn btn-info">Editar</a>
                  <a href="logicareparacion.php?delete=<?php echo $row['folio']; ?>"
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