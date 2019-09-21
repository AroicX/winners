<?php

use Illuminate\Database\Seeder;


use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use App\Member;

class MembersTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('App\Member');
       



        for ($i=0; $i <= 20 ; $i++) { 
    
            
    		DB::table('members')->insert([
    		    'title' => 'Sis',
                'name' => $faker->name,
    			'address' => $faker->address,
    			'unit' => 'Choir',
    			'year' => $faker->year,
    			'growth' => 40,
    			'number' => '07016762847',
    			'dob' => '20/02/1989',
    			'occupation' => 'Teacher',
    			'matrial_status' => 'Married',
    			'province' => 'Kaduna',
    			'district' => 'Barnawa 2',
    			

            ]);
            
            
    	}
    
    }
}
