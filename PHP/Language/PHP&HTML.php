<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP & HTML</title>
    <script type="text/javascript">
         <?=
             "alert('i am coming from PHP!')";
         ?>
    </script>
</head>
<body>
    <h1>Embed PHP in html</h1>
    <!-- sample 1-->
    <?php
         echo 'hello world';
    ?>
    <?php
        print "<p> Sample 1: This text is printed from php </p>";
    ?>
    <?= "<br>" ?>

    <!-- sample 2-->
    <p>
        <?php
            echo "Sample 2: This text is printed from php ";
        ?>
    </p>
    <!--
    <p style="color:red;">
        Sample 3: This is a red text
    </p>
     -->
    <!-- sample 3-->
    <p <?='style="color:red;"'?> >
        Sample 3: This is a red text
    </p>

    <!-- Sample 4-->
    <?="<p>"?>
        Sample 4: This text is printed from php!

    <?="</p>"?>



</body>
</html>