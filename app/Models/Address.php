<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Address extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $table = 'address';

    protected $fillable = [
        'first_name',
        'last_name',
        'contact_number',
        'address1',
        'address2',
        'address3',
        'province',
        'city',
        'country',
        'zip_code'
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];
}
