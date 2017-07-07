<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new \App\User();
        $user->name = "Runchan Unjai";
        $user->user_type_id=1;
        $user->username = "admin";
        $user->email = "pop@hotmail.com";
        $user->password = bcrypt("1234");
        $user->save();
    }
}
