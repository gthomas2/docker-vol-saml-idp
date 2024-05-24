<?php

$config = [
    'example-userpass' => [
        'exampleauth:UserPass',
        // Requested attributes
        'attributes' => ['uid', 'eduPersonAffiliation', 'email', 'givenName', 'sn'],
        'users' => [
            'student:studentpass' => [
                'uid' => ['student'],
                'eduPersonAffiliation' => ['member', 'student'],
                'email' => ['student@example.com'], // Add the email attribute
                'mail' => ['student@example.com'],
                'givenName' => ['John'], // Add the forename attribute (givenName)
                'sn' => ['Doe'], // Add the surname attribute (sn)
            ],
            'employee:employeepass' => [
                'uid' => ['employee'],
                'eduPersonAffiliation' => ['member', 'employee'],
                'email' => ['employee@example.com'], // Add the email attribute
                'mail' => ['student@example.com'],
                'givenName' => ['Jane'], // Add the forename attribute (givenName)
                'sn' => ['Smith'], // Add the surname attribute (sn)
            ],
        ],
    ],
];
