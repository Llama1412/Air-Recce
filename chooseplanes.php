<?php
include "planeindex.php";

unset($selection);
$selection   = array();
$targno      = rand(0, sizeof($_SESSION["planes"]) - 1);
$selection[] = $targno;

$result = array_search($targno, array_keys($_SESSION["planes"]));



while (sizeof($selection) != 8) {
    $generated = rand(0, sizeof($_SESSION["planes"]) - 1);
    if ($generated != $targno) {
        if (!in_array($generated, $selection)) {
            $selection[] = $generated;
        };
    };
};



shuffle($selection);
$_SESSION["correctanswer"] = $_SESSION["planes"][$targno];

$option1 = $_SESSION["planes"][$selection[0]];
$option2 = $_SESSION["planes"][$selection[1]];
$option3 = $_SESSION["planes"][$selection[2]];
$option4 = $_SESSION["planes"][$selection[3]];
$option5 = $_SESSION["planes"][$selection[4]];
$option6 = $_SESSION["planes"][$selection[5]];
$option7 = $_SESSION["planes"][$selection[6]];
$option8 = $_SESSION["planes"][$selection[7]];

$rand = mt_rand() / mt_getrandmax();


if ($rand > 1.1) {
    print_r(' Larger than 0.9');
} else {
    $pictures           = array();
    $somePath           = 'newPlanes/' . $_SESSION["planes"][$targno] . '/standard';
    $entries            = array();
    $fileSystemIterator = new FilesystemIterator($somePath);
    // Get the file name of all of the images in the standard folder
    foreach ($fileSystemIterator as $fileInfo) {
        $entries[] = $fileInfo->getFilename();
    }
    ;

    foreach ($entries as $name) {
        $pictures[] .= $name;
    }
    $currentpic = $somePath . '/' . $pictures[array_rand($pictures, 1)];
}

?>
