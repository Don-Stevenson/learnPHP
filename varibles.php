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
        <input type="text" name="state"/><br>
        <label> Your Province: </label>
        <input type="text" name="state"/><br>
     </form>
    </body>
</html>