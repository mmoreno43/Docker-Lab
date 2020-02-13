<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<div class ="wrapper">
    <div class="search">
        <a href='index.php'>Home</a><br>
        <h2>Search Guests</h2>

        <table class="table">
            <tr>
                <th>ID</th>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Phone Number</th>
            </tr>
            <?php
include_once('mysql.php');

if (isset($_POST['submit'])) {
$search_value=$_POST["search"];
{
$ins="SELECT * FROM testapp.MyGuests WHERE firstname LIKE '%$search_value%'";

        $res=$conn->query($ins);

        while($row=$res->fetch_assoc()){
         echo "<tr>";
          echo "<td>".$row["id"]."</td>";
          echo "<td>".$row["firstname"]."</td>";
          echo "<td>".$row["lastname"]."</td>";
          echo "<td>".$row["phone"]."</td>";
        echo "</tr>";


        }       

    }
}
?>
       </table>
            
            <form action="/search.php" method="post">
                <input type="text" name="search" placeholder="Firstname">
                <input type="submit" name="submit" value="Search">
            </form>
    </div>
</div>
</html>