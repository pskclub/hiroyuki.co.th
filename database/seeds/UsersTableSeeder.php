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
        DB::table('users')->insert([
            'fullname' => 'passakon puttasuwan',
            'email' => 'passakon_p@hotmail.com',
            'password' => bcrypt('12345678'),
            'type' => 'ADMIN',
        ]);
    }
}
