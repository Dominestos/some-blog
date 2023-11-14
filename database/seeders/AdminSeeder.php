<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::firstOrNew([
            'name' => 'Admin',
            'role' => 0,
            'email' => 'admin@example.com',
        ]);

        if (!$user->exists) {
            $user->password = Hash::make('admin');
            $user->save();
        }
    }


}
