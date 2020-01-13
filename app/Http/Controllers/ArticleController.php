<?php

namespace App\Http\Controllers;
use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    
    // get all the request for all the article
    public function index(){
        return Article::all();
    }

    // getting single post for the article
    public function show($id){
        return Article::find($id);
    }

    // store all POST data
    public function store(Request $request){
        // we take the request object as a parameter
        $fetched_data = $request->all();
        return Article::create($fetched_data);
    }

    // update the request
    // take the id and then take the updated data
    public function update(Request $request ,$id){
        // take the article
        $article = Article::findOrFail($id);
        // now update the article
        $article->update($request->all());
        return $article;
    }

    // delete the article
    public function delete(Request $request, $id){
        // take the article
        $article = Article::findOrFail($id);
        $article->delete();
        return 204;
    }

}
