<?php
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "dbpdo";
try {
    $dbc = new PDO("mysql:host={$db_host};dbname={$db_name}", $db_user, $db_pass);
    $dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo $e->getMessage();
}
include_once 'class.crud.php';
$crud = new crud($dbc);
?>