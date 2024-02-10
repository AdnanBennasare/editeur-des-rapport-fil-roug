<?php 

namespace App\Http\Controllers;

use App\Models\Rapport;
use Illuminate\Http\Request;
use App\Http\Requests\CreateRapportRequest;

class RapportController extends Controller {
    

    public function index()
    {
        $rapports = Rapport::all();
     
        return view('rapports.index', compact('rapports'));

    }
    public function store(CreateRapportRequest $request){

        // dd($request);
        $rapport = new Rapport();
        $rapport->title = $request->rapport_title;
        $rapport->content = $request->rapport_markdown;
        $rapport->owner_id = $request->owner_id; 
        $rapport->save();
        return redirect('rapports');


    }


    public function show($id){

       $rapport = Rapport::findorfail($id);
       $parsed_content = \Illuminate\Support\Str::of($rapport->content)->markdown();
       return view('rapports.show', compact('rapport', 'parsed_content'));

    }

    public function create(){
        // dd('hellow');
        return view('rapports.create');
    }
}