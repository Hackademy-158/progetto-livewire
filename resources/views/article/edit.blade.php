<x-layout>
    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <h3 class="text-center">Modifica articolo</h3>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <livewire:article-edit :article="$article"/>
            </div>
        </div>
    </div>
</x-layout>