<?php
include "Conexao.php";

$con = new Conexao;

var_dump($con->connect());
exit;

$stmt = $con->connect()->prepare($sql);
$stmt->execute();
echo "<pre>";
var_dump($stmt->fetch(PDO::FETCH_OBJ));
echo "</pre>";

echo phpinfo();

