<?php

namespace Database\Seeders;


use App\Models\User;

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
        User::factory()->admin()->withEmail('PORSH@123.COM')->create();

//        $adminRole = Role::admin()->first();
//
//        User::firstOrCreate([
//            'name'=> 'Stas',
//            'Surname'=>'admin',
//            'birthdate'=>'1998-08-29',
//            'email'=>'admin@admin.com',
//            'phone'=> '+099999999',
//            'password'=> Hash::make("123123"),
//            'role_id'=> $adminRole->id
//
//        ]);
//
        User::factory(10)->create();



    }
}
