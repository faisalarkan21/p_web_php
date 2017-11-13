<?php

include("config.php");

$id = $_GET['id_order'];
$result = mysqli_query($mysqli, "DELETE FROM list_komputer WHERE id_order=$id");

header("Location:index.php");
?>