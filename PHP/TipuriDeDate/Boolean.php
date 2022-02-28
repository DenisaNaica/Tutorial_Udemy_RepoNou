<?php
    $flag1=TRUE;
    $flag2=FALSE;
    echo ($flag1)?"True":"False";//true
    echo "<br>";
    echo ($flag2)?"True":"False";//false
    echo "<br>";

    echo "True:".$flag1 . "<br>";
    echo "False:".$flag2 . "<br>";//aici se pune null

    $isLoggedIn=true;
    $userSessionNmae="denisa";
    echo ($isLoggedIn && $userSessionNmae) ? "Logat": "Userul nu e logat";
    echo "<br>";

    //aici userul nu e logat
    $isLoggedIn=true;
    $userSessionNmae="0";
    echo ($isLoggedIn && $userSessionNmae) ? "Logat": "Userul nu e logat";
    echo "<br>";

    //nici aici userul nu e logat
    $isLoggedIn=true;
    $userSessionNmae=null;
    echo ($isLoggedIn && $userSessionNmae) ? "Logat": "Userul nu e logat";
    echo "<br>";

    $marks=1;
    echo ($marks) ? "Marks has value": "marks does not have value";
    echo "<br>";
    //doar cand avem 0 o sa inter pe ramura 2(marks does not value)
    $marks=0;
    echo ($marks) ? "Marks has value": "marks does not have value";
    echo "<br>";
    $name="denisa";
    echo ($name==="denisa")? "da. e denisa": "nu,nu e denisa";

