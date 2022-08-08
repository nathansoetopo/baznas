<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KabarModel extends Model
{
    use HasFactory;
    protected $table = 'kabar';
    protected $guarded = ['id'];

    public function category(){
        return $this->belongsTo(CategoryData::class, 'kategori')->where('jenis', 'kabar');
    }
}
