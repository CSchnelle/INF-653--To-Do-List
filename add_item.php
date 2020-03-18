<?php
//get data
$title = filter_input(INPUT_POST, 'title');
$description = filter_input(INPUT_POST, 'description');

//validate
if($title == null || $description == null) {
    $error = "Invalid todo item data. Try again.";
    include('error.php');
}else{
    require_once('database.php');
    //add items
    
    $query = 'INSERT INTO todoitems
                 (Title, Description)
              VALUES
                 (:title, :descr)';
    $statement = $db->prepare($query);
    $statement->bindValue(':title', $title);
    $statement->bindValue(':descr', $description);
    $statement->execute();
    $statement->closeCursor();

    // display items
    include('index.php');
?>
