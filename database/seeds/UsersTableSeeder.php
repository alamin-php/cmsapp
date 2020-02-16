<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
            'name' => 'Admin',
            'email' => 'admin@app.com',
            'password' => Hash::make('rootadmin'),
            'type' => 'admin',
        ]);
        DB::table('users')->insert([
            'name' => 'Author',
            'email' => 'author@app.com',
            'password' => Hash::make('rootauthor'),
            'type' => 'author',
        ]);
        DB::table('users')->insert([
            'name' => 'User',
            'email' => 'user@app.com',
            'password' => Hash::make('rotuser'),
            'type' => 'user',
        ]);
    }
}
