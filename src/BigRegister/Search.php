<?php
/**
 * Created by PhpStorm.
 * User: HVSoftware
 * Date: 2-9-2019
 * Time: 15:42
 */

namespace BigRegister;

require 'BigSearch.php';

$id = $argv[1];
$search = new BigSearch();
$search->searchByRegistration($id);
