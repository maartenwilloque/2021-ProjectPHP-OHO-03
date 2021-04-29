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
            $table->id(); // shorthand for $table->bigIncrements('id');
            $table->string('naam');
            $table->string('voornaam');
            $table->string('email')->unique();
            $table->string('straat');
            $table->string('nummer');;
            $table->string('gemeente');
            $table->boolean('goedkeurder')->default(false);
            $table->boolean('finance')->default(false);
            $table->boolean('actief')->default(true);
            $table->boolean('admin')->default(false);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
        // Insert some users (inside the up-function!)
        DB::table('users')->insert(
            [
                [
                    'naam' => 'Van Moorleghem',
                    'voornaam' => 'Erwin',
                    'email' => 'erwin@example.com',
                    'straat'=>'straat1',
                    'nummer'=>'1',
                    'gemeente'=>'Geel',
                    'goedkeurder'=>true,
                    'finance'=>false,
                    'admin'=>false,
                    'password' => Hash::make('erwin'),
                    'created_at' => now(),
                    'email_verified_at' => now()
                ],
                [
                    'naam' => 'Swaan',
                    'voornaam' => 'Alex',
                    'email' => 'alex@example.com',
                    'straat'=>'straat2',
                    'nummer'=>'2',
                    'gemeente'=>'Geel',
                    'goedkeurder'=>false,
                    'finance'=>true,
                    'admin'=>false,
                    'password' => Hash::make('alex'),
                    'created_at' => now(),
                    'email_verified_at' => now()
                ],
                [
                    'naam' => 'Willoqué',
                    'voornaam' => 'Maarten',
                    'email' => 'maarten@example.com',
                    'straat'=>'straat3',
                    'nummer'=>'3',
                    'gemeente'=>'Geel',
                    'goedkeurder'=>false,
                    'finance'=>true,
                    'admin'=>true,
                    'password' => Hash::make('maarten'),
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
