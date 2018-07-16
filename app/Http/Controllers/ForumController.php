<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Post;
use App\Http\Requests\CreatePostRequest;
use Illuminate\Support\Facades\Auth;

class ForumController extends Controller
{
	function __construct(){
		$this->middleware('auth', ['except' =>['viewPost']]);
	}
      public function getPost(){
      	$categories = Category::all();
    	return view('pages.question', compact('categories'));
    }

    public function postQuestion(CreatePostRequest $request){
    	$post = new Post();

        $post->user_id = Auth::user()->id;
    	$post->category_id = $request['category'];
    	$post->title = $request['title'];
    	$post->body = $request['body'];

    	$post->save();

    	return redirect()->intended('/home');
    }

    public function viewPost($slug){
       return view('pages.reply');
    }

}
