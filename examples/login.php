<?php

use abhijeet\AwsCognito\CognitoClient;
use abhijeet\AwsCognito\Exception\ChallengeException;
use abhijeet\AwsCognito\Exception\PasswordResetRequiredException;

/** @var CognitoClient $client */
$client = require(__DIR__ . '/bootstrap.php');

$username = 'test@example.com';
$password = 'Pass1worD';

try {
    $authenticationResponse = $client->authenticate($username, $password);
} catch (ChallengeException $e) {
    if ($e->getChallengeName() === CognitoClient::CHALLENGE_NEW_PASSWORD_REQUIRED) {
        $authenticationResponse = $client->respondToNewPasswordRequiredChallenge($username, 'password_new', $e->getSession());
    }
} catch (PasswordResetRequiredException $e) {
    die("PASSWORD RESET REQUIRED");
}

var_dump($authenticationResponse);
