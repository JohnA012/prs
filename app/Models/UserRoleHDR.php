<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserRoleHDR extends Model
{
    use HasFactory;
    protected $table = "tbl_mtce_pr_role_hdr";
    
    protected $fillable = [
        'role',
        'role_status',
        'created_by',
        'last_updatedBy'
    ];
}
