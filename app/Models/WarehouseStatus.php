<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WarehouseStatus extends Model
{
    use HasFactory;
    protected $table = "tbl_mtce_users_warehouses_statuses";
    
    protected $fillable = [
        'status_name',
        'status'
    ];
}
