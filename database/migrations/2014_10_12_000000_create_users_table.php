<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('firstname');
            $table->string('email')->unique();
            $table->string('gsm')->default(014562310);
            $table->string('street');
            $table->string('number');
            $table->string('city');
            $table->boolean('approver')->default(false);
            $table->boolean('finance')->default(false);
            $table->boolean('active')->default(false);
            $table->boolean('admin')->default(false);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->default("Password001");
            $table->rememberToken();
            $table->timestamps();
        });
// Insert some users (inside the up-function!)
        DB::table('users')->insert(
            [
                [
                    'name' => 'Van Moorleghem',
                    'firstname' => 'Erwin',
                    'email' => 'erwin@example.com',
                    'gsm' => '0497001122',
                    'street' => 'straat1',
                    'number' => '1',
                    'city' => 'Geel',
                    'active'=>true,
                    'approver' => false,
                    'finance' => false,
                    'admin' => true,
                    'password' => Hash::make('erwin'),
                    'created_at' => now(),
                    'email_verified_at' => now()
                ],
                [
                    'name' => 'Swaan',
                    'firstname' => 'Alex',
                    'email' => 'alex@example.com',
                    'gsm' => '0497110022',
                    'street' => 'straat2',
                    'number' => '2',
                    'city' => 'Geel',
                    'active'=>true,
                    'approver' => false,
                    'finance' => true,
                    'admin' => false,
                    'password' => Hash::make('alex'),
                    'created_at' => now(),
                    'email_verified_at' => now()
                ],
                [
                    'name' => 'Willoqué',
                    'firstname' => 'Maarten',
                    'email' => 'maarten@example.com',
                    'gsm' => '0497001133',
                    'street' => 'straat3',
                    'number' => '3',
                    'city' => 'Geel',
                    'active'=>true,
                    'approver' => true,
                    'finance' => false,
                    'admin' => false,
                    'password' => Hash::make('maarten'),
                    'created_at' => now(),
                    'email_verified_at' => now()
                ],
                [
                    'name' => 'Klant',
                    'firstname' => 'Active',
                    'email' => 'active@example.com',
                    'gsm' => '0497110022',
                    'street' => 'straat2',
                    'number' => '2',
                    'city' => 'Geel',
                    'active'=>true,
                    'approver' => false,
                    'finance' => false,
                    'admin' => false,
                    'password' => Hash::make('klant'),
                    'created_at' => now(),
                    'email_verified_at' => now()
                ],
                [
                    'name' => 'Klant',
                    'firstname' => 'Approver',
                    'email' => 'approver@example.com',
                    'gsm' => '0497110022',
                    'street' => 'straat2',
                    'number' => '2',
                    'city' => 'Geel',
                    'active'=>true,
                    'approver' => true,
                    'finance' => false,
                    'admin' => false,
                    'password' => Hash::make('klant'),
                    'created_at' => now(),
                    'email_verified_at' => now()
                ],
                [
                    'name' => 'Klant',
                    'firstname' => 'Finance',
                    'email' => 'finance@example.com',
                    'gsm' => '0497110022',
                    'street' => 'straat2',
                    'number' => '2',
                    'city' => 'Geel',
                    'active'=>true,
                    'approver' => false,
                    'finance' => true,
                    'admin' => false,
                    'password' => Hash::make('klant'),
                    'created_at' => now(),
                    'email_verified_at' => now()
                ],
                [
                    'name' => 'Klant',
                    'firstname' => 'Admin',
                    'email' => 'admin@example.com',
                    'gsm' => '0497110022',
                    'street' => 'straat2',
                    'number' => '2',
                    'city' => 'Geel',
                    'active'=>true,
                    'approver' => false,
                    'finance' => false,
                    'admin' => true,
                    'password' => Hash::make('klant'),
                    'created_at' => now(),
                    'email_verified_at' => now()
                ]
            ]

        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
