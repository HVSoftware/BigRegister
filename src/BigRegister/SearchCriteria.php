<?php
/**
 * Created by PhpStorm.
 * User: HVSoftware
 * Date: 2-9-2019
 * Time: 16:27
 */

namespace BigRegister;

require 'BigSearch.php';

$search = new BigSearch();

$criteria = [
    'name' => 'valk',
    'dateOfBirth' => '09-02-1980'
];
$search->searchByCriteria($criteria);

$criteria = [
    'gender' => 2,
    'initial' => 'E',
    'name' => 'valk',
    'professionalGroup' => 17,
    'specialismType' => 75,
    'dateOfBirth' => '09-02-1980'
];
$search->searchByCriteria($criteria);
