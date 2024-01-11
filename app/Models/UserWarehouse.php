<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserWarehouse extends Model
{
    use HasFactory;
    protected $table = "tbl_mtce_users_warehouses";

    protected $fillable = [
        'user_id',
        'warehouse_id',
        'status'
    ];
}
