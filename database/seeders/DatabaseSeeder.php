<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Role::create(['name' => 'Admin']);
        // Role::create(['name' => 'User']);
        $admin = User::create([
            'name' => 'Admin User',
            'email' => 'admin@allianzassetshub.com',
            'password' => Hash::make('investment2022$'),
            'email_verified_at' => now(),
            'referral_token' => 'david123',

        ]);
        $admin->assignRole('Admin');

        $user = User::create([
            'name' => 'Normal User',
            'email' => 'user@allianzassetshub.com',
            'email_verified_at' => now(),
            'password' => Hash::make('investment2022$'),
            'referral_token' => 'avid123',
        ]);
        $user->assignRole('User');
        // $this->call(WalletTypeSeeder::class);

        // $this->call(InvestmentPlanSeeder::class);
    }
}
