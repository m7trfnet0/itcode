<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ClientController extends Controller
{
    public function getAllPost(){
        $respones = Http::get('http://jsonplaceholder.typicode.com/posts');
        return $respones->json();
    }
    public function addPost(){
        $respones =Http::post('http://jsonplaceholder.typicode.com/posts',[
           'userId' =>1,
           'title'=>'New Post',
           'body'=>'New Post Description'
        ]);
        return $respones->json();
    }
    public function updatePost(){
        $respones =Http::put('http://jsonplaceholder.typicode.com/posts/1',[
            'title'=>'Update Post',
            'body'=>'Update Post Description'
        ]);
        return $respones->json();
    }
    public function deletePost($id){
        $respones =Http::delete('http://jsonplaceholder.typicode.com/posts/'.$id);
        return $respones->json();
    }

}
