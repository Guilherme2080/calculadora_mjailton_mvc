<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculo calculadora</title>
</head>
<body>
    <h1>Sistema Calculadora</h1>

    <form method="POST" action="<?php echo URL_BASE."calculo/multiplicar"?>">
            Valor de a: <input type="text" name="a" value="<?php echo isset($a) ?$a :"" ?>">
            Valor de b: <input type="text" name="b" value="<?php echo isset($b) ?$b :"" ?>">
                        <input type="submit" value="enviar">

    </form>
    <?php if(isset($resultado)) { ?>
         <p>O resultado é:<?php echo  $resultado?></p>
    <?php } ?>
</body>
</html>