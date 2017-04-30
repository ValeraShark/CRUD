<?php
function getConnection()
{
    $pdo_conn = new PDO("mysql:host=127.0.0.1;dbname=CRUD", 'root', '123456');

    return $pdo_conn;
    }

function insert($name,$description,$created_at)
{
    $pdo_conn = getConnection();
    $sql = 'INSERT INTO article (name, description, created_at) VALUES (:name, :description, :created_at)';
    $statement = $pdo_conn->prepare($sql);
    $statement->bindValue(':name',$name);
    $statement->bindValue(':description', $description);
    $statement->bindValue(':created_at', $created_at);

    var_dump($statement->execute());
    var_dump($statement->errorInfo());
}
