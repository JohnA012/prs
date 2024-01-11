<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetails extends Model
{
    use HasFactory;
    protected $table = "tbl_mtce_user_dtls";
    
    protected $fillable = [
        'user_id',
        'first_name',
        'last_name',
        'email',
        'contact_no',
        'gender',
        'birth_date'
    ];

}
