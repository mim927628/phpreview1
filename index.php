<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <?php 
        // foreach loop for indexed array
        $cars = array("BMW","VOLVO", "CORROLA");
        foreach($cars as $value)
        {
            echo $value. "<br>";
        }

        // for loop
        for($i = 0 ;$i< count($cars); $i++){
            echo $cars[$i]. "<br>";
        }

        // for($i = 0 ;$i< 3; $i++){
        //     echo $cars[$i]. "<br>";
        // }


        // foreach loop for associative array
        $persons = array("Peter" => 50, "Jone" => 60, "Harry" => 45);
        foreach($persons as $x => $v){
            echo "key: ". $x . ", value: " . $v. "<br>";
        }

        // function
        function summation($v1, $v2){
            $sumValue = $v1 + $v2;
            return $sumValue;
        }

        echo summation(40,90);
        echo "<br>";
        echo summation(400,100). "<br>";

// ---------------------------------------------
        function substraction($v1, $v2){
            $subValue = $v1 - $v2;
            return $subValue;
        }

        echo substraction(40,10);
        echo "<br>";
        echo substraction(400,100). "<br>";


        // super global variable
        var_dump($_SERVER); 
    ?>

        

</body>
</html>