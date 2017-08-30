<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\http\Requests;
use App\Category;
use App\post;
use App\replies;
use App\UserModel;
use App\Http\Requests\PostRequest;
use App\Http\Requests\createReaplyRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class ForumController extends Controller
{
    function __construct()
    {
        $this->middleware('auth',['except'=>['viewpost']]);
            
    }

    public function Question()
    {
        $categories=Category::all();
        return view ('Question',compact('categories'));
    }

    public function PostQuestion(PostRequest $request)
    {
         $post=new post();
         $post->user_id=Auth::user()->id;
         $post->category_id=$request['category_id'];
         $post->title=$request['title'];
         $post->body=$request['body'];
         $post->save();
         notify()->flash('Question posted successfully ','success',['timer'=>3000]);
         return redirect('/');
    }

    public function viewpost($slug)
    {
          try
          {
               $post=post::Where('slug','=',$slug)->first();
               return view ('ViewP',compact('post'));       
          }
          catch(ModelNotFoundException $ex)
          {
              return redirect('/');
          }
        
    }

    public function SaveReply(createReaplyRequest $request)
    {
           $post=post::where('slug','=',$request['slug'])->first();
           if ($post)
           {
                     $reply=new replies;
                     $reply->post_id=$post->id;
                     $reply->user_id=Auth::user()->id;
                     $reply->body=$request['body'];
                     $reply->save();
                     notify()->flash('Answer submited successfully ','success',['timer'=>2000]);
                     return redirect()->back();
           }
           else
           {
               return redirect('/');
           }
    }
   
    public function DeleteQuestion(Request $request)
    {
        try
        {
                $post=post::findOrFail($request['post_id']);
                if(Auth::user()->id == $post->user_id)
                {
                    $post->delete();
                    notify()->flash('Question removed successfully ','success',['timer'=>2000]);
                    
                }
                return redirect()->back();
        }
        catch(ModelNotFoundException $ex)
        {
            return redirect('/');
        }
     
    }

    public function EditQuestion(Request $request)
    {
        try
        {
                $post=post::findOrFail($request['post_id']);
                
                if(Auth::user()->id == $post->user_id)
                {
                    $categories=Category::all();
                    return view ('editquestion',compact('post','categories')); 
                }
                return redirect()->back();
        }
        catch(ModelNotFoundException $ex)
        {
            return redirect('/');
        }

    }

    public function SaveEditQuestion(PostRequest $request)
    {
        try
        {
                $post=post::findOrFail($request['post_id']);
                if(Auth::user()->id == $post->user_id)
                {
                    $post->category_id=$request['category_id'];
                    $post->title=$request['title'];
                    $post->body=$request['body'];
                    $post->save();
                    notify()->flash('Question updated successfully ','success',['timer'=>3000]);
                 }
                return redirect('/');
        }
        catch(ModelNotFoundException $ex)
        {
            return redirect('/');
        }

    }






    public function DeleteReply(Request $request)
    {
        try
        {
                $reply=replies::findOrFail($request['reply_id']);
                if(Auth::user()->id == $reply->user_id)
                {
                    $reply->delete();
                    notify()->flash('Answer removed successfully ','success',['timer'=>2000]);
                    
                }
                return redirect()->back();
        }
        catch(ModelNotFoundException $ex)
        {
            return redirect('/');
        }
     
    }

}
