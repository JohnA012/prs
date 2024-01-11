<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserStatusHDR extends Model
{
    use HasFactory;
    protected $table = "tbl_mtce_user_hdr_statuses";
    
    protected $fillable = [
        'status_name',
        'status'
    ];
}
