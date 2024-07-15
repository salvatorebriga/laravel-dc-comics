@extends('layouts.app')
@section('main')
  @include('shared.jumbo')

  <section id="comics">
    <div class="container">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-6">
        @foreach ($comics as $comic)
          <div class="col">
            <div class="card">
              <img class="card-img-top" src="{{ $comic->thumb }}" alt="">
              <div class="card-body mt-3">
                <a href="{{ route('comics.show', ['id' => $comic->id]) }}">{{ $comic->title }}</a>
              </div>
            </div>
          </div>
        @endforeach

      </div>
    </div>

    <button>
      LOAD MORE
    </button>

  </section>
@endsection
