<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banking extends Model
{
    use HasFactory;

    protected $table = 'bankings';
    protected $fillable = [
        'username',
        'banking_name',
        'account_type',
        'branch',
        'account_number',
        'status',
    ];

}
