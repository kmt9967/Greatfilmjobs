<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    use HasFactory;

    protected $table= "posts";
    public $timestamps = false;
    protected $fillable = [
        'USERID',
        'gtitle',
        'price',
        'category',
        'gdesc',
        'ginst',
        'gtags',
        'days',
        'iurl',
        'ifile',
        'p1',
        'p2',
        'p3',
        'scriptolution_add_multiple',
        'youtube',
        'scriptolutionship1',
        'scriptolutionship1to',
        'scriptolutionship2',
        'price2',
        'price3',
        'ctp2',
        'ctp3',
        'active',
        'last_viewed',
        'pip',
        'scriptolutioncity',
        'scriptolutionstate',
        'scriptolutioncountry',
        'scriptolutionjoblocation',
        'short'

    ];

    public function users(){
        return $this -> belongsTo('App\Models\User','id');
    }
}
