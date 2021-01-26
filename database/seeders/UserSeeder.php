<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Coder Khayrul',
            'email' => 'coder@mail.com',
            'password' => bcrypt('Password'),
        ]);
        $user->save();

    }
}
