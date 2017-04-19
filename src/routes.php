<?php
$routes = [
    'metadata',
    'searchContent',
    'getTags',
    'getSections',
    'getEditions',
    'getSingleItem'
];
foreach($routes as $file) {
    require __DIR__ . '/../src/routes/'.$file.'.php';
}

