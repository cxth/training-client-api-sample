<?php
// access this thru browser: http://third-party.test:8080/auth_redirection.php

include_once('config.php');

$query = http_build_query(array(
    'client_id' => '1',
    'redirect_uri' => REDIRECT_URI,
    'response_type' => 'code', // access code grant
    //'response_type' => 'token', // implicit grant, access token returned
    'scope' => '',
));
 
header('Location: '. AUTHORIZE . $query);
