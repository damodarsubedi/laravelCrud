<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
class CreatesController extends Controller
{
    public function home(){
        $articles = Article::all();
        return view('inc.home',['articles'=> $articles]);
       // print_r($articles);
    }
    public function add(Request $request)
    {
         //return("Add");
         
        //dd($request->all());
         $this->validate($request,[
             'title' => 'required',
             'description' => 'required'

         ]);
        //  $postData = $request->all();
        // Article::create($postData);
          $articles = new Article;
          $articles->title = $request->input('title');
          $articles->description = $request->input('description');
          $articles->save();
         return view('inc.create'); 
    }
    public function update($id){
        $articles = Article::find($id);
        //dd($articles);
        // echo  '<pre>';
        // print_r($articles);
        // echo  '</pre>';
        return view('inc.update',['articles'=> $articles]);  
    }
    public function edit(Request $request,$id){
        //dd($request->all());
        $this->validate($request,[
            'title' => 'required',
            'description' => 'required',

        ]);
        $articles = Article::findOrFail($id);
        $data = array(
            'title' => $request->input('title'),
            'description' => $request->input('description')
        );
        // $article = new Article;
        // $articles->title = $request->input('title');
        // $articles->description = $request->input('description');
        Article::where('id',$id)
        ->update($data);
        return redirect()->back();
    }
    public function read($id){
        $articles = Article::findOrFail($id);
        return view('inc.read',['articles'=> $articles]);

    }
    public function delete($id)
    {
        Article::findOrFail($id);
        Article::where('id',$id)
        ->delete();
        return redirect()->back();
    }
}
