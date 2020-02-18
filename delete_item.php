<?php
include_once('database.php');
include_once('index.php');
// Get ID
$ItemNum = filter_input(INPUT_POST, 'ItemNum', FILTER_VALIDATE_INT);

// Delete
if ($ItemNum != false) {
    $query = 'DELETE FROM todoitems
              WHERE ItemNum = :ItemNum';
    $statement = $db->prepare($query);
    $statement->bindValue(':ItemNum', $ItemNum);
    $success = $statement->execute();
    $statement->closeCursor();    
}

// display items
include('index.php');