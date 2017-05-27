<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
			[
				'name' 		=> 'Frank', 
				'last_name' => 'Pereira', 
				'email' 	=> 'franper88@hotmail.com', 
				'user' 		=> 'franper',
				'password' 	=> \Hash::make('franper'),
				'type' 		=> 'admin',
				'active' 	=> 1,
				'address' 	=> 'San Cosme 290, Cuauhtemoc, D.F.',
				'created_at'=> new DateTime,
				'updated_at'=> new DateTime
			],
			[
				'name' 		=> 'Daniel', 
				'last_name' => 'Martin', 
				'email' 	=> 'daniel@hotmail.com', 
				'user' 		=> 'daniel',
				'password' 	=> \Hash::make('franper'),
				'type' 		=> 'user',
				'active' 	=> 1,
				'address' 	=> 'Tonala 321, Jalisco',
				'created_at'=> new DateTime,
				'updated_at'=> new DateTime
			],

		);

		User::insert($data);
    }
}
