@extends('layouts.app')
@section('content')
  <!-- View of the edit form -->
  
<div class="note-item">
    <h1 class="mb-10 text-2xl font-bold">Edit Note</h1>

   
    <form action="{{ route('notes.update', $note->id) }}" method="POST">
        @csrf
        @method('PUT') 

        <label for="title" class="font-bold">Title:</label>
        <input type="text" id="title" name="title" value="{{ old('title', $note->title) }} "  class="input mb-4" maxlength="255" required>

        <label for="content" class="font-bold">Content:</label>
        <textarea id="content" name="content" required class="input mb-4" rows="10" cols="40" minlength="3" required>{{ old('content', $note->content) }}</textarea>

        <button type="submit" class="btn">Update Note</button>
    </form>

    <div class="mt-4">
    <a href="{{ route('notes.show', $note->id) }}" class="btn">Back to Note</a>
    </div>
</div>
@endsection