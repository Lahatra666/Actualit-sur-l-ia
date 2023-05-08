@extends('layout.client')

@foreach($errors->all() as $error)
    {{ $error }}
@endforeach
<main id="main" class="main">
            <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h1 class="card-title">Tout à savoir sur l’intelligence artificielle</h1>
          @foreach($categorie as $categorie)
             @foreach($categorie->articles as $article)
              <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      {{ $article->titre }}
                    </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <div class="row g-0">
                        <div class="col-md-4">
                            <a href="{{ route('detail',['idarticle'=>$article->idarticle]) }}"><img src="{{ Storage::url($article->image) }}" class="img-fluid rounded-start" alt="{{ $article->image }}"></a>
                        </div>
                        <div class="col-md-8">
                          <div class="card-body">
                            <h5 class="card-title">L'Intelligence Artificielle nommée {{ $article->titre }} ,</h5>
                            <p class="card-text">{{ $article->description }}.</p>
                          </div>
                        </div>
                        <a href="{{ route('detail',['idarticle'=>$article->idarticle]) }}"><button class="btn btn-primary w-100" type="submit">Detail</button></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div><!-- End Default Accordion Example -->
            @endforeach
          @endforeach
            </div>
          </div>

        </div>


            </div>
          </div>

        </div>
@section('content')
@endsection