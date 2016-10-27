<?php

    $filepath = "./points";
    //Check if change is a set and is a number.
    $numToChange = 0;
    if(isset($_POST["inc"]) && is_numeric($_POST["inc"]))
    {
        $numToChange = intval($_POST["inc"]);
    }

    //Get data from file.
    $dataFile = file_get_contents($filepath);

    $stilesPoints = json_decode($dataFile, true);

    /* File format should be 
        {
            "name" : "stiles",
            "points" : 0
        }
    */

    $newPoints = intval($stilesPoints["points"]) + $numToChange;

    $overwriteFile = fopen($filepath, "w") or die("Cannot get points for Ryan");

    $overwriteFileContent = '{"name" : "stiles","points" : ' . $newPoints . '}';

    fwrite( $overwriteFile,  $overwriteFileContent );
    fclose( $overwriteFile );

    print $newPoints;
?>