<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use App\Models\Comment;
class PostController extends Controller
{
    public function getAllPost(){
        $posts =  Post::whereBetween('id',[33,44])->orderBy('id','DESC')->get();
        return view('posts',compact('posts'));
    }
    public function addPost(){        
        return view('add-post');
    }
    public function addPostSubmite(Request $request){
       Post::insert([
            'title' => $request->title,
            'body' => $request->body
        ]);
        return back()->with('post_created','Post Has Been Created Successfully!');
    }
    public function getPostById($id){        
        $post = Post::where('id',$id)->first();
        return view('single-post',compact('post'));
    }
    public function deletePost($id){        
      Post::where('id',$id)->delete();
       return back()->with('post_delete','Post Has Been Delete Successfully!');
    }
    public function editPost($id){ 
        $post = Post::where('id',$id)->first();     
        return view('edit-post',compact('post'));
    }
    public function updeatePost(Request $request){        
       Post::where('id',$request->id)->update([
            'title' => $request->title,
            'body' => $request->body
        ]);
        return back()->with('post_update','Post Has Been Update Successfully!');
     }
     public function  inerrJoinCaluse(){
        $request = table('users')
        ->join('posts','users.id','=','posts.user_id')
        ->select('users.name','posts.title','posts.body')
        ->get();
        return $request;
     }
     public function  rightJoinCaluse(){
        $reuslt  = table('users')
        ->rightjoin('posts','users.id','=','posts.user_id') 
        ->get();
        return $reuslt;
     }
     public function  leftJoinCaluse(){
        $reuslt  = table('users')
        ->leftjoin('posts','users.id','=','posts.user_id') 
        ->get();
        return $reuslt;
     }
     public function  getAllPostsModel(){
        $posts  =  Post::all();
        return $posts;
     }
     public function adddPost(){
        $post=new Post();
        $post->title='Mohammed';
        $post->body='frist mohmmed';
        $post->save();
        return 'Post has been cerated';

     }
     public function addComment($id){
         $post=Post::find($id);
         $comment=new Comment();
         $comment->comment='2 comment';
         $post->comments()->save($comment);
         return 'Commdent has been posted';
    }
    public  function getCommentByPost($id)
    {
        $comment=Post::find($id)->comments;
        return $comment;
    }
}
