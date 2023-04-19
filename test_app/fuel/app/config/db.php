<?php
/**
 * The development database settings. These get merged with the global settings.
 */

return [
    'default' => [
        'type'           => 'mysqli',
        'connection'     => [
            'password'       => getenv('WRITER_DB_PASSWORD'),
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
