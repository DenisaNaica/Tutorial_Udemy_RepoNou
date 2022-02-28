<?php
    $value=1;
    while($value <=10)
    {
        echo $value . "<br>";
        $value++;
    }

    $i=1;
    while($i<=10)
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

    //loop infinit

    $exit=0;
    while(true){
        echo $exit."<br>";
        $exit++;
        if($exit==6)
        {
            //fortare iesire din loop infinit
            break;
        }
    }
    //puterile lui 2  mai mici ca 100
    $max_value=100;
    $value1=2;
    do{
        echo "Square: ". $value1 . "<br>";
        $value1*=2;
    }while($value1<=$max_value);
