<!--
// Ejemplo de Ternario.

/**
 * * 1. Hacer un programa que calcule el total a pagar por la compra de camisas. Si se compran tres camisas o mas se aploca un descuento del 20% si son menos de tres el descuento es del 10%.
 */ -->
<?php 


    $cantidad = $_POST['cantidad'];
    $precio = $cantidad * 20;
    $promocion = ($cantidad >= 3) ? $precio * 0.20 : $precio * 0.10;
    $pagar = $precio - $promocion

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="../bootstrap.css/bootstrap.min.css" />
    <link rel="stylesheet" href="./styles.css" />
    <script src="../bootstrap.js/bootstrap.min.js" defer></script>
</head>

<body>
    <div class="container">
        <div class="row text-center mt-3">
            <div class="col-12">
                <h2>Taller 1.</h2>
                <p>
                    Descuento del 10% en las camisas, pero si compra mas de 3 camisas se
                    le aplica un descuento del 20%.
                </p>
                <p>Se venden camisas a 20$</p>
                <p></p>
            </div>
        </div>
        <form action="" method="POST">
            <div class="row formu">
                <div class="col-12 compras">
                    <div class="form-floating">
                        <input type="number" class="form-control " name="cantidad" placeholder="." />
                        <label for="floatingInput">Cuantas camisas va a comprar?</label>
                    </div>
                </div>
                <div class="col-7">
                    <div class="form-floating">
                        <textarea class="form-control mt-5" placeholder="Tiene que pagar: " id="floatingTextarea" value=" " disabled></textarea>
                        <label for="floatingTextarea"><?php  echo $pagar;?></label>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>

</html>