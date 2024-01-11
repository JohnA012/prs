<?php

namespace Database\Seeders;

use App\Models\UserStatusHDR;
use App\Models\UserStatusDTLS;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $users_status = [
            [
                'status_name' => 'Active', 
                'status' => 1
            ],
            [
                'status_name' => 'Deactive', 
                'status' => 1
            ],
            [
                'status_name' => 'Hold', 
                'status' => 1
            ]
        ];

        foreach($users_status as $user_status){
            UserStatusHDR::create($user_status);
        }
    }
}
