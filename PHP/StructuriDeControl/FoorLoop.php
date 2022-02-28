<?php
    $val=20;
    for($i=1;$i<=$val;$i++)
    {
        $result=$i%2;
        if($result>0)
        {
            echo "impar " . $i . "<br>";
        }else{
            echo "par " . $i . "<br>";
        }

    }


    $i=1;
    for(;$i<=$val;$i++)
    {
        $result=$i%2;
        if($result>0)
        {
            echo "impar " . $i . "<br>";
        }else{
            echo "par " . $i . "<br>";
        }

    }


    $i=1;
    for(;$i<=$val;)
    {
        $result=$i%2;
        if($result>0)
        {
            echo "impar " . $i . "<br>";
        }else{
            echo "par " . $i . "<br>";
        }
        $i++;

    }