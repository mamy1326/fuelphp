<?php
/**
 * Fuel is a fast, lightweight, community driven PHP 5.4+ framework.
 *
 * @package    Fuel
 * @version    1.9-dev
 * @author     Fuel Development Team
 * @license    MIT License
 * @copyright  2010 - 2019 Fuel Development Team
 * @link       https://fuelphp.com
 */

/**
 * -----------------------------------------------------------------------------
 *  Database settings for development environment
 * -----------------------------------------------------------------------------
 *
 *  These settings get merged with the global settings.
 *
 */

 return [
    'default' => [
        'type'           => 'mysqli',
        'connection'     => [
            'hostname'       => 'secure-connection-test.cluster-cptunb5lgmjv.ap-northeast-1.rds.amazonaws.com',
            'port'           => '3306',
            'database'       => 'db_secure_connection_test',
        ],
    ],
];
