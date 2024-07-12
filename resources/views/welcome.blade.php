@extends('layouts.app')
@section('main')
  @include('shared.jumbo')

  <section id="comics">
    <div class="container">
      <div class="row row-cols-1 row-cols-sm-3 row-cols-lg-6">
        @foreach ($comics as $comic)
          <div class="col">
            <div class="card">
              <img class="card-img-top" src="{{ $comic->thumb }}" alt="">
              <div class="card-body ">
                <p class="card-title mt-3">{{ $comic->title }}</p>
              </div>
            </div>
          </div>
        @endforeach

        <button>
          LOAD MORE
        </button>

      </div>
    </div>
  </section>
@endsection
