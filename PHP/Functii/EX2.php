<?php
    declare(strict_types=1);

    function calculator(int $a, int $b, String $operation="all"){
        switch($operation){
            case "add":
                $result=$a+$b;
                echo "add: $result <br>";
                break;
            case "sub":
                $result=$a-$b;
                echo "sub: $result <br>";
                break;
            case "multiple":
                $result=$a*$b;
                echo "multiple: $result <br>";
                break;
            case "divide: $result <br>":
                $result=$a/$b;
                echo "divide";
                break;
            default:
                $result=$a+$b;
                echo "add: $result <br>";
                $result=$a-$b;
                echo "sub: $result <br>";
                $result=$a*$b;
                echo "multiple: $result <br>";
                $result=$a/$b;
                echo "divide: $result <br>";
                break;
        }

    }

    calculator(1,2);
    calculator(3,7,"multiple");
