<?php
/**
 * Created by PhpStorm.
 * User: HVSoftware
 * Date: 2-9-2019
 * Time: 16:27
 */

require __DIR__ . '/../vendor/autoload.php';

use BigRegister\BigSearch;

$search = new BigSearch();

$handle = fopen ("php://stdin","r");

/**
 * @param $handle
 * @param $message
 * @param $index
 *
 * @return string
 */
function getArgument($handle, $message, $index)
{
    if (empty($argv[$index])) {
        echo $message;
        return trim(fgets($handle));
    }
    return $argv[$index];
}

$name = getArgument($handle, "There is no 'name' found. Please provide one: ", 1);
$birthDate = getArgument($handle, "There is no 'birthDate' found. Please provide one (DD-MM-YYYY): ", 2);

fclose($handle);

$criteria = [
    'name' => $name,
    'dateOfBirth' => $birthDate
];
$search->searchByCriteria($criteria);
