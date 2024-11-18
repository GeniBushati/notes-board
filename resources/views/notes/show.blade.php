@extends('layouts.app')
@section('content')
  <!-- View of a single note -->
  
<div class="mb-4">
    <h1 class="mb-8 text-4xl font-bold">Note Details</h1>


    <div class="note-item">
    <div class="note-info">
        <div class="sticky top-0 mb-2 text-3xl">{{ $note->title }}</div>
         <div class="text-gray-600 font-bold mt-2 mb-2">Created at: {{ $note->created_at->format('d-m-Y') }}</div>
         <div class="text-gray-600 font-bold mt-2 mb-2">Lastly updated: {{ $note->updated_at->format('d-m-Y') }}</div>
           <div class="note-content">{{ $note->content }}</div>
               <a href="{{ route('notes.edit', $note->id) }}" >
                  <button class="btn mt-4">Edit</button>
               </a>

               <form action="{{ route('notes.destroy', $note->id) }}" method="POST" class="inline-block mt-4">
                @csrf
                @method('DELETE')
                
                <button type="submit" class="btn bg-red-500 text-white" onclick="return confirm('Are you sure you want to delete this note?');">
                    Delete
                </button>
            </form>
    </div>
    <div class="mb-4 mt-4">
             <p><a href="{{ url('api/notes') }}" class="btn mb-4">Back to all notes</a></p>
    </div>
    </div>
@endsection
