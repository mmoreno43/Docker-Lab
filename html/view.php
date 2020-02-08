<html>
<body>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<a href='index.php'>Home</a><br>

<h2>View Guests</h2>

<table class="striped">
            <tr class="header">
                <td>ID</td>
                <td>Firstname</td>
                <td>Lastname</td>
                <td>Phone Number</td>
            </tr>
<?php
include_once('mysql.php');

$ins = "SELECT * FROM testapp.MyGuests";
$result = mysqli_query($conn, $ins);

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
                   echo "<td>".$row["id"]."</td>";
                   echo "<td>".$row["firstname"]."</td>";
                   echo "<td>".$row["lastname"]."</td>";
                   echo "<td>".$row["phone"]."</td>";
                   echo "</tr>";
               }
}

?>
</table>
</body>
</html>