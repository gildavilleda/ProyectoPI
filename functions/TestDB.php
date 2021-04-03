<?php
/**
 * Created by PhpStorm.
 * User: gguerrero
 * Date: 4/03/2019
 * Time: 10:03 AM
 */


try {
    $hostname = "DESKTOP-UGG1J61";
    $dbname = "Proyectos Informaticos";
    $username = "USUARIOSQL";
    $pwd = "321abc";
    $dbh = new PDO ("dblib:version=8.0;charset=UTF-8;host={$hostname};51226;dbname={$dbname}", $username, $pwd);
} catch (PDOException $e) {
    echo "Failed to get DB handle: " . $e->getMessage() . "\n";
    exit;
}

echo "Passed!";