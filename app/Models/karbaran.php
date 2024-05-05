<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class karbaran extends Model
{
    use HasFactory;
    protected $table='karbarans';
    protected $fillable = [
        'fullname',
        'email',
        'phonenumber',
        'nationalcode',
        'fathername',

    ];
}
