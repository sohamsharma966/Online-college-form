<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php tutorials</title>
</head>
<style>
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    padding: 23px;
}
.container{
    max-width: 80%;
    background-color: grey;
    margin: auto;
}
</style>
<body>
    <div class="container">
        <h1>lets learn about php</h1>
        this is container
        <br>
        <?php
            $age=34;
            if($age<18){
                echo "you can go to party";
            }
            elseif($age>7){
                echo "you are 7 years old";
            }
            else{
                echo "you cannot go to party";
            }


        // arrays in PHP
        $languages= array("C++","php","nodejs"); //it is collection of items, we can store more than one data.
        // echo $languages; //it will give error.
        // echo $languages[0];
        // echo count($language); //count how much elemts

        // loops in PHP
        $a=0;
        while ($a <= 10) {
            echo "<br> the value of a is ",$a;
            $a++;
        }

        // loop in array of languages
        $a=0;
        while ($a < count($languages)) {
            echo "<br>the value of a is ",$languages[$a];
            echo count($languages);
            $a++;
        }

        //do while loop
        // do{
        //     echo "<br>the value of a is ",$languages[$a];
        //     echo count($languages);
        //     $a++;
        // } while($a <= 10);

        // for loop
        for ($a=0; $a < 10; $a++) {     //first a=0 willl run only one time > it will chekc condition > then updation will do.
            echo "<br> the value of a is ",$a;
        }

        // for each loop
        foreach ($variable as $value) { // the variable is arrays
            echo "the value is ",$value;
        }

        // function
        // function print5(){
        //     echo"5"
        // }
        // function printnumber($number){
        //     echo"5"
        // }
        // printnumber(5)
        ?>
    </div>
</body>
</html>