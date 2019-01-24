<?php
$fileSystemIterator = new FilesystemIterator('planes');

$entries = array();
$planes = array();
foreach ($fileSystemIterator as $fileInfo){
    $entries[] = $fileInfo->getFilename();
};

foreach ($entries as $name) {
    $edited = substr($name, 0, -4   );
    $planes[] = $edited;
}
?>