<?php

return [
    'smtp' => [
        'host'       => 'smtp.gmail.com',  
        'port'       => 587,             
        'username'   => 'example@gmail.com', // Your Gmail
        'password'   => 'your-app-password',    // App password (not your Gmail password)
        'from_email' => 'example@gmail.com', // Sender email
        'from_name'  => 'Malga International',  // Sender name
        'smtp_auth'  => true,                   
        'smtp_secure' => 'tls'                  
    ]
];


