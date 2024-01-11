<?php

namespace Database\Seeders;

use App\Models\WarehouseStatus;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class WarehouseStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $users_warehouse = [
            [
                'status_name' => 'Active',
                'status' => 1,
            ],
            [
                'status_name' => 'Deactive',
                'status' => 1,
            ],
            [
                'status_name' => 'Hold',
                'status' => 1,
            ],
        ];

        foreach($users_warehouse as $user_warehouse){
            WarehouseStatus::create($user_warehouse);
        }
    }
}
