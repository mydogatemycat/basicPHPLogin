<?php

    $inputtedemail = $_POST["email"];
    $inputtedpassword = $_POST["password"];
    $email = "someone@company.com";
    $password = "password";

    if ($inputtedemail == $email and $inputtedpassword == $password) {
        echo "Correct Creds.";
        echo "View the creator's github page here: https://github.com/mydogatemycat";
    } else {
        echo "Incorrect Creds.";
        echo "View the creator's github page here: https://github.com/mydogatemycat";
    }
    

?>