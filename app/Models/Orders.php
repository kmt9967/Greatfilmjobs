<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;
    protected $table="orders";
    protected $fillable = [
    'OID',
    'USERID',
    'PID',
    'time_added',
    'status',
    'stime',
    'price',
    'cltime',
    'IID',
    'late',
    'scriptolution_proc_fees2',
    'scriptolution_totalwfees2'
    ];


}
