<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $tasks = [
                'Goto the school',
                'Goto the market',
                'Goto Work'
            ];
            $foo = 'foo';

        //    return view('welcome')->withTasks('tasks')->withFoo('foo');

        return view('welcome', [
            'tasks' => $tasks
        ]);
    }

    public function about() {
        return view('about');
    }

    public function contact() {
        return view('contact');
    }
}
