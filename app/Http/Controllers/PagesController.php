<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome to the practice blog for laravel';
        //return view('pages.index',compact('title'));
        return view('pages.index')->with('title',$title);
    }

    public function about(){
        $pageTitle ='About Us!';
        return view('pages.about')->with('pageTitle',$pageTitle);
    }

    public function services(){
        $data = array(
            'pageTitle' => 'Services',
            'services' => ['Web-Design','Web Developing', 'Programming', 'SEO'],
            'TeamMember' => ['Rabbee', 'Tanveer', 'Adiba', 'Sharif']
        );
        return view('pages.services')->with($data);
    }
}
