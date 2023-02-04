<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categories';
    protected $fillable = [
        'name',
        'image',
        'description',
        'status',
    ];
    public function products()
    {
        return $this->hasMany(Product::class);
    }
    public function photoLink(){
        $image = asset('uploads/avatar.png');
        if($this->image != ''){
            $image = asset('uploads/categories/'.$this->id .'/'.$this->image);
        }
        return $image;
    }
}
