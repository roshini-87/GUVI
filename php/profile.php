<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "loginregister");

require_once dirname(__DIR__,1) . './vendor/autoload.php';
$conmongo = new MongoDB\Client("mongodb://localhost:27017");
$db = $conmongo->test2021;
$tbl = $db->table2021;

$cursor= $tbl->find();
foreach($cursor as $doc)
{
    if($doc["name"]=="rose")
    
    echo json_encode($doc);
}



  

    


