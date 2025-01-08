<?php
namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'Admin',
                'email'          => 'admin@admin.com',
                'password'       => Hash::make('password'),
                'remember_token' => null,
                'created_at'     => '2019-09-24 19:16:02',
                'updated_at'     => '2019-09-24 19:16:02',
            ],
        ];

        User::insert($users);
    }
}
