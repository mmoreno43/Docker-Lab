<?php
include_once('mysql.php');

$ins = "SELECT * FROM testapp.MyGuests";
$result = mysqli_query($conn, $ins);

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row['id']. " - Name: " . $row['firstname']. " " . $row['lastname']. " Number: ". $row['phone']." <br>";
    }
}

?>
<!DOCTYPE html>
<html>
<body>
<a href='index.php'>Home</a><br>

<h2>View User</h2>

</body>
</html>