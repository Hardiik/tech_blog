<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\post;
use App\replies;
use Illuminate\Pagination\LengthAwarePaginator;
class PagesController extends Controller
{
   
    public $flag=0;
    
    public function home()
    {
        $posts=post::orderBy('created_at','desc')->paginate(3);
        return view ('home',compact('posts'));
    }
    
    
    public function article()
    {
        return view ('articles');
    }
    public function about()
    {
        return view ('about');
    }

    public function MemberArea()
    {
        return view ('auth.login');
    }
    
    
}
