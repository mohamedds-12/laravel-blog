<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Post;


class PagesController extends Controller
{
    public function index() {
        
        $posts = Post::paginate(3)->all();
        return view('index', compact('posts'));
    }
    
    public function about() {
        return view('about');
    }

    public function login() {
        return view('admin.login');
    }

    public function register() {
        return view('admin.register');
    }
}
