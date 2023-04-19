<?php
namespace Fuel\Tasks;

class Example
{

	public function run()
	{
        echo getenv('WRITER_DB_PASSWORD') . "\n";
        $users = \Model_User::find('all');
        print_r($users);
	}
}
