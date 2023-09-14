<?php
$insert=false;
if(isset($_POST["name"])){ // this mean if someone send the post request and name value is set in it than run this if code.

    // when you want to connect to mysql database. there are two methods:-
    // 1. mysqli extensions = we can use mysqli functions, i mean improved. so procedural oriented language we will use in sqli.
    // procedural language is that in which we make functions and run our code.
    // 2. php dataobjects = object oriented language is used.

    $server="localhost"; // to which e have to connect 
    $username="root";
    $password=""; // password is blanck when you are in local host.

    $con=mysqli_connect($server,$username,$password); // establish connection with database

    if(!$con){  // if $con is false than it will give this message
        die("connection to this database failed due to". mysqli_connect_error());
    }
    // echo"success connecting to the database";

    // after establishing connection.
    $name=$_POST["name"];
    $age=$_POST["age"];
    $email=$_POST["email"];
    $inf=$_POST["desc"];
    // now insert that value, which will come through post.
    $sql="INSERT INTO `trip`.`trip` (`name`, `age`, `email`, `information`, `dt`) VALUES ('$name', '$age', '$email', '$inf', '2023-09-14 16:50:23.000000');";
    // remove serial number from script cause it is autoincrementable.
    // in `trip` it is error, we need to add table after database > correct way `trip`.`trip`.

    // echo $sql;

    // Insert all values in database.
    if($con->query($sql)==true){  // -> is object operator, query() is function. // object calling his method, object->method().
        $insert=true;
    }
    else{
        echo"Error";
    }

    // close the database
    $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>welcome to travel</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Welcome to IIT kharagpur</h1>
        <p>Enter your details to participate</p>

        <?php
        if($insert==true){
            echo"<p class='submit'>Thanks for submitting your form.</p>";
        }
        ?>

        <form action="" method="post">
            <input type="text" name="name" id="name" placeholder="enter you name">
            <input type="text" name="age" id="age" placeholder="enter your age">
            <input type="text" name="email" id="email" placeholder="enter your email">
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="enter other informations"></textarea>
            <button class="btn">button</button>
            <button type="btn">reset</button>
        </form>
    </div>
    <script src="index.js"></script>
</body>
</html>