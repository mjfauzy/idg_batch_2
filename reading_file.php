<!DOCTYPE html>
<html>
<head>
    <title>Reading a File using PHP</title>
</head>

<body>
    <?php
        $filename = "temp.txt";
        $file = fopen($filename,"r");

        if($file == false) {
            echo "Error in opening file";
            exit();
        }

        $filesize = filesize($filename);
        $filetext = fread($file,$filesize);
        fclose($file);

        echo "File size : $filesize bytes";
        echo "<pre>$filetext</pre>";
    ?>
</body>
</html>