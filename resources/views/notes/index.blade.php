@extends('layouts.app')

@section('content')
  <!-- View of all listed notes -->

    <h1 class = "mb-8 text-4xl font-bold">Notes</h1>
    <div class="flex items-center justify-between mb-4">
    <a href="{{ route('notes.create') }}" class="btn" >Create New Note</a>
    <form action="{{ route('notes.index') }}" method="GET" class="flex items-center">
        @csrf
        <input type="text" name="title" placeholder="Search notes..." value="{{ request('title') }}"
            class="border border-gray-300 rounded-lg px-4 py-2 mr-2 focus:outline-none focus:ring-2 focus:ring-blue-400"
        />
        
        <button type="submit" class="btn bg-blue-500 text-white">Search</button>
        <a href="{{route('notes.index')}}" class="btn h-10 ml-2">Clear</a>
    </form>
</div>
    @if($notes->isEmpty())
        <p>No notes available.</p>
    @else
       
    <ul class="mt-4">
        @foreach($notes as $note)
            <li class="mb-4">
                <div class="note-item">
                  <div class="flex flex-wrap items-center justify-between">
                      <a href="{{ route('notes.show', $note->id) }}" class="note-link">
                           <div class="note-title">{{ $note->title }}</div>
                           <div class="text-gray-600 font-bold mt-2 mb-2">Created at: {{ $note->created_at->format('d-m-Y') }}</div>
                       <div>{{ $note->content }}</div>
                       </a>
                  </div>
                </div>
            </li>  
        @endforeach
        
    </ul> 
    @endif
    <div class="pagination">
        {{ $notes->links() }}
    </div>
      
@endsection