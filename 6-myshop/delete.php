<?php
include 'conexion.php';

$id = $_GET['id'];

$sqlDelete = "DELETE FROM clients WHERE id = $id";
$result = mysqli_query($conexion, $sqlDelete);

header('Location: index.php');
