<?php namespace App\Http\Controllers;

class WelcomeController extends Controller {
    public function index()
    {
        return view('welcome');
    }
    public function contact()
    {
        return view('pages.contact');
    }

}
/**
 * Created by PhpStorm.
 * User: jonathan.green
 * Date: 3/28/2016
 * Time: 12:24 PM
 */