<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Categories;

class Produts extends Model
{
    use HasFactory;
    protected $fillable=['title','slug','summary','description','gallery','category_id','visibility','price','brand_id','discount','status','photo','size','stock','is_featured','condition'];

    public function category(){
        return $this->belongsTo(Categories::class,'cat_id');
    }
}

