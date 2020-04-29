<?php
session_start(); //BEFORE ANY OUTPUT, YOU MUST DECLARRE IF YOU'D LIKE TO USE SESSION.
if ( !isset( $_SESSION['interests']))
{
    $_SESSION[ 'interests'] = array();
}
$message = 'Welcome to the website, please log in.';
//If a form has been submitted to this page,we can collect the submission
//information using one of the two SUPERGLOBALS:
//$_GET [array] (if the form was submitted with a GET method.)
//$_POST [array] (if the form was submitted with a POST method.)
if (isset($_POST) && !empty($_POST)) //Making sure something was submitted.
{
    //Retrieving values from an array (use square brackets and either: the index
    //number or the key name [a string.]) Key-value pair for associative
    $submittedUsername = $_POST['username'];
    $submittedPassword = $_POST['password'];
    //Expected username and password (hardcoded)
    $username = 'warren';
    $password = 'mypass';
    //Successful log in?
    if (($username === $submittedUsername) && ($password === $submittedPassword)) {
        $message = 'Hello, ' . $username . ',thank you for logging in!';
        array_push( $SESSSION[ 'interests'], $_POST[ 'interest'] );
    } else {
        $message = 'Uh oh! Please try again, your username and/or password were incorrect!';
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First PHP</title>
</head>

<body>
    <h1>PHP Form Handling</h1>
    <?php include './includes/navigation.php'; ?>
    <h2>Sign In Form</h2>
    <p>
        <?php echo $message; //Output our sign in related message. 
        ?>
    </p>
    <form action="./form.php" method="POST">
    <?php //Forms can use GET or POST method. ?>
                                            
        <label for="username">
            Username:
            <input type="text" name="username" id="username">
        </label>
        <label for="password">
            Password:
            <input type="password" name="password" id="password">
        </label>
        <label for="interest">
        Add an interest:
         <input type="text" name="interest" id="interest">
         </label>
        <input type="submit" value="Sign In">
    </form>
    <?php if ( !empty( $_SESSION['interests'] ) ) : //Check if there are interests ?> 
        <h2>My Interests: </h2>
        <ul>
            <?php foreach ( $_SESSION['interests'] as $interest ) : //Output each interest in the array?>
            <li>
                <?php echo $interest; ?>
            </li>
            <?php endforeach; ?>
        </ul>
            <?php endif; ?>
    <pre>
        <strong>$_POST contents:</strong>
<?php var_dump($_POST); ?>
    </pre>
    <pre>
    <strong>$_SESSION contents:</strong> 
<?php var_dump($_SESSION); ?>
    </pre>
</body>
</html>