<html>
<head>
    <title>Control Structures</title>

</head>
<body>
    <h1>Exercices 1: Display odd and even number</h1>
    <table>
        <tr>
            <td>Number</td>
            <td>Odd</td>
            <td>Even</td>
        </tr>

    <?php
       require_once "Config.php";
       for($c=0;$c<\Config\MAX_NUMBERS;$c++){
           $result=$c%2;
           echo "<tr>";
           echo "<td>$c</td>";
           if($result==0)
           {
               echo "<td>no </td";
               echo "<td>yes </td>";

           }else{
               echo "<td>yes </td";
               echo "<td>no </td>";
           }
           echo "</tr>";
       }

    ?>
    </table>
</body>
</html>
