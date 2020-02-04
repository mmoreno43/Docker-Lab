<?php

include_once('mysql.php');
#
##$sql = "DELETE FROM MyGuests WHERE id=1 LIMIT 1";
##

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
<body>
<a href='index.php'>Home</a><br>

<h2>Delete User</h2>

<form action="/delete.php" method="post">
  Guest ID:<br>
  <input type="text" name="id" >
  <br><br>
  <input type="submit" value="Submit">
</form> 

</body>
</html>
