<?php

use Illuminate\Database\Seeder;
use \App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'Audrey';
        $user->email = 'audrey@clovery.com';
        $user->password = bcrypt('audrey123');
        $user->role = 'admin';
        $user->save();

        $user = new User();
        $user->name = 'Danielle';
        $user->email = 'danielle@clovery.com';
        $user->password = bcrypt('danielle123');
        $user->role = 'admin';
        $user->save();

        $user = new User();
        $user->name = 'Angela';
        $user->email = 'angela@clovery.com';
        $user->password = bcrypt('angela123');
        $user->role = 'member';
        $user->save();

        $user = new User();
        $user->name = 'Benedictus';
        $user->email = 'benedictus@clovery.com';
        $user->password = bcrypt('benedictus123');
        $user->role = 'member';
        $user->save();
    }
}
