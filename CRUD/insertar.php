<?php 
 include('connection.php');
 $con = connection();

 $ID=  $_POST['ID'];
 $articulo = $_POST['articulo'];
 $Precio  = $_POST['Precio'];
 $Categoria = $_POST['Categoria'];
 $cantidad = $_POST['cantidad'];

 $sql = "INSERT INTO usuarios VALUES('$ID','$articulo','$Precio','$Categoria','$cantidad')";
 $query = mysqli_query($con,$sql);
 if($query){
    Header("location: index.php");
 };

?>