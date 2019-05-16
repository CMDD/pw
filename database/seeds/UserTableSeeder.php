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
        $user->name = 'Admin ';
        $user->email = 'admin@gmail.com';
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


         $user = new User();
        $user->name = 'Caro Carreño';
        $user->email = 'astrid.Caro@minutodedios.fm';
        $user->password = bcrypt('admin123');
        $user->emisora_id= 1;
        $user->save();

        $user = new User();
        $user->name = 'javier Riveros';
        $user->email = 'riverosjavieres@gmail.com';
        $user->password = bcrypt('admin123');
        $user->emisora_id= 1;
        $user->save();

        $user = new User();
        $user->name = 'Fredy Cubillos';
        $user->email = 'fredy.Cubillos@minutodedios.fm';
        $user->password = bcrypt('admin123');
        $user->emisora_id= 1;
        $user->save();

        $user = new User();
        $user->name = 'Yudith Diaz';
        $user->email = 'fernanda.Diaz@minutodedios.fm';
        $user->password = bcrypt('admin123');
        $user->emisora_id= 1;
        $user->save();

        $user = new User();
        $user->name = 'Donald Puerto';
        $user->email = 'productor.bogota@minutodedios.fm';
        $user->password = bcrypt('admin123');
        $user->emisora_id= 1;
        $user->save();

        $user = new User();
        $user->name = 'Camilo Torres';
        $user->email = 'camilo.torres@zeroazul.com';
        $user->password = bcrypt('admin123');
        $user->emisora_id= 1;
        $user->save();

      

         $user = new User();
        $user->name = 'Carisma Verde';
        $user->email = 'carismaverde@yahoo.com';
        $user->password = bcrypt('admin123');
        $user->emisora_id= 1;
        $user->save();

        $user = new User();
        $user->name = 'Santiago lopez';
        $user->email = 'slopez@minutodedios.com.co';
        $user->password = bcrypt('admin123');
        $user->emisora_id= 1;
        $user->save();
       
    }
}
