<?php

use Illuminate\Database\Seeder;
use App\User;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'John Alvaro ';
        $user->email = 'jhon54plex@gmail.com';
        $user->password = bcrypt('qwe123');
        $user->emisora_id= 1;
        $user->save();
        
        $user = new User();
        $user->name = 'Javier cerra ';
        $user->email = 'web@minutodedios.fm';
        $user->password = bcrypt('qwe123');
        $user->emisora_id= 2;
        $user->save();

        $user = new User();
        $user->name = 'John Hernández ';
        $user->email = 'desarrollo@minutodedios.tv';
        $user->password = bcrypt('12345');
        $user->emisora_id= 1;
        $user->save();
    }
}
