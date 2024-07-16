@extends('layouts.app')

@section('main')
  <div class="container">
    <h1 class="my-4">Add a New Comic</h1>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif
    <form action="{{ route('comics.store') }}" method="POST">
      @csrf
      <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" required>
      </div>
      <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" id="description" name="description" rows="3" required> {{ old('description') }} </textarea>
      </div>
      <div class="mb-3">
        <label for="thumb" class="form-label">Thumbnail URL</label>
        <input type="url" class="form-control" id="thumb" name="thumb" value="{{ old('thumb') }}" required>
      </div>
      <div class="mb-3">
        <label for="price" class="form-label">Price</label>
        <input type="text" class="form-control" id="price" name="price" value="{{ old('price') }}" required>
      </div>
      <div class="mb-3">
        <label for="series" class="form-label">Series</label>
        <input type="text" class="form-control" id="series" name="series" value="{{ old('series') }}" required>
      </div>
      <div class="mb-3">
        <label for="sale_date" class="form-label">Sale Date</label>
        <input type="date" class="form-control" id="sale_date" name="sale_date" value="{{ old('sale_date') }}"
          required>
      </div>
      <div class="mb-3">
        <label for="type" class="form-label">Type</label>
        <input type="text" class="form-control" id="type" name="type" value="{{ old('type') }}" required>
      </div>
      <div class="mb-3">
        <label for="artists" class="form-label">Artists (comma separated)</label>
        <input type="text" class="form-control" id="artists" name="artists" value="{{ old('artists') }}" required>
      </div>
      <div class="mb-3">
        <label for="writers" class="form-label">Writers (comma separated)</label>
        <input type="text" class="form-control" id="writers" name="writers" value="{{ old('writers') }}" required>
      </div>
      <button type="submit" class="btn btn-primary mb-5 mt-3">Add Comic</button>
    </form>
  </div>
@endsection
