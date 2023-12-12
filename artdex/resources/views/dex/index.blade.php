<x-layout>

<h1>The Dex</h1>
<x-progress-widget text="Pokemon Drawn" :number="count($art)" :total="count($dex)" color="#ffffff" icon="pencil" />

<div class="dex-card-container" style="margin-top: 20px;">
    @foreach ($dex as $pkmn)
        <x-dex-card :pkmn="$pkmn" />
    @endforeach
</div>

</x-layout>

<style>



</style>