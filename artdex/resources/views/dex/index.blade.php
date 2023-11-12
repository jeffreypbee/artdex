<x-layout>

<div class="dex-card-container">
    @foreach ($dex as $pkmn)
        <x-dex-card :pkmn="$pkmn" />
    @endforeach
</div>

</x-layout>

<style>

.dex-card-container {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
}

</style>