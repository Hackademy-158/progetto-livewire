<div class="row justify-content-around">
    <div class="col-12 col-md-6">
        @if(session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
        <form class="p-5 shadow rounded" wire:submit="store">
            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control" id="title" wire:model.live="title">
                @error('title')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="subtitle" class="form-label">Sottotitolo</label>
                <input type="text" class="form-control" id="subtitle" wire:model.live.debounce.2000ms="subtitle">
                @error('subtitle')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="body" class="form-label">Corpo</label>
                <textarea class="form-control" id="body" wire:model.blur="body"></textarea>
                @error('body')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Inserisci articolo</button>
        </form>
    </div>
    <div class="col-12 col-md-6">
        <div class="card w-50">
            <div class="card-body">
                <h5 class="card-title">{{ $title }}</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Dettaglio</a>
            </div>
        </div>
    </div>
</div>