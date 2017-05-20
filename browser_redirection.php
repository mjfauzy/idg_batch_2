<?php

if($_POST["location"]) {
    $location = $_POST["location"];
    header("location:$location");

    exit();
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Browser Redirection</title>
    </head>
    <body>
        <p>Choose a site to visit: </p>
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
            <select name="location">
                <option value="https://www.tutorialspoint.com">TutorialsPoint.com</option>
                <option value="https://www.google.com">Google.com</option>
            </select>
            <input type="submit" value="Submit" />
        </form>
    </body>
</html>