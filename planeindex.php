<?php
$fileSystemIterator = new FilesystemIterator('planes');

$entries = array();
foreach ($fileSystemIterator as $fileInfo){
    $entries[] = $fileInfo->getFilename();
}

var_dump($entries);
?>