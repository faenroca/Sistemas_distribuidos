<?php 
    include("connection.php");
    $con=connection();

    $ID=$_GET['ID'];

    $sql="SELECT * FROM usuarios WHERE ID='$ID'";
    $query=mysqli_query($con, $sql);

    $row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="formato.css" rel="stylesheet">
        <title>Editar usuarios</title>
        
    </head>
    <body>
        <div class="users-form">
            <form action="edit.php" method="POST">
                <input type="hidden" name="ID" value="<?= $row['ID']?>">
                <input type="text" name="articulo" placeholder="Nombre de Articulo" value=" <?= $row['ARTICULO']?>" >
                <input type="text" name="Precio" placeholder="Precio" value="<?= $row['PRECIO']?>">
                <input type="text" name="Categoria" placeholder="Categoria" value="<?= $row['CATEGORIA']?>">
                <input type="text" name="cantidad" placeholder="Cantidad" value="<?= $row['CANTIDAD']?>">

                <input type="submit" value="Actualizar">
            </form>
        </div>
    </body>
</html>