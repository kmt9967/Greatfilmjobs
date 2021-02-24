<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buy_Req extends Model
{
    use HasFactory;
    protected $table ="scriptolutionrequests";
    public $timestamps = false;

    protected $fillable = [
    'REQUESTID'	,'USERID'	,'scriptolutiondesc',	'scriptolutioncategory'	,'scriptolutiondays'	,'time_added'	,'active'	,'pip'	,'scriptolutionprice'
    ];

     public function users(){
        return $this -> belongsTo('App\Models\User','id');
    }

}
