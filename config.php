<?php

try{
    $pdo = new PDO("mysql:dbname=disable_user;host=localhost", 'root', '');

} catch(PDOExcepetion $e){
    echo "ERRO: ". $e->getMessage();
    exit;
}