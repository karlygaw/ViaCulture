<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'usenkarlygash@gmail.com',
            'password' => Hash::make('1q2w3e4r5t'),
            'is_admin' => true,  
        ]);

        $this->command->info('Admin user has been created');
    }
}
