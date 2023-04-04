<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\User;
use Illuminate\Validation\Rule;

class BlogController extends Controller
{


    public function overview(){
        return view('home',[
            'blogs' => Blog::latest()->get()
        ]);
    }


    public function index() {
        return view('blogs.index',[
            'blogs' => Blog::latest()
            ->filter(request(['search', 'category', 'username']))
            ->paginate(6) //eager load, lazy load
            ->withQueryString()
        ]);
    }

    public function show(Blog $blog){ //Route model binding Blog::findOrFail(slug)
        return view('blogs.show', [
            'blog' => $blog,
            'randomBlogs' => Blog::inRandomOrder()->take(3)->get()
        ]);
    }

    public function subscriptionHandler(Blog $blog){
        if(User::find(auth()->id())->isSubscribed($blog)){
            $blog->unsubscribed();
        }else{
            $blog->subscribed();
        }

        return back();
    }

   
}
