<?php

use Laravel\Passport\Client;

$factory->define(Client::class, function () {
    return [
        'redirect'               => '/',
        'password_client'        => false,
        'personal_access_client' => false,
        'revoked'                => false,
    ];
});
