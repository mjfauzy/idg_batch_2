<?php

if($_REQUEST["name"] || $_REQUEST["age"]) {
    if(preg_match("/[^A-Za-z'-]/",$_REQUEST['name'])) {
        die ("Invalid name and name should be alpha");
    }

    echo "Welcome ".$_REQUEST['name']."<br />";
    echo "You are ".$_REQUEST['age']." years old.";

    exit();
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Request Method Example</title>
</head>
<body>
    <form action="<?php $_PHP_SELF ?>" method="POST">
        Name: <input type="text" name="name" /> 
        Age: <input type="text" name="age" />
        <input type="submit" value="Submit" />
    </form>
</body>