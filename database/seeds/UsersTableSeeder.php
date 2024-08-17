<?php

use App\User;
use Illuminate\Database\Seeder;
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
        $user = User::where('email', 'hany.2001@gmail')->first();

        if (!$user) {
          User::create([
            'role' => 'admin',
            'name' => 'hany',
            'email' => 'hany.2001@gmail',
            'password' => Hash::make('hany123')
          ]);
        }
    }
}