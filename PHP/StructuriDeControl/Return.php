<?php
    function checkUserRoles($userRoles){
        if(empty($userRoles)){
            echo "Roles cannot be empty";
            return;
        }
        switch($userRoles){
            case "Admin":
                echo "Hello Admin"."<br>";
                break;
            case "Editor":
                echo "Hello Editor"."<br>";
                break;
            default:

        }
    }

    checkUserRoles("Admin");
    checkUserRoles("");
    checkUserRoles("Editor");

