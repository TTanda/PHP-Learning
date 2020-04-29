<?php
include './includes/datatypes.php';
?><DOCTYPE html>

    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>First PHP</title>
    </head>

    <body>
        <h1>PHP Example</h1>
        <pre>
    <?php var_dump($myOtherArray);
    ?>
    <?php
    $myVar = "Hello, World!";
    $name = 'Trina';
    $greetig = "Hi, my name is: $name ";
    $lang = 'PHP';
    $greeting2 = "$name here . I think I get this basic $lang example.";
    echo $myVar;
    echo $greeting2;
    ?>
    <h2> Include information </h2>
    <?php include './includes/navigation.php'; ?>
</body>
</html>