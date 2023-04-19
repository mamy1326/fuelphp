<?php
namespace Fuel\Tasks;

class Example
{

        public function run()
        {
                $users = \Model_User::find('all');
                print_r($users);
	}
}
