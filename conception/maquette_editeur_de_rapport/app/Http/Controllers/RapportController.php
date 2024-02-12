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
    public function store(CreateRapportRequest $request) {
        $rapport = new Rapport();
        $rapport->title = $request->rapport_title;
        
        // Check if rapport_markdown is null, if so, assign an empty string to content
        $rapport->content = $request->rapport_markdown ?? '';
    
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


public function edit($id){

    $rapport = Rapport::findorfail($id);
    return view('rapports.edit', compact('rapport'));

}


// public function update(CreateRapportRequest $request){

//     // dd($request);
//     $rapport = new Rapport();
//     $rapport->title = $request->rapport_title;
//     $rapport->content = $request->rapport_markdown;
//     $rapport->owner_id = $request->owner_id; 
//     $rapport->save();
//     return redirect('rapports');


// }



// public function update(Request $request, $id)
// {

//     $task = Task::find($id);
//     if (!$task) {
//         return redirect()->route('tasks.index')->with('error', 'tâche introuvable');
//     }
//     // dd($request);

//     $request->validate([
//         'title' => 'required|unique:tasks,title,' . $id,
//         'description' => 'nullable|string|max:1000',
//         'project_id' => 'required|integer',
       
//     ]);

//     $input = $request->all();
//     $task->update($input);
//     return redirect()->route('tasks.index')->with('success', 'tâche mise à jour avec succès');
// }

}