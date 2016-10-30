<?php
session_start();
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link href="css/estilo.css" rel="stylesheet" type="text/css" />
        <title></title>
    </head>
    <body>
        <div id="container">
            <div id="header">
                <h1>Vaciar carrito</h1>
            </div>

            <div id="content">
                <div id="detalle">
                    <h3>Y te lo vas a perder?</h3><hr>
                    <?php
                    $codigo = $_POST['codigo'];
                    $excursiones = $_SESSION['excursiones'];
                    $articulo = $excursiones[$codigo];

                    $total = 0;
                    foreach ($_SESSION['excursiones'] as $codigo => $articulo) {
                        if ($_SESSION['carrito'][$codigo] > 0) {
                            $total = $total + ($_SESSION['carrito'][$codigo] * $articulo[precio]);
                            ?>
                            <div><img src="img/<?= $articulo[imagen] ?>"><br>
                                <?= $articulo[nombre] ?><br>Precio: <?= $articulo[precio] ?> mxn<br>
                                Unidades: <?= $_SESSION['carrito'][$codigo] ?>
                                <form action="eliminar.php" method="post">
                                    <input type="hidden" name="codigo" value="<?= $codigo ?>">
                                    <input type="hidden" name="accion" value="eliminar">
                                    <input class="eliminar" type="submit" value="Eliminar">
                                </form></div><br><br>
                            <?php
                        }
                    }
                    ?>
                    <b>Total: <?= $total ?> mxn</b><br><br><br>

                    <form action="index.php" method="post">
                        <input type="hidden" name="codigo" value="<?= $codigo ?>">
                        <input type="hidden" name="accion" value="vaciar">
                        <input class="eliminar" type="submit" value="Vaciar Carrito">
                    </form>
                    <form action="index.php" method="post">
                        <input class="volver" type="submit" value="Volver a la tienda">
                    </form></div>
                <br><br>
            </div>
        </div>
        <div id="footer">
            © Belén Gutierrez
        </div>

    </div>
</body>
</html>
