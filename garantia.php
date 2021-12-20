<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/styles/Styles.css">
    <link rel="stylesheet" href="src/styles/style-garantia.css">
    <title>Garantia Page</title>
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
            <form method="POST" name="form-work" action="logicagarantia.php">
                <label for="folio">Folio del coche:</label>
                <input type="text" placeholder="Ej. 00070531" id="folio" name="folio">
                <label for="igarantia">Inicio de garantia:</label>
                <input type="date" id="igarantia" name="igarantia" aria-describedby="date-format" min="2021-01-01" max="2031-01-01" ><br>
                <label for="fgarantia">Fin de garantia:</label>
                <input type="date" id="fgarantia" name="fgarantia" aria-describedby="date-format" min="2021-01-01" max="2031-01-01">
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
       $result = $mysqli->query("SELECT * FROM garantia") or die($mysqli->error);
    ?>
        <div class="row justify-content-center">
          <table class="table">
            <thead>
              <tr>
                <th>Folio</th>
                <th>Inicio de la garantía</th>
                <th>Fin de la garantía</th>
                <th colspan="2">Acciones</th>
              </tr>
            </thead>
            <?php
            while ($row=$result->fetch_assoc()):?>
              <tr>
                <td><?php echo $row['folio']; ?></td>
                <td><?php echo $row['igarantia']; ?></td>
                <td><?php echo $row['fgarantia']; ?></td>
                
                
                <td>
                  <a href="actualizargarantia.php?edit=<?php echo $row['folio']; ?>"
                    class="btn btn-info">Editar</a>
                  <a href="logicagarantia.php?delete=<?php echo $row['folio']; ?>"
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