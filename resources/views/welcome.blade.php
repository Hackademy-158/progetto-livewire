<x-layout>
    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center display-1">Laravel Livewire</h1>
            </div>
        </div>
    </div>
    <livewire:counter/>
    <livewire:counter/>
</x-layout>
{{--<script>
    let number = document.querySelector('#number');
    let increment = document.querySelector('#increment');
    let decrement = document.querySelector('#decrement');
    let value = number.innerHTML;
    
    increment.addEventListener('click', () => {
        value++;
        number.innerHTML = value;
    });

    decrement.addEventListener('click', () => {
        value--;
        number.innerHTML = value;
    })
</script>--}}