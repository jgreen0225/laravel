<?php namespace App\Http\Controllers;


class PagesController extends Controller {

    public function about()
        {
            $data = [];
            $data['first']='Douglas';
            $data['last']='Quaid';
            return view('pages.about', $data);
        }
    public function contact(){
        return view('pages.contact');
    }
}