<?php
    if(!isset($Forename)) {
        $Forename = " ";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Register</title>
</head>
<body>
<div class="container">
    <div class="card">
        <div class="img_container"><img src="2.png"></div>
    <form action="welcome.php" method="get"> 
        <input placeholder="Forename" type="text" name="Forename"><br />
            <?php 
                if(isset($forename_error)) { ?>
                    <font color="red"><?php echo $forename_error ?></font>
            <?php } ?> <br />
        <input placeholder="Surname" type="text" name="Surname"><br />
            <?php 
                if(isset($Surname_error)) { ?>
                    <font color="red"><?php echo $Surname_error ?></font>
            <?php } ?> <br />
        <input placeholder="Username" type="text" name="Username"><br />
            <?php 
                if(isset($Username_error)) { ?>
                    <font color="red"><?php echo $Username_error ?></font>
            <?php } ?> <br />
        <input placeholder="Password" type="password" name="pass1"><br />
            <?php 
                if(isset($pass1_error)) { ?>
                    <font color="red"><?php echo $pass1_error ?></font>
            <?php } ?> <br />
        <input placeholder="Re password" type="password" name="pass2"><br />
            <?php 
                if(isset($pass1_error)) { ?>
                    <font color="red"><?php echo $pass1_error ?></font>
            <?php } ?> <br />
        <input placeholder="Age" type="integer" name="Age"><br />
            <?php 
                if(isset($pass1_error)) { ?>
                    <font color="red"><?php echo $Age_error ?></font>
            <?php } ?> <br />
        <input placeholder="Email" type="text" name="Email"><br />
            <?php 
                if(isset($Email_error)) { ?>
                    <font color="red"><?php echo $Email_error ?></font>
            <?php } ?> <br />         
        <input class="enter_button" type="submit" value="ENTER">
    </form>
    </div>
</div>
</body>
</html>

