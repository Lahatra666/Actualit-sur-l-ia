<?php

namespace App\Models;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;
    protected $primaryKey='idcategorie';
    public $timestamps = false;

    protected $fillable = [
        'nomcategorie'
    ];
    public function articles(){
        return $this->hasMany(Article::class,'idcategorie');
    }
}
