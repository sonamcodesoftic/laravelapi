<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Mailer
    |--------------------------------------------------------------------------
    |
    | This option controls the default mailer that is used to send any email
    | messages sent by your application. Alternative mailers may be setup
    | and used as needed; however, this mailer will be used by default.
    |
    */

    'default' => env('MAIL_MAILER', 'smtp'),

    /*
    |--------------------------------------------------------------------------
    | Mailer Configurations
    |--------------------------------------------------------------------------
    |
    | Here you may configure all of the mailers used by your application plus
    | their respective settings. Several examples have been configured for
    | you and you are free to add your own as your application requires.
    |
    | Laravel supports a variety of mail "transport" drivers to be used while
    | sending an e-mail. You will specify which one you are using for your
    | mailers below. You are free to add additional mailers as required.
    |
    | Supported: "smtp", "sendmail", "mailgun", "ses",
    |            "postmark", "log", "array"
    |
    */

    'mailers' => [
        'smtp' => [

            'transport' => 'smtp',
            // 'path' => '/xampp/sendmail/sendmail.exe -bs', 
            'host' => env('MAIL_HOST', 'smtp.mailtrap.com'),
            'port' => env('MAIL_PORT', 2525),
            'encryption' => env('MAIL_ENCRYPTION', 'tls'),
            'username' => env('MAIL_USERNAME', '1bbdb881a6a935'),
            'password' => env('MAIL_PASSWORD', '8245b0db155903'),
            'timeout' => null,
            'auth_mode' => null,
           
            // 'transport' => 'sendmail',
            // 'path'=>'C:\xampp\sendmail\sendmail.exe -bs',
            // 'class' => 'Swift_SmtpTransport',
            // 'host' => env('MAIL_HOST', 'smtp.gmail.com'),
            // 'port' => env('MAIL_PORT', 587),
            // 'encryption' => env('MAIL_ENCRYPTION', 'tls'),
            // 'username' => env('MAIL_USERNAME','sonamsharmahh@gmail.com'),
            // 'password' => env('MAIL_PASSWORD','@sonam@123'),
            // 'timeout' => null,
            // 'auth_mode' => null,
            
            //  'transport' => 'sendmail',
            //  'driver' => env('MAIL_DRIVER', 'sendmail'),
            //  'class' => 'Swift_SmtpTransport',
            //  'host' => env('MAIL_HOST', 'smtp.ethereal.email'),
            //  'port' => env('MAIL_PORT', 587),
            // //  'from' => ['address' => '<<sonam.codesoftic@gmail.com>>', 'name' => '<<Sonam Sharma>>'],
            //  'encryption' => env('MAIL_ENCRYPTION', 'tls'),
            //  'username' => env('MAIL_USERNAME', 'isaias11@ethereal.email'),
            //  'password' => env('MAIL_PASSWORD', 'kmtks6Y51fcX7fWk5W'),
            //  'sendmail' => '\xampp\sendmail\sendmail.exe\ -t',
            //  'pretend' => false,
            //  'timeout' => null,
            //  'auth_mode' => null,
        ],
        'ses' => [
            'transport' => 'ses',
        ],

        'mailgun' => [
            'transport' => 'mailgun',
        ],

        'postmark' => [
            'transport' => 'postmark',
        ],

        'sendmail' => [
            'transport' => 'sendmail',
            'path' => '/usr/sbin/sendmail -bs',
        ],

        'log' => [
            'transport' => 'log',
            'channel' => env('MAIL_LOG_CHANNEL'),
        ],

        'array' => [
            'transport' => 'array',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Global "From" Address
    |--------------------------------------------------------------------------
    |
    | You may wish for all e-mails sent by your application to be sent from
    | the same address. Here, you may specify a name and address that is
    | used globally for all e-mails that are sent by your application.
    |
    */

    'stream'=>[
        'ssl'=>[
            'allow_self_signed'=>true,
            'verify_peer'=>false,
            'verify_peer_name'=>false,

        ],
    ],




    'from' => [
        'address' => env('MAIL_FROM_ADDRESS', 'sonam.codesoftic@gmail.com'),
        'name' => env('MAIL_FROM_NAME', 'Laravel'),
    ],

    /*
    |--------------------------------------------------------------------------
    | Markdown Mail Settings
    |--------------------------------------------------------------------------
    |
    | If you are using Markdown based email rendering, you may configure your
    | theme and component paths here, allowing you to customize the design
    | of the emails. Or, you may simply stick with the Laravel defaults!
    |
    */

    'markdown' => [
        'theme' => 'default',

        'paths' => [
            resource_path('views/vendor/mail'),
        ],
    ],

];
