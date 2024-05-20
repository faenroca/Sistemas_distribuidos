<?php 
    include('connection.php');
    $con = connection();
    $sql = "SELECT * FROM usuarios";
    $query = mysqli_query($con,$sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <link href="formato.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    
 
  <div class="users-form">
     <form action="insertar.php" method="POST">
         <h1>Ingresar Producto</h1>
         <input type="text" name="ID" placeholder="ID">
         <input type="text" name="articulo" placeholder="Nombre de Articulo">
         <input type="text" name="Precio" placeholder="Precio">
         <input type="text" name="Categoria" placeholder="Categoria">
         <input type="text" name="cantidad" placeholder="Cantidad">

         <input type="submit" value="agregar usuario" >
     </form>
  </div>

  <div class="users-table">
    <table>
        <h2>Productos registrados</h2>
        <thead>
            <tr>
               

                <th>ID</th>
                <th>Nombre de Articulo</th>
                <th>Precio</th>
                <th>Categoria</th>
                <th>Cantidad</th>

                <th></th>
                <th></th>

                </tr>
         </thead>
        
        <tbody>
         <?php while ($row = mysqli_fetch_array($query)): ?>
            <tr>
            <th> <?= $row['ID'] ?></th>
            <th> <?= $row['ARTICULO'] ?></th>
            <th> <?= $row['PRECIO'] ?></th>
            <th> <?= $row['CATEGORIA'] ?></th>
            <th> <?= $row['CANTIDAD'] ?></th>
            <th></th>

            <th><a href="editar.php?ID=<?= $row['ID'] ?>" class="users-table--edit">Editar</a></th>
            <th><a href="eliminar.php?ID=<?= $row['ID'] ?>" class="users-table--delete">Eliminar</a> </th>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
  </div>

</body>
</html>