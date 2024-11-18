@extends('layouts.app')
@section('content')
  <!-- View of the creation form -->

<div class="note-item">
        <h1 class="mb-10 text-2xl font-bold">Create a New Note</h1>

        <form action="{{ route('notes.store') }}" method="POST">
            @csrf
            <label for="title" class="font-bold">Title:</label>
            <input type="text" id="title" name="title"  class="input mb-4" maxlength="255" required>

            <label for="content" class="font-bold">Content:</label>
            <textarea id="content" name="content" rows="5" class="input mb-4" minlength="3" required></textarea>

            <button type="submit" class="btn">Save Note</button>
        </form>
        <div class="mt-4">
            <a href="{{ route('notes.index') }}" class="btn">Back to all notes</a>
        </div>
</div>   
@endsection