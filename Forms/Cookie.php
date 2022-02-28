<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cookie</title>
</head>
<body>
<h1>FORM-POST</h1>
<!-- cand dam submit se intra pe pagina display.php-->
<h1>Cookie</h1>
<?php
    $cokie_name="user";
    $cokie_value="phpbootcamp";
    setcookie($cokie_name,$cokie_value,time()+(86400 * 30),"/" );
    if(!isset($_COOKIE['user'])){
        echo "welcome  ". $cokie_value." ".$cokie_name;
    }else{
        echo "hey,  ". $cokie_value." "."you are back ";
        echo "<br>".$_COOKIE[$cokie_name];
    }
?>
</body>
</html>
