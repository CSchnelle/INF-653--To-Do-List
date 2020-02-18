<?php
include_once('database.php');


//  
$query = 'SELECT * FROM todoitems';
$statement = $db->prepare($query);
$statement->execute();
$fetch = $statement->fetchAll();
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
    <section>
    <?php
    $sql = "SELECT * FROM todoitems;";
    $result = mysqli_query($db, $sql);
    $resultCheck = mysqli_num_rows($result);

    if($resultCheck > 0){
        while($row = mysqli_fetch_assoc($result)){
            echo $row['ItemNum'] . "<br>" . ['Title'] . "<br>" . ['Description'];
        }
    }
    else{
        echo 'This table is empty';
    }
?>

<?php foreach ($todoitems as $todoitem) : ?>
            <tr>
                <td><?php echo $todoitem['ItemNum']; ?></td>
                <td><?php echo $todoitem['Title']; ?></td>
                <td><?php echo $todoitem['Description']; ?></td>
                <td><form action="delete_item.php" method="post">
                    <input type="hidden" name="ItemNum"
                           value="<?php echo $todoitem['ItemNum']; ?>">
                    <input type="submit" value="Delete">
                </form></td>
            </tr>
            <?php endforeach; ?>
        </table>
        <p><a href="add_item_form.php">Click here to add an item</a></p>       
    </section>
</main>
</body>
</html>