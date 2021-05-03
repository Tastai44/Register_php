<?php
    $Forename = $_GET["Forename"];
    $Surname = $_GET["Surname"];
    $Username = $_GET["Username"];
    $pass1 = $_GET["pass1"];
    $pass2 = $_GET["pass2"];
    $Age = $_GET["Age"];
    $Email = $_GET["Email"];
    /*
    $Age = $_GET["Age"];
    $email = $_GET["email"]; 
    */

    if(empty($Forename)) {
        $forename_error = "Please type your Forename";
    } elseif(strlen($Forename) < 3) {
        $forename_error = "Must have at least 3 alphabet characters";
    }

    if(empty($Surname)) {
        $Surname_error = "Please type your Surname";
    } elseif(strlen($Surname) < 3) {
        $Surname_error = "Must have at least 3 alphabet characters";
    }

    if(empty($Username)) {
        $Username_error = "Please type your Username";
    } elseif(strlen($Username) < 3) {
        $Username_error = "Must have at least 3 alphabet characters";
    }

    if(empty($pass1) || empty($pass2)) {
        $pass1_error = "Please type your Passwords";
    } elseif(strlen($pass1) < 8 || strlen($pass2) < 8) {
        $pass1_error = "Must have at least 8 alphabet characters";
    } elseif($pass1 != $pass2) {
        $pass1_error = "Passwords must match";
    }

    if(empty($Age)) {
        $Age_error = "Please type your Age";
    } elseif($Age< 18) {
        $Age_error = "You have to turned to 18 first";
    } elseif($Age > 110) {
        $Age_error = "Your age should less than 111 years old";
    }

    if(empty($Email)) {
        $Email_error = "Please type your Email";
    } elseif(strlen($Email) < 5) {
        $Email_error = "Must be of the form abc@def.com";
    }

    if(empty($forename_error) && empty($Surname_error) && empty($Username_error) && empty($pass1_error) && empty($Age_error) && empty($Email_error)) {
        include("done.php");
    } else {
        include("index.php");
    }
?>

