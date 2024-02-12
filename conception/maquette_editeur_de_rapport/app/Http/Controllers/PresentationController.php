<?php 

namespace App\Http\Controllers;

class PresentationController extends Controller {

    

    public function index(){
        return view('presentations.index');
    }
    public function store(){
    }


    public function create(){
        // dd('hellow');
        return view('presentations.create');
    }


    
    

}