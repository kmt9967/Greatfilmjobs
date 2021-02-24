<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;
    protected $table="offerscriptolution";
    public $timestamps = false;
    protected $fillable = [
        'SCRIPTOLUTIONOFID',
        'REQUESTID',
        'USERID',
        'scriptolutionmsg',
        'PID'
        ];
    

}
