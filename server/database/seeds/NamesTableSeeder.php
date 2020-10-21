<?php

use Illuminate\Database\Seeder;
use App\Names;

class NamesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Names::truncate();
        Names::create([
            'user_id' => '100001',
            'first_name' => 'Harry' ,
            'last_name' => 'Bajwa',
            'start_date' => '2020-10-17',
            'end_date' => '2021-10-16',
        ]);
        Names::create([
            'user_id' => '100002',
            'first_name' => 'Preeti' ,
            'last_name' => 'Atwal',
            'start_date' => '2020-10-17',
            'end_date' => '2021-10-16',
        ]);

    }
}
