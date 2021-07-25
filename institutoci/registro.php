<?php
//conexión
$conect= new mysqli('localhost','root','','bd1');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilos1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="uno.js" ></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="slider.js"></script>
    <title>contactos</title>
</head>
<body>
    <form action="" method="post">
        <h1>Contactos</h1>
        <table border="0">
            <tr>
                <td>Ingrese nombre del cliente</td>
                <td><input type="text" name="txtnombre"></td>
            </tr>   
            <tr>
                <td><input type="submit" value="Buscar" name="btnBuscar"></td>
            </tr>
        </table>
        <br>
        <table border="1">
            <tr>
                <td>Código</td>
                <td>Nombres</td>
                <td>Apellidos</td>
                <td>Edad</td>
                <td>DNI</td>
            </tr>
            <?php
            error_reporting(0);
            if (isset($_POST['btnBuscar'])) {
                $nombre=$_POST['txtnombre'];
                //consulta por nombre
               
                $buscar=mysqli_query($conect,"SELECT * FROM `clientes` WHERE `nombreCliente`='$nombre'");
                if ($registro=$buscar->fetch_assoc()) {
            ?>
            <tr>
                <td><?php echo $registro['idCliente']."</br>"?>
                <td><?php echo $registro['nombreCliente']."</br>"?>
                <td><?php echo $registro['apellidosCliente']."</br>"?>
                <td><?php echo $registro['edadCliente']."</br>"?>
                <td><?php echo $registro['dniCliente']."</br>"?>
            </tr>
            <?php    
                }

            }
            mysqli_close($conect);
         
            ?>
        </table>
    </form>
</body>
</html>