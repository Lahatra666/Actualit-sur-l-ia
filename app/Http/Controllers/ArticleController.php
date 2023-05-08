<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Categorie;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;


class ArticleController extends Controller
{
    public function formajoutarticle(){
        $categories = Categorie::all();
        return view('backoffice.formajoutarticle', [
            'categories'=>$categories
        ]);
    }
    public function detail($idarticle){
        $articles = DB::table('articles as a')
        ->join('categories as c','c.idcategorie','=','a.idcategorie')
        ->select('a.idarticle','a.idcategorie','a.titre','a.image','a.description','c.idcategorie','c.nomcategorie')
        ->where('a.idarticle','=', $idarticle)
        ->get();
        return view('detailarticle', [
            'articles'=>$articles
        ]);
    }

    public function storearticle(Request $request){
        $filename = time() . "." .$request->image->extension();
        $path = $request->file('image')->storeAs(
             'articles',
             $filename,
             'public'
         );
        Article::create([
         'titre'=>$request->titre,
         'idcategorie'=>$request->idcategorie,
         'description'=>$request->description,
         'image'=>$path
     ]);
     return redirect()->route('formajoutarticle');
    }
}
