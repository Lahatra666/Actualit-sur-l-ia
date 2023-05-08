@extends('layout.client')

@foreach($errors->all() as $error)
    {{ $error }}
@endforeach
<main id="main" class="main">
    <h1>Detail de l'IA</h1>
    <div class="card mb-3">
        @foreach($articles as $article)
        <div class="row g-0">
          <div class="col-md-4">
            <img src="{{ Storage::url($article->image) }}" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h2 class="card-title">{{ $article->titre }}</h2>
              <h2 class="card-title">categorie : {{ $article->nomcategorie }}</h2>
              <h2 class="card-title">Description :</h2>
              <p class="card-text">{{ $article->description }}</p>
            </div>
          </div>
        </div>
        @endforeach
      </div><!-- End Card with an image on left -->

@section('content')
@endsection