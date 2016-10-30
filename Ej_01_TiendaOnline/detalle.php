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
                <h1>Información</h1>
            </div>

            <div id="content">
                <div id="detalle">
                    <h3>Detalle de la excursión</h3><hr>
                    <?php
                    $codigo = $_POST['codigo'];
                    $excursiones = $_SESSION['excursiones'];
                    $articulo = $excursiones[$codigo];
                    ?>
                    <div><img src="img/<?= $articulo[imagen] ?>"><br>
                        <?= $articulo[nombre] ?><br>Precio: <?= $articulo[precio] ?> mxn<br>
                        Unidades pendientes en el carrito: <?= $_SESSION['carrito'][$codigo] ?>;
                        <br><?= $articulo[detalle] ?><br><br>
                        <form action="index.php#<?= $codigo ?>" method="post">
                            <input type="hidden" name="codigo" value="<?= $codigo ?>">
                            <input type="hidden" name="accion" value="comprar">
                            <input class="compra"  type="submit" value="Comprar">
                        </form>
                        <form action="index.php#<?= $codigo ?>" method="post">
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

