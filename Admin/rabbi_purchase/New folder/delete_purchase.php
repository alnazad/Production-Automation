<?php
$i = $_GET['id'];
$con = new mysqli('localhost','root','','production_automation');
$query = $con->query('delete from purchase where id='.$i);
header('Location: purchase_list.php');
?>