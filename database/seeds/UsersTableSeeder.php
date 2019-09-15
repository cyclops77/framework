<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker = Faker::create('id_ID');
    	for ($i=0; $i < 50; $i++) { 

         $user = new \App\User;

    		$user->role = 'karyawan';
    		$user->id = mt_rand(10000,99999);
    		$empl = \App\Employee::create([
    			'user_id' => $user->id,
    			'first_name' => $faker->name,
    			'last_name' => ' ',
    			'address' => $faker->address,
    			'job_experience' => ' ',
    			'last_education' => 'Sarjana'
    		]);
    		$user->name = $empl->first_name;
    		$user->email = $faker->name.'@gmail.com';
    		
       		$user->save();

       		// \App\Registrant::where('id','=',$p)
       		// 	->update(['status' => 'diterima']);



    	}
    }
}
