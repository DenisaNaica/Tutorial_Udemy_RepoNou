<?php
    $employee=[100,101,102];
    foreach($employee as $emp){
        echo "EmpID: $emp"."<br>";
    }

    $emp_details=[
        "100"=>[
            "name"=>"john",
            "john"=>"PHP DEV"

        ],
        "101"=>[
            "name"=>"amit",
            "job"=>"PHP senior dev"
        ],
        "102"=>[
            "name"=>"jim",
            "job"=>"web designer"
        ]
    ];

    foreach($emp_details as$key=>$val){
        foreach($val as $emp1 ){
            echo $emp1 ."<br>";
        }
    }

