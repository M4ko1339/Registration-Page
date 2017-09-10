<?php

include('inc/settings.php');

try
{
    $con = new PDO('mysql:host=' . $config['HOST'] . ';dbname=' . $config['DB'] . ';charset=UTF8', $config['USER'], $config['PASS']);
}
catch(PDOException $e)
{
    die($e->getMessage());
}

?>