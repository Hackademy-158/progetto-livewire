<x-layout>
    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <h3 class="text-center">Tutti gli articoli</h3>
            </div>
        </div>
    </div>
    @if(session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    <div class="container my-5">
        <div class="row justify-content-center">
            @foreach ($articles as $article)
            <div class="col-12 col-md-3 m-2">
                <div class="card w-50">
                    <div class="card-body">
                        <h5 class="card-title">{{ $article->title }}</h5>
                        <p class="card-text">{{ $article->subtitle }}</p>
                        <a href="{{route('article.edit', $article)}}" class="btn btn-primary">Modifica</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</x-layout>