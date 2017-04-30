<?php
function getConnection()
{
    $pdo_conn = new PDO("mysql:host=127.0.0.1;dbname=CRUD", 'root', '123456');

    return $pdo_conn;
    }

function update($id, $name, $description, $created_at)
{
    $pdo_conn = getConnection();
    $sql = "UPDATE article SET name=:name, description=:description, created_at=:created_at WHERE id= :id";
    $pdo_statement = $pdo_conn->prepare($sql);

    $pdo_statement->bindValue(':id',$id);
    $pdo_statement->bindValue(':name',$name);
    $pdo_statement->bindValue(':description', $description);
    $pdo_statement->bindValue(':created_at', $created_at);

    return $pdo_statement->execute();
}


function findAll()
{
    $pdo_conn = getConnection();
    $sql = 'SELECT * FROM article';
    $statement = $pdo_conn->prepare($sql);
    $statement->execute();
    return $statement->fetchAll();
}

function findById($id)
{
    $pdo_conn = getConnection();
    $sql = 'SELECT * FROM article WHERE id = :id';
        $pdo_statement = $pdo_conn->prepare($sql);
    $pdo_statement->bindValue(":id", $id);
    $pdo_statement->execute();

    return $pdo_statement->fetch();
}
function deleteById($id)
{

    $pdo_conn = getConnection();
    $sql = "DELETE FROM article WHERE id= :id";
    $statement = $pdo_conn->prepare($sql);
    $statement->bindValue(':id', $id);
    return $statement->execute();
}