<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //    $fillable =['title','slug', 'excerpt', 'body',], //agar bisa diisi langsung banyak lewat php artisan tinker menggunakan array[]
    protected $guarded = ['id'];
    public function category(){
        
        return $this->belongsTo(Category::class); 
    }

}