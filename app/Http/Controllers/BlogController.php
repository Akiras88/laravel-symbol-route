<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index() {

        $name = 'classe 12';
        $students = 25;

        return view('blog.index', compact('name', 'students'));
    }
}
