<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Role;
use Illuminate\Support\Facades\DB;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=> 'Admin', 
            'email'=> 'admin@gmail.com',
            'password'=> Hash::make('secret')
        ]);

        Role::create([
            'name'      =>   'Admin',
            'slug'      =>   'admin',
            'special'   =>    'all-access'
        ]);

        DB::table('role_user')->insert([
            'role_id' => 1,
            'user_id' => 1
        ]);
    }
}
