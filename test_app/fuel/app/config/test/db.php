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
 *  Database settings for testing environment
 * -----------------------------------------------------------------------------
 *
 *  This environment is primarily used by unit tests, to run on a
 *  controlled environment.
 *
 *  These settings get merged with the global settings.
 *
 */

return array(
	'default' => array(
        'type'           => 'pdo',
        'connection'     => [
            'dsn'            => 'mysql:host=db;dbname=test',
            'port'           => '3306',
            'username'       => 'user'
        ],
	),
);
