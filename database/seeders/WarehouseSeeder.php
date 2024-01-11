<?php

namespace Database\Seeders;

use App\Models\Warehouse;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class WarehouseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        
        $warehouses = [
            [
                'name' => 'Glacier - FTI', 
                'company_name' => 'Glacier FTI Refrigerated Services Corp', 
                'code' => '01', 
                'address' => '36 DBP Ave, Taguig, 1630 Metro Manila', 
                'status' => 1, 
                'created_by' => 1, 
            ],
            [
                'name' => 'Glacier - North', 
                'company_name' => 'Glacier FTI Refrigerated Services Corp', 
                'code' => '02', 
                'address' => '#200 Pitimini, cor Roosevelt Ave, Quezon City, 1105 Metro Manila', 
                'status' => 1, 
                'created_by' => 1, 
            ],
            [
                'name' => 'Glacier - Panay', 
                'company_name' => 'Glacier Panay Refrigeration Services Corporation', 
                'code' => '03', 
                'address' => 'Sacred Heart of Jesus Ave, Roxas City, Capiz', 
                'status' => 1, 
                'created_by' => 1,
            ],
            [
                'name' => 'Glacier - Liberty', 
                'company_name' => 'Glacier Liberty Refrigeration Services Corporation', 
                'code' => '04', 
                'address' => '#322 Peñaranda St, Legazpi City, 4500 Albay', 
                'status' => 1, 
                'created_by' => 1,
            ],
            [
                'name' => 'Glacier - South', 
                'company_name' => 'Glacier South Refrigeration Services Corporation', 
                'code' => '05', 
                'address' => 'Amvel Business Park, Ninoy Aquino Ave, Parañaque, 1700 Metro Manila', 
                'status' => 1, 
                'created_by' => 1,
            ],
            [
                'name' => 'Glacier - Samar', 
                'company_name' => 'Glacier Samar Refrigeration Services Corporation', 
                'code' => '06', 
                'address' => 'Calbayog City, Samar', 
                'status' => 1, 
                'created_by' => 1,
            ],
            [
                'name' => 'Glacier - Pulilan', 
                'company_name' => 'Glacier Pulilan Refrigeration Services Corporation', 
                'code' => '07', 
                'address' => 'National Road, Dampol 2nd B, Pulilan, Bulacan', 
                'status' => 1, 
                'created_by' => 1,
            ],
            [
                'name' => 'Glacier - Balagtas', 
                'company_name' => 'Glacier Balagtas Refrigeration Services Corporation', 
                'code' => '08', 
                'address' => 'Bustos, Bulacan', 
                'status' => 1, 
                'created_by' => 1,
            ],
            [
                'name' => 'Glacier - Paranaque', 
                'company_name' => 'Glacier Parañaque Refrigeration Services Corporation', 
                'code' => '12', 
                'address' => 'Amvel Business Park, Ninoy Aquino Ave, Parañaque, 1700 Metro Manila', 
                'status' => 1, 
                'created_by' => 1,
            ],
            [
                'name' => 'GMAC - CDO', 
                'company_name' => 'GMAC Logitech Refrigeration Corporation', 
                'code' => '14', 
                'address' => 'National Highway Baloy, Brgy. Tablon', 
                'status' => 1, 
                'created_by' => 1,
            ],
        ];


        foreach ($warehouses as $warehouse) {
            Warehouse::create($warehouse);
        }
    }
}
