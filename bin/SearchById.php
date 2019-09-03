<?php
/**
 * Created by PhpStorm.
 * User: HVSoftware
 * Date: 2-9-2019
 * Time: 15:42
 */

require __DIR__ . '/../vendor/autoload.php';

use BigRegister\BigSearch;

if (empty($argv[1])) {
    echo "There is no BigRegistrationNumber found Please provide one: ";
    $handle = fopen ("php://stdin","r");
    $line = fgets($handle);
    $id = trim($line);
    fclose($handle);
} else {
    $id = $argv[1];
}

$search = new BigSearch();
$search->searchByRegistration($id);
