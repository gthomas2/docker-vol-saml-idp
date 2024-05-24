<?php

$metadata['https://example.org/saml-idp'] = [
    'AssertionConsumerService' => 'http://localhost:8080/.pkg/@citricity/saml-auth/callback',
    'SingleLogoutService' => 'http://localhost:8080/.pkg/@citricity/saml-auth/logout',
    'attributes' => ['uid', 'eduPersonAffiliation', 'email', 'givenName', 'sn'],
];
