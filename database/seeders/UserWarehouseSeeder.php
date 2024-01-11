<?php

namespace Database\Seeders;

use App\Models\UserWarehouse;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserWarehouseSeeder extends Seeder
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
                'user_id' => 1, 
                'warehouse_id' => 4,
                'status' => 1
            ]
        ];

        foreach($users_warehouse as $user_warehouse){
            UserWarehouse::create($user_warehouse);
        }
    }
}
