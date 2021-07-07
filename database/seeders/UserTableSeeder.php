<?php

namespace Database\Seeders;

use App\Enums\Role;
use App\Enums\UserStatus;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User([
            'name' => 'System Admin',
            'email' => 'admin@dg.com',
            'password' => Hash::make('123456'),
//            'roles' => [Role::ADMIN],
            'status' => UserStatus::ACTIVE
        ]);

        $user->save();
    }
}
