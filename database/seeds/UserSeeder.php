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
        User::create(
            [
                'name' => $faker->lastName,
                'firstname' => $faker->firstName,
                'email' => 'docent@o-nline.be',
                'gsm' => $faker->phoneNumber,
                'street' => $faker->streetName,
                'number' => rand(1,100),
                'city' => $faker->city,
                'active'=> true,
                'approver' => false,
                'finance' => false,
                'admin' => false,
                'password' => Hash::make('docent1234'),
                'created_at' => now(),
                'email_verified_at' => now()
            ]);
        User::create(
            [
                'name' => $faker->lastName,
                'firstname' => $faker->firstName,
                'email' => 'admin@o-nline.be',
                'gsm' => $faker->phoneNumber,
                'street' => $faker->streetName,
                'number' => rand(1,100),
                'city' => $faker->city,
                'active'=> true,
                'approver' => true,
                'finance' => true,
                'admin' => true,
                'password' => Hash::make('myexpense1234'),
                'created_at' => now(),
                'email_verified_at' => now()
            ]);
        User::create(
            [
                'name' => $faker->lastName,
                'firstname' => $faker->firstName,
                'email' => 'approver@o-nline.be',
                'gsm' => $faker->phoneNumber,
                'street' => $faker->streetName,
                'number' => rand(1,100),
                'city' => $faker->city,
                'active'=> true,
                'approver' => true,
                'finance' => false,
                'admin' => false,
                'password' => Hash::make('approver1234'),
                'created_at' => now(),
                'email_verified_at' => now()
            ]);
        User::create(
            [
                'name' => $faker->lastName,
                'firstname' => $faker->firstName,
                'email' => 'finance@o-nline.be',
                'gsm' => $faker->phoneNumber,
                'street' => $faker->streetName,
                'number' => rand(1,100),
                'city' => $faker->city,
                'active'=> true,
                'approver' => false,
                'finance' => true,
                'admin' => false,
                'password' => Hash::make('finance1234'),
                'created_at' => now(),
                'email_verified_at' => now()
            ]);

        for ($i = 3; $i < 9; $i++) {
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
                    'active'=> true,
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
