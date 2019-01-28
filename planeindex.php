<?php
    $fileSystemIterator = new FilesystemIterator('planes');
    $repetitions = array("(1)","(2)","(3)","(4)","(5)","(6)","(7)","(8)","(9)");

    $entries = array();
    $planes = array();
    foreach ($fileSystemIterator as $fileInfo){
        $entries[] = $fileInfo->getFilename();
    };
    
    foreach ($entries as $name) {
        $edited = substr($name, 0, -4);
        $final = str_replace($repetitions, "", $edited);
        $planes[] = $final;
    };

    $_SESSION["planes"] = array();
    $_SESSION["planes"] = $planes;
    ?>

