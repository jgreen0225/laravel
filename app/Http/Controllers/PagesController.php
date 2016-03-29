<?php namespace App\Http\Controllers;


class PagesController extends Controller {

    public function about()
        {
            $people = [];
            //$people = []
            //    'Taylor Otwell', 'Daylee Rees', 'Eric Barnes'
            //];
            return view('pages.about', compact('people'));
        }
    public function contact(){
        return view('pages.contact');
    }
    public function index() {
        return view('welcome');
    }
}