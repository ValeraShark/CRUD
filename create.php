
<?php

require_once 'model/model.php';

var_dump($_POST['name'], $_POST['description'], $_POST['created_at']);
if(isset($_POST['name']) && isset($_POST['description']) && isset($_POST['created_at'])) {

    insert($_POST['name'], $_POST['description'], $_POST['created_at']);

    header('Location: index.php');
}

require_once 'view/indexTemplate.php';