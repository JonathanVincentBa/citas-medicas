<?php

use Illuminate\Database\Seeder;

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
        'name' => 'admin',
        'email' => 'admin@admin.com',
        'email_verified_at' => now(),
        'password' => bcrypt('password'),
        'dni'=> '1715881056',
        'address' => 'Pifo',
        'phone' => '0995789977',
        'role' =>'admin'
        ]);
        factory(User::class, 50)->create();
    }
}
