<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use APP\Models\Posts;

class Postcontroller extends Controller
{
    public function index(Post $post)
    {
        return $post->get();
    }
}
