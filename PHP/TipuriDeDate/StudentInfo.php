<?php
    $name="denisa naica";
    $class="30643-TI";
    $age=23;
    $gender="Female";
    $contact=+1023456789;

?>

<html>
<head>
    <title>Student Info</title>

</head>
<body>
    <h1>Student info</h1>
    <table border="1">
        <tr>
            <th>Nume</th>
            <th>Clasa/grupa</th>
            <th>Varsta</th>
            <th>GEN(feminim/masculin</th>
            <th>Contact</th>
        </tr>
        <tr>
            <td><?php echo $name?></td>
            <td><?php echo $class?></td>
            <td><?php echo $age?></td>
            <td><?php echo $gender?></td>
            <td><?php echo $contact?></td>



        </tr>
    </table>
</body>
</html>
