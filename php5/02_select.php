<?php 
require '01_db_connection.php';
$sql = "SELECT * FROM student";
$result = mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h2 style="color:crimson;font-family:cursive;">Student Details</h2>

<table class="table">
    <thead>
        <tr>
        <th>Name</th>
        <th>Username</th>
        <th>Age</th>
        <th>Gender</th>
        <th>Password</th>
    </tr>
    </thead>

    <tbody> 
        <?php
            if ($result->num_rows>0) {
                while ($row = $result->fetch_assoc()) 
                    {
        ?>
                    <tr>
                    <td><?php echo $row['Name']; ?></td>
                    <td><?php echo $row['Username']; ?></td>     
                    <td><?php echo $row['Age']; ?></td>
                    <td><?php echo $row['Gender']; ?></td>
                    <td><?php echo $row['Password']; ?></td>
                    </tr>
        <?php       }
            }
        ?>                
    </tbody>
</table>
    </div> 
</body>

</html>
