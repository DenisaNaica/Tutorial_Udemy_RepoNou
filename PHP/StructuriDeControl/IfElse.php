<?php
    //$input1=null;
    $input1="some text from user";
    $input2=34;
    if(is_null($input1)){
        echo "variabila e null" ."<br>";
    }else
    {
        echo "variabila nu e null". "<br>";
    }

    if(isset($input1) && !is_null($input1)){
        echo "variabila nu e null" ."<br>";
    }else
    {
        echo "variabila e null". "<br>";
    }

    if($input1 !=""){
        echo "variabila nu e empty"."<br>";
    }else{
        echo "variabila e empty" . "<br>";
    }

    //cea mai buna metoda de verificare ca o variabila
    //e empty
    if(!empty($input1)){
        echo "variabila nu e empty". "<br>";
    }else{
        echo "variabila e empty" . "<br>";
    }

    if($input2>30){
       echo "variabila e mai mare decat 30". "<br>";
    }else{
      echo "variabila nu e mai mare decat 30" . "<br>";
    }

    $result="passed";
    if($result==="passed"){
        echo "studentul a trecut materia ". "<br>";
    }else{
        echo "studentul nu a trecut materia" . "<br>";
    }

    $nr=23;
    if($nr%2==1){
        echo "nr impar". "<br>";
    }else if($nr%2==0){
        echo "nr par" . "<br>";
    }

    $flag=false;
    if($flag)
    {
        echo "TRUE". "<br>";
    }
    else{
        //SE intra pe ramura asta
        echo "FALSE". "<br>";
    }

    $nr=23;
    if($nr>23){
        echo "nr mai mare decat nr23". "<br>";
    }else if($nr<23){
        echo "nr mai mic decat 23" . "<br>";
    }else{
        echo "nr egal cu nr 23" . "<br>";
    }


