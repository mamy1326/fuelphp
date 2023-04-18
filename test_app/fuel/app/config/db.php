<?php
/**
 * The development database settings. These get merged with the global settings.
 */

return [
    'default' => [
        'type'           => 'mysqli',
        'connection'     => [
            'hostname'       => 'db',
            'port'           => '33060',
            'database'       => 'test',
            'username'       => 'root',
            'password'       => 'password',
            'persistent'     => false,
            'compress'       => false,
        ],
        'identifier'     => '`',
        'table_prefix'   => '',
        'charset'        => 'utf8',
        'enable_cache'   => true,
        'profiling'      => false,
    ],
];