<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Note;


class NoteController extends Controller
{
   
   
   /* 
    Retrieve all the notes based on the presence of the search query
    */
    public function index(Request $request)
    {    
        
        $title = $request->input('title');
        
        $notes = Note::when($title, fn($query, $title)=>$query->title($title))
        ->orderBy('created_at', 'desc')
        ->paginate(20);
        
    
        return view('notes.index', compact('notes'));
    }

    public function create()
    {
        return view('notes.create');
    }

    
    /* 
    Validates and saves the notes. Redirects to the list of notes after saving
    */

    public function store(Request $request)
    {

       
        $validatedData = $request->validate([
           'title' =>'required|string|max:255',
           'content' => 'required|string|min:3'
        ]);
      
        $validatedData['user_id'] = 1;
        Note::create($validatedData);
        return redirect()->route('notes.index');
    }


    /* 
    Displays a specific note
    */

    public function show(Note $note)
    {
        
        return view('notes.show', compact('note'));
    }
    

    public function edit(Note $note)
    {
        return view('notes.edit', compact('note'));
    }
    
     
   

    /* 
    Updates the specific note in the storage
    */
     
    public function update(Request $request, Note $note)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

     
        $note->update($validatedData);

        return redirect()->route('notes.show', $note->id)->with('success', 'Note updated successfully!');
    }

  

    /* 
      Removes the specific note from the storage
    */
    public function destroy(Note $note)
{


    $note->delete();

    return redirect()->route('notes.index')->with('success', 'Note deleted successfully.');
  }

}
