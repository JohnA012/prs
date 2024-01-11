<?php

namespace Database\Seeders;

use App\Models\UserRoleHDR;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserRoleHDRSeeder extends Seeder
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
                'role' => 'Super Admin', 
                'role_status' => 1,
                'created_by' => 1,
                'last_updatedBy' => 1
            ]
        ];

        foreach($users_role as $user_role){
            UserRoleHDR::create($user_role);
        }
    }
}
