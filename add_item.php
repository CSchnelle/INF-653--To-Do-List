<?php
include_once('database.php');
include_once('index.php');
$ItemNum = filter_input(INPUT_POST, 'ItemNum', FILTER_VALIDATE_INT);
$Title = filter_input(INPUT_POST, 'Title');
$Description = filter_input(INPUT_POST, 'Description');


    $query = 'INSERT INTO todoitems
                 (ItemNum, Title, Description)
              VALUES
                 (:ItemNum, :Title, :Description)';
    $statement = $db->prepare($query);
    $statement->bindValue(':ItemNum', $ItemNum);
    $statement->bindValue(':Title', $Title);
    $statement->bindValue(':Description', $Description);
    $statement->execute();
    $statement->closeCursor();

    // display items
    include('index.php');
?>