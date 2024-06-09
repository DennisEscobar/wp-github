<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Ejemplo 1</title>
</head>
<body>
    <h1>App Desplegada/h1>
    <hr>
    <h3>Se requiere un programa en PHP para deteminar el cambio que reibirá
        una persona que compra un producto en un almacén
    </h3>
    <hr>
    <?php 
        $precio = 5;
        $pago = 20;

        $cambio = $pago - $precio;

        echo "El precio del producto es: $ $precio <hr>";
        echo "Usted pagó la cantidad de: $ $pago <hr>";
        echo "su cambio es: $ $cambio <hr>";
        echo "Gracias por su compra...";
    ?>
</body>
</html>