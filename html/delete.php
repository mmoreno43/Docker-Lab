<?php
include_once('mysql.php');
// make sure that form is submitted    
if (isset($_POST['id'])) {

    $ins = "DELETE FROM MyGuests WHERE id=" . $_POST['id'] . " LIMIT 1";
    if ($conn->query($ins) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error: " . $ins . "<br>" . $conn->error;
    }
}?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<div class="wrapper">
    <div class="delete">
        <div class="project">
            <body>
                <a href='index.php'>Home</a><br>
            <h2>Delete Guests</h2>
                <div class="container">
                   <form action="/delete.php" method="post">
                   Guest ID:<br>
                   <input type="text" name="id" >
                   <br><br>
                   <input type="submit" value="Submit">
                   </form>
                </div>
        </div>
    </div>
</div>
</body>
</html>
