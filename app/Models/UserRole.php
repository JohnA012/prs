<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    use HasFactory;
    protected $table = "tbl_mtce_pr_role";
    
    protected $fillable = [
        'user_id',
        'role_id',
        'role_level',
        'created_by',
        'last_updatedBy'
    ];
}
