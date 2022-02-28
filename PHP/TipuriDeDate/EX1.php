<html>
<head>
    <title>Ex 1: Use all data types</title>
</head>
<body>
    <h1>Exercise 1: Use all data types</h1>
    <h2>Calculate the area using Length and breath using Integer</h2>
    <?php
       $length=20;
       $breath=3;
       $area=$length * $breath;
       echo "Aria este: ".$area;
    ?>
    <h2>Calculate Student Exact Marks Percentage with Double</h2>
    <?php
        $math=45;
        $science=60;
        $total=$math+$science;
        $total_marks=200;
        $percentage=$total/$total_marks;
        echo "Percentage: ".$percentage;

    ?>
    <h2>Check if the user has admin roles</h2>
    <?php
        $logat=TRUE;
        $name="denisa";
        echo($logat && $name)?"userul e logat":"userul nu e logat";
    ?>
    <h2>Define and display a user name using string</h2>
    <?php
        $name="naica denisa-adelina";
        echo "Numele este: ".$name;
    ?>
    <h2>Check if the variable is null or not</h2>
    <?php
        $flag=null;
        echo ($flag===null)? "Variabila e null":"Variabila nu e null";
    ?>
</body>
</html>
