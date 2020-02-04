<?php
include_once('mysql.php');

#$ins = "INSERT INTO MyGuests (firstname, lastname, phone)
#VALUES ('Becky', 'Underhill', '555-555-5552')";
#

if(isset($_POST['firstname'])) {
    $ins= "INSERT INTO testapp.MyGuests (firstname, lastname, phone) 
VALUES ('$_POST[firstname]','$_POST[lastname]','$_POST[phone]')";

    if ($conn->query($ins) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $ins . "<br>" . $conn->error;
   }
}

?>

<!DOCTYPE html>
<html>
<body>
<a href='index.php'>Home</a><br>

<h2>Add User</h2>

<form action="/add.php" method="post">
  First name:<br>
  <input type="text" name="firstname" >
  <br>
  Last name:<br>
  <input type="text" name="lastname" >
  <br>
  Phone number:<br>
  <input type="text" name="phone" >
  <br><br>
  <input type="submit" value="Submit">
</form> 

</body>
</html>

