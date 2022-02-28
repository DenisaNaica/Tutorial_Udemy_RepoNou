<html>
<head>
    <title>
        FORM - GET
    </title>
</head>
<body>
    <h1> FORM - GET</h1>
    <a href="StudentInfo.html" target="_blank">Go to Student form</a>
    <?PHP
        $test=$_GET['test'];//ce e pe name trebuie sa punem pe get
        $email=$_GET['email'];
        echo $test  ."   ". $email;

    ?>
</body>
</html>
