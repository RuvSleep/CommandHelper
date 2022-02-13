<?php
require_once('commandhelper.php');

$array = [
    'el' => 'hello',
    'el_array' => [
        'el1' => 'hi'
    ]
];
CH::ARRAY_TO_OBJECT($array);
CH::OUT($array);