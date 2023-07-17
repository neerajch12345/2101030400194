<?php
require '01_db_connection.php';

if(isset($_POST["Submit"])){
    $Name = $_POST["Name"];
    $Username = $_POST["Username"];
    $Age = $_POST["Age"];
    $Gender = $_POST["Gender"];
    $Password = $_POST["Password"];

    $query = "INSERT INTO 1111 VALUES('$Name','$Username','$Age','$Gender','$Password')";
    mysqli_query($conn,$query);
    echo
    "
    <script>alert('Data inserted successfully')</script>
    ";
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            background-color:orange;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Feedback form</h1>
    <div class="bg-image"></div>
    <div class="bg-text">
   <form method="post"action="#">
    <fieldset>
        <legend>personal information</legend>
        <lable for=""> Name</label>
        <input type="text" name="Name" placeholder="Enter Name" required value=""><br><br><br>
        <lable for=""> Username</label>
        <input type="text" name="Username" placeholder="Enter Username"required value=""><br><br><br>
        <lable for=""> Age</label>
        <input type="number" name="Age" placeholder="Enter Age"required value=""><br><br><br>
        <lable for=""> Gender</label>
        <input type="radio" name="Gender" value="Male" required value=""> Male
        <input type="radio" name="Gender" value="Female" required value=""> Female
        <input type="radio" name="Gender"value="other"required value="">other<br><br><br>
        <label for="bob">BOB</label>
        <input type="date"id="bob"name="user_bob"><br><br><br>
        
        <label for="">messages</label>
        <input type="text" name="messages"row="5"placeholder="Enter Message"require value=""><br><br><br>
        <lable for=""> Username</label>
        <input type="text" name="Username" placeholder="Enter Username"required value=""><br><br><br>
       
        <lable for=""> Password</label>
        <input type="password" name="Password"placeholder="Enter Password" required value="">
        <input type="submit" name="Submit" required value="Submit">
    </fieldset>
    </form>
    </div>
</body>
</html>