<?php
$insert = false;
if (isset($_POST['name']))
    {
    $server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server,$username,$password);
    if (!$con) {
        die("connection to this database failed due to". mysqli_connect_error());
    }
    //echo"Success connecting to the database";
    $name=$_POST['name'];
    $age=$_POST['age'];
    $gender=$_POST['gender'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $desc=$_POST['desc'];
    $sql = "INSERT INTO `emps`.`emp` (`name`, `age`, `gender`, `email`, `phone`, `desc`) 
    VALUES ( '$name', '$age', '$gender', '$email', '$phone', '$desc')";
    

    if ($con->query($sql) == TRUE) {
        $insert = TRUE;
    }
    else { 
        echo "ERROR: $sql <br> $con->error";
    }
    $con->close();
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Employee form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class ="bg" src="bg.jpeg" alt="">
    <div class="container">
        <h1> Welcome to Seaquid Inc. Employee Form</h1>
        <p> Enter your details in the form</p>
        <?php
        if ($insert == TRUE) {
            //echo "<p class ='submitMsg'> Thanks for submitting your form.</p>";
            echo"<script>alert('login successfully')</script>";
        //echo"<font color='red' >please check username or password else choose new registraion</font>";
        }
    ?>
        <form action="index1.php" method="post">
            <input type="text" name="name" id="name" placeholder = "enter your name">
            <input type="text" name="age" id="age" placeholder = "enter your age">
            <input type="text" name="gender" id="gender" placeholder = "enter your gender">
            <input type="text" name="email" id="email" placeholder = "enter your email">
            <input type="text" name="phone" id="phone" placeholder = "enter your phone">
            <textarea name="desc" id="desc" cols="30" rows="10"placeholder="enter other information"></textarea>
            <button class="btn">Submit</button>
        </form>
        
    </div>
    <script src="index.js"></script>
</body>
</html>