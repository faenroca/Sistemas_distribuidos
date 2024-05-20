<?php

include("connection.php");
$con = connection();

$ID = $_POST['ID']; 
$articulo = $_POST['articulo'];
$Precio = $_POST['Precio'];
$Categoria = $_POST['Categoria'];
$cantidad = $_POST['cantidad'];


$sql="UPDATE usuarios SET articulo='$articulo', Precio='$Precio', Categoria='$Categoria', cantidad='$cantidad' WHERE ID='$ID'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index.php");
}else{

}

?>