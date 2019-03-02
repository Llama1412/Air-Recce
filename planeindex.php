<?php
// Navigate to base directory
$somePath    = 'newPlanes';
// Find all files in base directory
$directories = glob($somePath . '/*', GLOB_ONLYDIR);
// Create array to store arrays for each plane
$planes      = array();
// For each folder loop
foreach ($directories as &$value) {
    // Get name of plane from folder
    $planeName = substr($value, 10, strlen($value));
    $planes[]  = $planeName;

}
// Return array of all planes
$_SESSION['planes'] = $planes?>
