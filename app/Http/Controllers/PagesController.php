<?php namespace App\Http\Controllers;


class PagesController extends Controller {

    public function about()
        {
            $name = 'Jeffery Way';
            return view('pages.about')->with('name', $name);
        }
}