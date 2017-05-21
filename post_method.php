<?php

if($_POST["name"] || $_POST["age"]) {
    if(preg_match("/[^A-Za-z'-]/",$_POST['name'])) {
        die ("Invalid name and name should be alpha");
    }
    echo "Welcome ".$_POST['name']."<br />";
    echo "You are ".$_POST['age']." years old.";

    exit();
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Post Method Example</title>
</head>
<body>
    <form action="<?php $_PHP_SELF ?>" method="POST">
        Name: <input type="text" name="name" /> 
        Age: <input type="text" name="age" />
        <input type="submit" value="Submit" />
    </form>
</body>
</html>