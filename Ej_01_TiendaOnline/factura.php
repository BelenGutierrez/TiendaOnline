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
                <h1>Gracias por su compra</h1>
            </div>

            <div id="content">
                <div id="detalle">
                    <h3>Factura</h3><hr>
                    <?php
                    
                    $total = $_POST['total'];
                    $gasto = 0;
                    $descuento = 0;
                    
                   
                    
                    ?>
                    <table><tr><th colspan="2">ISLA MUJERES TRAVEL AGENCY</th></tr>
                        <tr><td>Domicilio: El mejor lugar del world</td><td>Fecha: 28/10/16</td></tr>
                        <tr><td>Factura Nº 20161028A</td><td></td></tr>
                        <tr><td colspan="2"></td></tr>
                        <tr><td>Subtotal</td><td><?= $total ?> mxn</td></tr>
                        <tr><td>Gastos de envío</td><td><?php
                                if ($total >= 6000) {
                                    echo $gasto . " mxn";
                                } else {
                                    switch ($_POST['opcion']) {
                                        case "espa" :
                                            $gasto = 9;
                                            break;
                                        case "europa" :
                                            $gasto = 14;
                                            break;
                                        case "resto" :
                                            $gasto = 21;
                                            break;
                                        default :
                                            break;
                                    }
                                    echo $gasto . " mxn";
                                }
                                ?></td></tr>


                        <tr><td>Descuento</td><td><?php
                                //$descuento = 0;
                                if ($total >= 20000) {
                                    echo $descuento = $total * 5 / 100  ." mxn";
                                } else {
                                    echo $descuento ." mxn";
                                }
                                ?>


                            </td></tr>
                        <tr><td colspan="2"></td></tr>
                        <tr><td>Neto</td><td><?= $neto = $total + $gasto - $descuento ?> mxn</td></tr>
                        <tr><td>IVA 16%</td><td><?= $iva = $neto * 16 / 100 ?> mxn</td></tr>
                        <tr><td>TOTAL</td><td><?= $totalApagar = $neto + $iva ?> mxn</td></tr>
                    </table><br>

                    <form action="index.php" method="post">
                        <input type="hidden" name="accion" value="finalizar">
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

