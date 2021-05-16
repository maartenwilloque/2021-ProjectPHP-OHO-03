<?php

use App\User;
use Faker\Factory;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create('nl_BE');
        for ($i = 3; $i < 50; $i++) {
            $name = $faker->lastName;
            $firstname = $faker->firstName;
            $email =  'R'.rand(1000000,99999999).'@thomasmore.be';
            User::create(
                [
                    'name' => $name,
                    'firstname' => $firstname,
                    'email' => $email,
                    'gsm' => $faker->phoneNumber,
                    'street' => $faker->streetName,
                    'number' => rand(1,100),
                    'city' => $faker->city,
                    'approver' => false,
                    'finance' => false,
                    'admin' => false,
                    'password' => Hash::make('Password001'),
                    'created_at' => now(),
                    'email_verified_at' => now()
                ]
            );

        }

    }
}
