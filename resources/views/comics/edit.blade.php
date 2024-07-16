@extends('layouts.app')

@section('main')
  <div class="container p-5">
    <h1>Edit Comic</h1>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif
    <form action="{{ route('comics.update', $comic->id) }}" method="POST">
      @csrf
      @method('PUT')

      <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" class="form-control" value="{{ $comic->title }}">
      </div>

      <div class="form-group">
        <label for="description">Description</label>
        <textarea name="description" class="form-control">{{ $comic->description }}</textarea>
      </div>

      <div class="mb-3">
        <label for="thumb" class="form-label">Thumbnail URL</label>
        <input type="url" class="form-control" id="thumb" name="thumb" value="{{ old('thumb') }}">
      </div>

      <div class="form-group">
        <label for="price">Price</label>
        <input type="text" name="price" class="form-control" value="{{ $comic->price }}">
      </div>

      <div class="form-group">
        <label for="series">Series</label>
        <input type="text" name="series" class="form-control" value="{{ $comic->series }}">
      </div>

      <div class="form-group">
        <label for="sale_date">Sale Date</label>
        <input type="text" name="sale_date" class="form-control" value="{{ $comic->sale_date }}">
      </div>

      <div class="form-group">
        <label for="type">Type</label>
        <input type="text" name="type" class="form-control" value="{{ $comic->type }}">
      </div>

      <div class="form-group">
        <label for="artists">Artists</label>
        <input type="text" name="artists" class="form-control"
          value="{{ implode(', ', json_decode($comic->artists)) }}">
      </div>

      <div class="form-group">
        <label for="writers">Writers</label>
        <input type="text" name="writers" class="form-control"
          value="{{ implode(', ', json_decode($comic->writers)) }}">
      </div>

      <button type="submit" class="btn btn-primary mt-4">Save Changes</button>
    </form>
  </div>
@endsection
