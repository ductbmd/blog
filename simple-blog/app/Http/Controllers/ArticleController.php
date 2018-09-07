<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\ArticleFormRequest;
class ArticleController extends Controller
{
   public function index(){
    	$articles=Article::all();

    	return view('articles/index',compact('articles'));
    	//index trang chu show du lieu
    }
    public function showArticle($id){
    	$article=Article::find($id);
    	return view('articles/show')->with('article',$article);//truyen tham so vao view
    	//xem ro 1 blog
    }

    public function newArticle()
    {
    	return view('articles/new');
    }
    public function store(ArticleFormRequest $request)
    {
    	/*$title=(Input::get('title'));
    	$content=Input::get('content');*/
    	$title=$request->input('title');
    	$content=$request->input('content');
    	//Ham get va ham input co chuc nang nhu nhau, deu lay du lieu tu form
    	Article::create([
    		'tittle'=>$title,
    		'content'=>$content		
    	]);
    	return redirect()->route('articleController');

    }
    public function editArticle($id){
    	$article=Article::find($id);
    	return view('articles/edit')->with('article',$article);
    	
    }
    public function update($id,ArticleFormRequest $request)
    {
    	$article=Article::find($id);
    	$article->update([
    		'tittle'=>$request->get('title'),
    		'content'=>$request->get('content')
    	]);
    	return redirect()->route('articleController');

    }
    public function destroy($id)
    {
    	$article=Article::find($id);
    	$article->delete();
    	return redirect()->route('articleController');

    }

}
