<?php

use Illuminate\Database\Seeder;
use App\Users;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Truncating table before adding new records
        Users::truncate();
        Users::create([
            'user_id'=>'100001',
            'password'=>'100001'
        ]);
        Users::create([
            'user_id'=>'100002',
            'password'=>'100002'
        ]);
    }
}
