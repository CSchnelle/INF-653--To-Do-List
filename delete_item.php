<?php
require_once('database.php');
// Get ID
$ItemNum = filter_input(INPUT_POST, 'ItemNum', FILTER_VALIDATE_INT);

// Delete
if ($item_num != false) {
    $query = 'DELETE FROM todoitems
              WHERE ItemNum = :ItemNum';
    $statement = $db->prepare($query);
    $statement->bindValue(':ItemNum', $ItemNum);
    $success = $statement->execute();
    $statement->closeCursor();    
}

// display items
include('index.php');
?>
