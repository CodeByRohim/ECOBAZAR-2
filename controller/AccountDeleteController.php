<?php

$id = $_REQUEST['id'];
$query = "DELETE FROM accountsettings WHERE id = '$id'";
include "../database/env.php";
$res = mysqli_query($conn, $query);

if($res){
  header("Location:../dashboard.php");
};

?>
