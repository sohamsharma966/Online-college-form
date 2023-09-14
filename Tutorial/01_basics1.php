<!DOCTYPE html> <!--put insid ethe html template-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "hello world";
    ?>

    //variables
    <?php
    $var="soham";
    $var="sahil";
    ?>

    //aritmetic operations.
    <?php
    echo "adding a + b ", ($a+$b);
    ?>

    //print variable information
    <?php
    var_dump($b,$a);
    ?>

    //predefined variable= $_GET, $_GLOBAL, $_POST

    //make function
    <?php
    function sumnumber(int $a, int $b){
        return $a=$b;
    }
    ?>
     
    //objecvt oriented language too
    //class is template and object is blueprint
</body>
</html>