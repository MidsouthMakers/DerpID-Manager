<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('UserTableSeeder');
	}

}
class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

        User::create(array('key' => '123456',
            'hash' => '$1$0.642677$LhiG9enLL6YZ7XaYbg.aq1',
            'ircName' => 'MMRFIDadmin',
            'spokenName' => 'Admin',
            'addedBy' => '123456',
            'dateCreated' => '1234567',
            'isAdmin' => '1',
            'lastLogin' => '0',
            'isActive' => '1'
            ));
        User::create(array('key' => '12345',
            'hash' => '$1$0.242015$ECSEBoROtylsLyvxciPZB.',
            'ircName' => 'MMRFIDuser',
            'spokenName' => 'User',
            'addedBy' => '123456',
            'dateCreated' => '1234567',
            'isAdmin' => '0',
            'lastLogin' => '0',
            'isActive' => '1'
        ));
    }

}