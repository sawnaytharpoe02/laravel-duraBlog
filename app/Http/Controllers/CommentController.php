<?php

namespace App\Http\Controllers;

use App\Mail\SubscriberMail;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use function GuzzleHttp\Promise\each;

class CommentController extends Controller
{
    public function store(Blog $blog){

       
        request()->validate([
            'body' => ['required','min:4']
        ],[
            'body.min' => 'your comment must be at least 4 characters.'
        ]);

        $blog->comments()->create([
            'user_id' => auth()->id(),
            'body' => request('body')
        ]);

        $subscribers = $blog->subscribers->filter(fn ($subscriber) => $subscriber->id != auth()->id() );
        $subscribers->each(function ($subscriber) use ($blog) {
            Mail::to($subscriber->email)->queue(new SubscriberMail($blog));
        });

        return redirect('/blogs/'.$blog->slug);
    }
}
