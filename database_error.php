<!DOCTYPE html>
<html>
<!--head section-->
<head>
    <title>My To Do List</title>
    <link rel="stylesheet" type="text/css" href="main.css" />
</head>

<!--body section-->
<body>
    <header><h1>My To Do List</h1></header>
    
    <main>
        <h1> Database Error</h1>
        <p>There was an error connection to the database.</p>
        <p>Error Message: <?php echo $error_message; ?></p>
        <p>&nbsp;</p>
    </main>
    <footer>
        <p>&copy; <?php echo date("Y"); ?> My To Do List</p>
    </footer>
</body>
</html>
     
