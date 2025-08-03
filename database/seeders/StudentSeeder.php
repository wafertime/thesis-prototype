<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class StudentSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'id_number'=> '123',
            'name' => 'John Doe',
            'email' => 'jd@example.com',
            'password' => Hash::make('student123'), 
            'role' => 'student',
        ]);
    }
}
