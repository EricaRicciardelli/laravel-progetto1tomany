<x-layout>
    <div class="container">
        <div class="row">
            @foreach ($foods as $food)
                <div class="col-4">
                    <x-card :food="$food" />
                </div>
            @endforeach
        </div>
    </div>
</x-layout>