<?php
$myfile = fopen("test.txt", "w") or die("Unable to open file!");
// echo filesize('test.txt');
// echo fread($myfile, 10);
$txt = "John Doe\n";
fwrite($myfile, $txt);
$txt = "Jane Doe\n";
fwrite($myfile, $txt);
fclose($myfile);


die;

if (!$_SESSION['name'] && !$_SESSION['id']) {

    header("Location: sign-out.php"); //redirect to the login page to secure the welcome page without login access.  
}

?>

<html>

<head>

    <title>
        Registration
    </title>
</head>

<body>
    <h1>Welcome</h1><br>
    <?php
    echo "<h1>"  . $_SESSION['name'] . $_SESSION['id'] . "</h1>";
    ?>
    <h1><a href="sign-out.php">Logout here</a> </h1>
</body>

</html>