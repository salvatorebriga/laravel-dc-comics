@extends('layouts.app')

@section('main')
  @include('shared.jumbo')

  <div class="container p-5">
    <div class="row">
      <div class="col-md-4">
        <img src="{{ $comic->thumb }}" class="img-fluid" alt="{{ $comic->title }}">
      </div>
      <div class="col-md-8">
        <h1>{{ $comic->title }}</h1>
        <p>{{ $comic->description }}</p>
        <ul>
          <li><strong>Price:</strong> {{ $comic->price }}</li>
          <li><strong>Series:</strong> {{ $comic->series }}</li>
          <li><strong>Sale Date:</strong> {{ $comic->sale_date }}</li>
          <li><strong>Type:</strong> {{ $comic->type }}</li>
          <li><strong>Artists:</strong> {{ implode(', ', json_decode($comic->artists)) }}</li>
          <li><strong>Writers:</strong> {{ implode(', ', json_decode($comic->writers)) }}</li>
        </ul>
        <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-primary">Edit</a>

        <form action="{{ route('comics.destroy', $comic->id) }}" method="POST" style="display:inline-block;">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger"
            onclick="return confirm('Are you sure you want to delete this comic?')">Delete</button>
        </form>
      </div>
    </div>
  </div>
@endsection
