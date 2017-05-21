<?php

if($_GET["name"] || $_GET["age"]) {
    echo "Welcome ".$_GET['name']."<br />";
    echo "You are ".$_GET['age']." years old.";

    exit();
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Get Method Example</title>
</head>
<body>
    <form action="<?php $_PHP_SELF ?>" method="GET">
        Name: <input type="text" name="name" /> 
        Age: <input type="text" name="age" />
        <input type="submit" value="Submit" />
    </form>
</body>
</html>