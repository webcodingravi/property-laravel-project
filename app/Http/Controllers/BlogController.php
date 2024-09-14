<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index() {
        return view('Frontend.Blog.blog');
    }


    public function DetailBlog() {
        return view('Frontend.detail_blog.detail');
    }

}
