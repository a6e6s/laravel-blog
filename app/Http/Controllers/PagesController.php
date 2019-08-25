<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    //
    public function index()
    {
        $title = "Welcome to laravel";
        // return view('pages.index',compact('title'));
        return view('pages.index')->with('title', $title);
    }
    //
    public function about()
    {
        $title = "About us";
        return view('pages.about')->with('title', $title);
    }
    //
    public function services()
    {
        $title = "Services";
        $data = array(
            'title' => 'Services',
            'services' => ['web Design', 'Programing', 'seo'],
        );
        return view('pages.services')->with($data);
    }

}
