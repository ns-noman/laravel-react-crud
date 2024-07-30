<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company_datails extends Model
{
    use HasFactory;
    protected $table='company_datails';
    protected $primaryKey='id';
    protected $fillable=[
        'companyName',
        'companyEmail',
        'phone',
        'address',
        'logo',
    ];
}
