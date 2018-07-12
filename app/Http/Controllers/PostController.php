<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Post;
use App\Blog;
class PostController extends Controller
{
    public function addPost(Request $req)
    {

        $p=new Post();
        $p->post_name=$req->pname;
        $p->post_description=$req->description;
        $p->save();

        $data = DB::select('select * from posts');
        return view('post_success',compact('data'));
    }
}
