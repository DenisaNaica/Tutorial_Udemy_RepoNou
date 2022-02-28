<html>
<head>
    <title>
        FORM - POST
    </title>
</head>
<body>
    <h1> FORM - POST</h1>
    <a href="StudentInfo.html" target="_blank">Go to Student form</a>
    <?PHP
        $test=$_POST['test'];//ce e pe name trebuie sa punem pe get
        $email=$_POST['email'];
        echo $test  ."   ". $email;

?>
</body>
</html>
