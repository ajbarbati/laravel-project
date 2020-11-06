<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        $title = 'Welcome to Laravel';
        //return view('pages.index', compact('title'));
        return view('pages.index')->with('title', $title);
    }

    public function about() {
        $data = array(
            'title' => 'About Page',
            'services' => ['Web Design', 'Development', 'Math']
        );
        return view('pages.about')->with($data);
    }
}
