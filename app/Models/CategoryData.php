<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryData extends Model
{
    use HasFactory;
    protected $table = 'category_data';
    protected $guarded = ['id'];

    public function kabar(){
        return $this->hasMany(KabarModel::class, 'kategori', 'id');
    }
}
