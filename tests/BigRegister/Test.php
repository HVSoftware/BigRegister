<?php
/**
 * Created by PhpStorm.
 * User: HVSoftware
 * Date: 2-9-2019
 * Time: 16:03
 */

require_once __DIR__ . '/../../vendor/autoload.php'; // Autoload files using Composer autoload

use BigRegister\BigSearch;

$id = $argv[1];

$search = new BigSearch();
$search->searchByRegistration($id);
