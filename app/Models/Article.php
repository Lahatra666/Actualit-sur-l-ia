<?php

namespace App\Models;

use App\Models\Categorie;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $primaryKey='idarticle';

    public $timestamps = false;


    protected $fillable = [
        'idcategorie',
        'titre',
        'image',
        'description'
    ];
    public function categorie(){
        return $this->belongsTo(Categorie::class);
    }
}
