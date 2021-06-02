<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(CostcentreSeeder::class);
        $this->call(ExpenselineSeeder::class);
        $this->call(FaqSeeder::class);
    }
}
