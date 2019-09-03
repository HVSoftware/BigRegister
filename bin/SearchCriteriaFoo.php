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

$criteria = [
    'gender' => 2,
    'initial' => 'J',
    'name' => 'Foo',
    'professionalGroup' => 17,
    'specialismType' => 75,
    'dateOfBirth' => '01-01-1970'
];
$search->searchByCriteria($criteria);
