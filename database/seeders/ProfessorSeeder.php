<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class ProfessorSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'id_number'=> '1234',
            'name' => 'Professor Hong',
            'email' => 'professor@example.com',
            'password' => Hash::make('professor123'), 
            'role' => 'professor',
        ]);
    }
}
