<?php

namespace Database\Seeders;

use App\Models\UserRole;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $users_role = [
            [
                'user_id' => 1, 
                'role_id' => 1,
                'role_level' => 1,
                'created_by' => 1,
                'last_updatedBy' => 1
            ]
        ];

        foreach($users_role as $user_role){
            UserRole::create($user_role);
        }
    }
}
