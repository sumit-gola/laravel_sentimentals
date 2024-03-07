<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'parent_id',
        'thumbnail',
        
    ];

    public function childrenRecursive(){
        return $this->hasMany(Categories::class,'parent_id')->with('childrenRecursive');
    }
}
