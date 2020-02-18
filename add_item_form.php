<?php
include_once('database.php');
include_once('add_item.php');
include_once('index.php');
$query = 'SELECT * FROM todoitems';
$statement = $db->prepare($query);
$statement->execute();
$todoitems = $statement->fetchAll();
$statement->closeCursor();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>To Do List</title>
    <main>
        <h1>Add Item</h1>
        <form action="add_item.php" method="post"
              id="add_item_form">

            <?php foreach ($todoitems as $todoitem) : ?>
                <option value="<?php echo $todoitem['ItemNum']; ?>">
                    <?php echo $category['Title']; ?>
                </option>
            <?php endforeach; ?>
            </select><br>

            <label>ItemNum:</label>
            <input type="text" name="ItemNum"><br>

            <label>Title:</label>
            <input type="text" name="Title"><br>

            <label>Description:</label>
            <input type="text" name="Description"><br>

            <label>&nbsp;</label>
            <input type="submit" value="Add Item"><br>
        </form>
        <p><a href="index.php">View Items</a></p>
    </main>
</body>
</html>