<?php

/** @var \abhi36\AwsCognito\CognitoClient $client */
$client = require(__DIR__ . '/bootstrap.php');

$username = 'test@example.com';

try {
    $user = $client->getUser($username);
    echo $user['Username'] . PHP_EOL;
    var_dump($user['UserAttributes']);
} catch (Exception $e) {
    echo "An error occurred: " . $e->getMessage();
}
