<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>html code in php file!</title>
</head>
<body>
    <h1>This is html tag in php file(.php extension).</h1>
    <p>but in html(.html) file cannot support php code in it.</p>

    <?php
    
        echo "this is php tag in html code. or php extension. <br>";


echo "<br>" ;
echo "<br>";
echo "<hr>";


// ``````````````veriable````````````````````````

        $Name ='Inderjeet <br>';
        $Age=27 . "<br>";

        echo $Name;
        echo $Age;

echo "<br>";
echo "<br>";
echo "<hr>";

        $Price=99.00;
        $isLogin=true;


// ```````````````operators``````````````````````````

        $a=10;
        $b=5;

        echo $a+$b ."<br>";
        echo $a-$b ."<br>";
        echo $a*$b ."<br>";
        echo $a/$b ."<br>";


// ````````````````conditional operator``````````````````

echo "<br>" ;
echo "<br>";
echo "<hr>";
        $age=18;

        if($age>=18){
            echo "You can vote!";
        }else{
            echo "OUT!! You cannot vote!";
        }


echo "<br>" ;
echo "<br>";
echo "<hr>";

        $age=16;

        if($age>=18){
            echo "Adult";
        }else{
            echo "Minor";
        }


echo "<br>" ;
echo "<br>";
echo "<hr>";

        for($i=1; $i<=5; $i++){
            echo $i;
        }
    ?>


</body>
</html>