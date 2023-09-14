<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php tutorial</title>
</head>
<body>
    <div class="container">
        this is my first php website.
    <?php
        echo "this is php command";

        //variable
        $var1=52;
        $var2=60;
        echo $var1,$var2;

        //it is dynamically type language that mean you don't want to tell that you making intg, strng etc.
        echo $var1+$var2;
        echo "<br>";

        // operators in php
        // aritmatic operators
        echo "the value of variable1 + vriable2 is ";
        echo $var1+$var2;
        echo "<br>";
        echo "the value of variable1 - vriable2 is ";
        echo $var1-$var2;
        echo "<br>";
        echo "the value of variable1 * vriable2 is ";
        echo $var1*$var2;
        echo "<br>";
        echo "the value of variable1 / vriable2 is ";
        echo $var1/$var2;
        echo "<br>";
        
        // assingment operators
        $newvar=$var1;
        $newvar+=1;  // new var men 1 plus krke newvar ko hi dedo
        $newvar-=1;  
        $newvar*=1;  
        $newvar/=1;  
        echo "the value of new variable 1";
        echo $newvar;
        echo "<br>";

        // comparison operators
        echo "<h> hello </h>"; // you can insert html byb echo
        echo "the value of 1==4 is ";
        echo var_dump(1==4); //it is sue for tell var value and its type.
        echo "<br>";
        echo "the value of 1!=4 is ";
        echo var_dump(1!=4);
        echo "<br>";
        echo "the value of 1>=4 is ";
        echo var_dump(1>=4);
        echo "<br>";
        echo "the value of 1<=4 is ";
        echo var_dump(1<=4);
        echo "<br>";

        // increment/decrement operators
        echo $var1++; //phle print hoga than increment
        echo "<br>";
        echo $var1--;
        echo "<br>";
        echo ++$var1; //pehle increment hoga fir print hoga
        echo "<br>";
        echo --$var1;
        echo "<br>";

        // logical operators
        // and (&&)
        // or (||)
        // xor
        // not (!)
        $myvar=true && true;
        echo var_dump($myvar);
    ?>

    <?php
        ///data types
        // 1.string
        // 2.integer=3,4,8
        // 3.float =decimal number
        // 4.boolean
        // 5.array
        // 6.object

        $var="this is string";
        $var=67;
        $var=67.1;
        $var=true;
    ?>

    <?php
        //constant= jiski value change ni ki ja skti
        define("pi",3.14);
        echo pi;
    ?>
    </div>
</body>
</html>