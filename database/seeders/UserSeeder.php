<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\UserDetails;
use App\Models\WarehouseStatus;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        

        $users_hdr = [
            [
                'username' =>'admin',
                'password' =>'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'employee_id' =>'G05-001',
                'department_id' => 1,
                'old_password' =>'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'created_by' => 1,
                'last_updatedBy' => 1,
                'user_status' => 1
            ]
        ];

        $users_dtls = [
            [
                'user_id' => 1,
                'first_name' => 'ad',
                'last_name' => 'min',
                'email' => 'admin@gmail.com',
                'contact_no' => '00000000000',
                'gender' => 'male',
                'birth_date' => now()
            ]
        ];
        


        foreach($users_hdr as $user_hdr){
            User::create($user_hdr);
        }

        foreach($users_dtls as $user_dtls){
            UserDetails::create($user_dtls);
        }

        



    }
}
