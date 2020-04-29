<?php
//If a form has been submitted to this page,we can collect the submission
//information using one of the two SUPERGLOBALS:
    //$_GET [array] (if the form was submitted with a GET method.)
    //$_POST [array] (if the form was submitted with a POST method.)
if (isset( $_POST ) && !empty( $_POST ) ) //Making sure something was submitted.
{
    //Retrieving values from an array (use square brackets and either: the index
    //number or the key name [a string.]) Key-value pair for associative
    $submittedUsername = $_POST['username'];
    $submittedPassword = $_POST['password'];
}
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First PHP</title>
</head>
<body>
<h1>PHP Form Handling</h1>
<?php include './includes/navigation.php';?>
<h2>Sign In Form</h2>
<form action="./form.php" method="POST"><?php//Forms can use GET or POST method. ?>
<label for="username">
Username:
<input type="text" name="username" id="username">
</label>
<label for="password">
Password:
<input type="password" name="password" id="password">
</label>
<input type="submit" value="Sign In">
</form>
<pre>
<?php var_dump( $_POST); ?>
</body>
</html>

