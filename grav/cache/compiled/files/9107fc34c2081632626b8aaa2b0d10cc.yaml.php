<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/git-repos/ccorcov/grav/user/plugins/email/blueprints.yaml',
    'modified' => 1448727630,
    'data' => [
        'name' => 'Email',
        'version' => '1.0.0',
        'description' => 'Enables the emailing system for Grav',
        'icon' => 'envelope',
        'author' => [
            'name' => 'Team Grav',
            'email' => 'devs@getgrav.org',
            'url' => 'http://getgrav.org'
        ],
        'keywords' => 'plugin, email, sender',
        'homepage' => 'https://github.com/getgrav/grav-plugin-email',
        'bugs' => 'https://github.com/getgrav/grav-plugin-email/issues',
        'license' => 'MIT',
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'hidden',
                    'label' => 'Plugin status',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'mailer.engine' => [
                    'label' => 'Mail Engine',
                    'type' => 'hidden'
                ],
                'mailer.default' => [
                    'type' => 'select',
                    'label' => 'Mailer',
                    'size' => 'medium',
                    'options' => [
                        'none' => 'Disabled',
                        'smtp' => 'SMTP',
                        'sendmail' => 'Sendmail',
                        'mail' => 'PHP Mail'
                    ]
                ],
                'from' => [
                    'type' => 'text',
                    'size' => 'medium',
                    'label' => 'Email from',
                    'placeholder' => 'Default email from address'
                ],
                'to' => [
                    'type' => 'text',
                    'size' => 'medium',
                    'label' => 'Email to',
                    'placeholder' => 'Default email to address (can also be comma separated list)'
                ],
                'mailer.smtp.server' => [
                    'type' => 'text',
                    'size' => 'medium',
                    'label' => 'SMTP server',
                    'placeholder' => 'e.g. smtp.google.com'
                ],
                'mailer.smtp.port' => [
                    'type' => 'text',
                    'size' => 'small',
                    'label' => 'SMTP port',
                    'placeholder' => 'Defaults to 25 (plaintext) / 587 (encrypted)',
                    'validate' => [
                        'type' => 'number',
                        'min' => 1,
                        'max' => 65535
                    ]
                ],
                'mailer.smtp.encryption' => [
                    'type' => 'select',
                    'size' => 'medium',
                    'label' => 'SMTP encryption',
                    'options' => [
                        'none' => 'None',
                        'ssl' => 'SSL',
                        'ttl' => 'TTL'
                    ]
                ],
                'mailer.smtp.user' => [
                    'type' => 'text',
                    'size' => 'medium',
                    'label' => 'SMTP login name'
                ],
                'mailer.smtp.password' => [
                    'type' => 'text',
                    'size' => 'medium',
                    'label' => 'SMTP password'
                ],
                'mailer.sendmail.bin' => [
                    'type' => 'text',
                    'size' => 'medium',
                    'label' => 'Path to sendmail',
                    'placeholder' => '/usr/sbin/sendmail'
                ]
            ]
        ]
    ]
];
