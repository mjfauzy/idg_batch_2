<?php

    $filename = "newfile.txt";
    $file = fopen($filename, "w");

    if($file == false) {
        echo "Error in opening new file";
        exit();
    }

    fwrite($file, "This is a simple test\n");
    fclose($file);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Writing a File Using PHP</title>
</head>

<body>
    <?php
        $filename = "newfile.txt";
        $file = fopen($filename,"r");
        
        if($file == false) {
            echo "Error in opening new file";
            exit();
        }

        $filesize = filesize($filename);
        $filetext = fread($file,$filesize);

        fclose($file);

        echo "File size : $filesize \n";
        echo "$filetext";
        echo "File name : $filename";
    ?>
</body>
</html>