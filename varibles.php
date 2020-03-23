<?php
$f_name = "Steve";
$l_name = "Smith";
$age = 44;
$height = 1.88;
$can_vote = true;
$address = array('street' => '123 main street', 'city' => 'Pittsburg')
?>
<!DOCTYPE HTML>
    <html lang="eng">
        <head>
            <meta charset="UTF-8">
            <title>PHP Tutorial </title>
        </head>
    <body>
    <p> Name: <?php echo $f_name . " ".$l_name; ?></p>
     <form action="variables.php" method="get">
        <label> Your Province: </label>
        <input type="text" name="province"/><br>
        <label> Number 1: </label>
        <input type="text" name="num-1"/><br>
        <label> Number 2: </label>
        <input type="text" name="num-2"/><br>
        <input type="submit" value="Submit"/><br>
     </form>
        <?php 
        if(isset($_GET) && array_key_exists('province', $_GET)){
            $province= $_GET['province'];
            if(isset($province) && !empty($province)){
                echo "You live in" . $province . '<br>';
                echo "$f_name lives in $province";
            }
                if(count($_GET) >= 3) {
                    $num_1 = $GET['num-1'];
                    $num_2 = $GET['num-2'];
                    echo "$num_1 + $num_2 = " . ($num_1 + $num_2) . "<br>";
                    echo "$num_1 - $num_2 = " . ($num_1 - $num_2) . "<br>";
                    echo "$num_1 * $num_2 = " . ($num_1 * $num_2) . "<br>";
                    echo "$num_1 / $num_2 = " . ($num_1 / $num_2) . "<br>";
                    echo "$num_1 % $num_2 = " . ($num_1 % $num_2) . "<br>";
                    echo "Increment $num_1 = " . ($num_1++) . "<br>";
                    echo "decrement $num_1 = " . ($num--) . "<br>";
                }
        }
        ?>
    </body>
</html>