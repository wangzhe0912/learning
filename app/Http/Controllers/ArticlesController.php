<?php namespace App\Http\Controllers;
 

use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;
 
//use Illuminate\Http\Request;
//use Request;
use App\Http\Requests\ArticleRequest;
//use Illuminate\Http\Request;


use Carbon\Carbon;
class ArticlesController extends Controller {
 
    public function index(){
        $articles = Article::latest('published_at')->get();
        return view('articles.index', compact('articles'));
    }
	public function show($id){
        $article = Article::findOrFail($id);
        return view('articles.show', compact('article'));
    }
	public function edit($id){
        $article = Article::findOrFail($id);
        return view('articles.edit', compact('article'));
    }
	public function create(){
        return view('articles.create');
    }
	public function store(ArticleRequest $request){
        Article::create($request->all());
        return redirect('articles');
    }
	public function update($id, ArticleRequest $request){
        $article = Article::findOrFail($id);
        $article->update($request->all());
        return redirect('articles');
    }
 
}
