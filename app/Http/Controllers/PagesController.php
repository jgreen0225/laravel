<?php namespace App\Http\Controllers;


class PagesController extends Controller {

    public function about()
        {
            $people = [
                'Taylor Otwell', 'Daylee Rees', 'Eric Barnes'
            ];
        }
    public function contact(){
        return view('pages.contact');
    }
}