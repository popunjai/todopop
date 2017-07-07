<?php

use Illuminate\Database\Seeder;

class UsersTypeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user_Type = new \App\UserType();
        $user_Type->name ="admin";
        $user_Type->save();

        $user_type = new \App\UserType();
        $user_type ->name = "User";
        $user_type->save();
    }
}
