<?php namespace App\Http\Controllers;

use...

class PagesController extends Controller {

    public function about()
        {
            return view('pages.about');
        }
}