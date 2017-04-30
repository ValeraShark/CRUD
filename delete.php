<?php

require_once 'model/model.php';

if (isset($_POST['id']) && isset($_POST['name']) && isset($_POST['description']) && isset($_POST['created_at']) ){
    update($_POST['id'], $_POST['name'], $_POST['description'], $_POST['created_at']);
}

//$rows = findAll();

$id = $_GET['id'];
$row = deleteById($id);
header('location: index.php');