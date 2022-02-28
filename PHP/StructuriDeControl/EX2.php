<html>
<head>
    <title>
        Easy Calculator
    </title>
</head>
<body>
    <h1>Ex 2: Easy Table Calculator</h1>
    <table align="left" border="1" cellpadding="3" cellspacing="3">

        <?php
            for($tab=1;$tab<=10;$tab++){
                echo "<tr>";
                for($val=1;$val<=10;$val++){
                    echo "<td>$tab*$val=  ". ($tab*$val)."</td>";
                }
                echo"</tr>";
            }
        ?>

    </table>
</body>
</html>
