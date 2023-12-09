<?php

/** @var \abhijeet\AwsCognito\CognitoClient $client */
$client = require(__DIR__ . '/bootstrap.php');

$accessToken = '';

$username = $client->verifyAccessToken($accessToken);
var_dump($username);
