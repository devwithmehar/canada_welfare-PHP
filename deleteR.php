<?php

    require './connection.php';
    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

    $query = "DELETE FROM uploads WHERE id = :id";
    $statement = $db->prepare($query);
    $statement->bindValue(':id', $id, PDO::PARAM_INT);
    $statement->execute();
    header('Location:publicProfile.php');
?>