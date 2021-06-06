<?php

use App\Costcentre;
use App\Expense;
use App\Expenseline;
use App\Expenseprogress;
use Faker\Factory;
use Illuminate\Database\Seeder;

class ExpenselineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create('nl_BE');
        for ($i = 0; $i < 100; $i++) {
            $expenseid = $i + 1;
            $costcentre = (rand(1, 100) <= 25) ? 1 : rand(2, 48);
            $userid = rand(1, 18);

            Expense::create([
                'costcentre_id' => $costcentre,
                'user_id' => $userid,
                'name' => 'Algemeen',
                'date' => now(),
            ]);
            $expenselinescounter = rand(1, 8);
            switch ($expenselinescounter) {
                case 1:
                    $date = $faker->dateTimeBetween('-1 months', 'now');
                    $typeid = $faker->randomElement([1, 2, 3, 4]);

                    switch ($typeid) {
                        case 1:
                            Expenseline::create([
                                'description' => $faker->randomElement(['bloemen', 'eten', 'cadeau', 'materiaal', 'excursie']),
                                'expense_id' => $expenseid,
                                'date' => $date,
                                'type_id' => $typeid,
                                'amount' => rand(25, 200)
                            ]);
                            $status = $faker->randomElement([1, 2, 3, 4, 5, 6, 8]);
                            switch ($status) {
                                case 1:
                                case 2:
                                case 3:
                                case 5:
                                    $inspector = null;
                                    $note = '';
                                    $active = true;
                                    break;
                                case 8:
                                    $inspector = null;
                                    $note = '';
                                    $active = false;
                                    break;
                                case 4:
                                    $inspector = $faker->randomElement([3, 5]);
                                    $note = $faker->sentence;
                                    $active = true;
                                    break;
                                case 6:
                                    $inspector = $faker->randomElement([3, 6]);
                                    $note = $faker->sentence;
                                    $active = true;


                            }

                            Expenseprogress::create([
                                'expense_id' => $expenseid,
                                'inspector_id' => $inspector,
                                'status_id' => $status,
                                'note' => $note,
                                'active' => $active


                            ]);


                            break;
                        case 4:
                            $distance = rand(10, 50);
                            $status = $faker->randomElement([1, 2, 7, 8]);
                            $inspector = null;
                            $note = '';

                            Expenseprogress::create([
                                'expense_id' => $expenseid,
                                'inspector_id' => $inspector,
                                'status_id' => $status,
                                'note' => $note,

                            ]);
                            switch ($status) {
                                case 1:
                                case 2:
                                case 7:
                                    $inspector = null;
                                    $note = '';
                                    $active = true;
                                    break;
                                case 8:
                                    $inspector = null;
                                    $note = '';
                                    $active = false;
                            }
                            Expenseline::create([
                                'description' => 'fiets',
                                'expense_id' => $expenseid,
                                'date' => $date,
                                'type_id' => $typeid,
                                'distance' => $distance,
                                'amount' => $distance * 0.15,
                                'active'=> $active
                                ]);



                            break;
                        case 3:
                            $distance = rand(10, 50);
                            $status = $faker->randomElement([1, 2, 3, 4, 5, 6, 8]);
                            switch ($status) {
                                case 1:
                                case 2:
                                case 3:
                                case 5:
                                $inspector = null;
                                $note = '';
                                $active = true;
                                break;
                                case 8:
                                    $inspector = null;
                                    $note = '';
                                    $active = false;
                                    break;
                                case 4:
                                    $inspector = $faker->randomElement([3, 5]);
                                    $note = $faker->sentence;
                                    $active = true;
                                    break;
                                case 6:
                                    $inspector = $faker->randomElement([3, 6]);
                                    $note = $faker->sentence;
                                    $active = true;


                            }
                            Expenseprogress::create([
                                'expense_id' => $expenseid,
                                'inspector_id' => $inspector,
                                'status_id' => $status,
                                'note' => $note,

                            ]);

                            Expenseline::create([
                                'description' => $faker->randomElement(['klantbezoek', 'ophalen materiaal', 'stageplaats', 'excursie']),
                                'expense_id' => $expenseid,
                                'date' => $date,
                                'type_id' => $typeid,
                                'distance' => $distance,
                                'amount' => $distance * 0.05,
                                'active'=>$active]);


                            break;
                        case 2:
                            $total = rand(400, 800);
                            Expenseline::create([
                                'description' => 'laptop',
                                'expense_id' => $expenseid,
                                'date' => $date,
                                'type_id' => $typeid,
                                'active' => true,
                                'amount' => $total / 4]);
                            Expenseline::create([
                                'description' => 'laptop',
                                'expense_id' => $expenseid,
                                'date' => date_add($date, date_interval_create_from_date_string("1 year")),
                                'type_id' => $typeid,
                                'active' => true,
                                'amount' => $total / 4]);
                            Expenseline::create([
                                'description' => 'laptop',
                                'expense_id' => $expenseid,
                                'date' => date_add($date, date_interval_create_from_date_string("1 year")),
                                'type_id' => $typeid,
                                'active' => true,
                                'amount' => $total / 4]);
                            Expenseline::create([
                                'description' => 'laptop',
                                'expense_id' => $expenseid,
                                'date' => date_add($date, date_interval_create_from_date_string("1 year")),
                                'type_id' => $typeid,
                                'active' => true,
                                'amount' => $total / 4]);
                            $status = $faker->randomElement([1, 2, 3, 4, 5, 6, 8]);
                            switch ($status) {
                                case 1:
                                case 2:
                                case 3:
                                case 5:
                                case 8:
                                    $inspector = null;
                                    $note = '';
                                    break;
                                case 4:
                                    $inspector = $faker->randomElement([3, 5]);
                                    $note = $faker->sentence;
                                    break;
                                case 6:
                                    $inspector = $faker->randomElement([3, 6]);
                                    $note = $faker->sentence;


                            }

                            Expenseprogress::create([
                                'expense_id' => $expenseid,
                                'inspector_id' => $inspector,
                                'status_id' => $status,
                                'note' => $note,

                            ]);


                            break;

                    }

                    break;
                case 2:
                case 3:
                case 4:
                case 5:
                case 6:
                case 7:
                case 8:
                    $typeid = $faker->randomElement([1, 3, 4]);
                    for ($x = 2; $x < $expenselinescounter + 1; $x++) {
                        $date = $faker->dateTimeBetween('-1 months', 'now');
                        if ($typeid == 4) {
                            $distance = rand(10, 50);
                            Expenseline::create([
                                'description' => 'fiets',
                                'expense_id' => $expenseid,
                                'date' => $date,
                                'type_id' => $typeid,
                                'distance' => $distance,
                                'amount' => $distance * 0.15]);
                        } else {
                            $typeid = $faker->randomElement([1, 3]);

                            switch ($typeid) {
                                case 1:
                                    Expenseline::create([
                                        'description' => $faker->randomElement(['bloemen', 'eten', 'cadeau', 'materiaal', 'excursie']),
                                        'expense_id' => $expenseid,
                                        'date' => $date,
                                        'type_id' => $typeid,
                                        'amount' => rand(25, 200)
                                    ]);
                                    break;
                                case 3:
                                    $distance = rand(10, 50);
                                    Expenseline::create([
                                        'description' => $faker->randomElement(['klantbezoek', 'ophalen materiaal', 'stageplaats', 'excursie']),
                                        'expense_id' => $expenseid,
                                        'date' => $date,
                                        'type_id' => $typeid,
                                        'distance' => $distance,
                                        'amount' => $distance * 0.05]);
                                    break;

                            }
                        }

                    }
                    switch ($typeid) {
                        case 2:
                            $status = $faker->randomElement([1, 2, 7, 8]);
                            $inspector = null;
                            $note = '';

                            Expenseprogress::create([
                                'expense_id' => $expenseid,
                                'inspector_id' => $inspector,
                                'status_id' => $status,
                                'note' => $note,

                            ]);
                            break;
                        case 1:
                        case 3:
                            $status = $faker->randomElement([1, 2, 3, 4, 5, 6, 8]);
                            switch ($status) {
                                case 1:
                                case 2:
                                case 3:
                                case 5:
                                case 8:
                                    $inspector = null;
                                    $note = '';
                                    break;
                                case 4:
                                    $inspector = $faker->randomElement([3, 5]);
                                    $note = $faker->sentence;
                                    break;
                                case 6:
                                    $inspector = $faker->randomElement([3, 6]);
                                    $note = $faker->sentence;


                            }

                            Expenseprogress::create([
                                'expense_id' => $expenseid,
                                'inspector_id' => $inspector,
                                'status_id' => $status,
                                'note' => $note,

                            ]);

                    }
            }
        }
    }
}
