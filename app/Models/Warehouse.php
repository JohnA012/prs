<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warehouse extends Model
{
    use HasFactory;
    protected $table = "tbl_warehouse";
    
    protected $fillable = [
        'name',
        'company_name',
        'code',
        'address',
        'status',
        'image_path',
        'created_by'
    ];
}
