<x-layout>
    <div class="landing-page">

        <h2>Welcome to the Artdex!</h2>
        <section>
            Hi, my name's Jeff, and I like to drawy Pok&eacute;mon! Feel free to browse my gallery of Pok&eacute;mon drawings.
        </section>

        <h2>Latest</h2>
        <section class="latest">            
            <x-dex-card-large :pkmn="$latest->pokemon" />

            <div class="dex-card-container">
            @foreach ($recent as $art)
                @if ($loop->first) @continue @endif
                <x-dex-card :pkmn="$art->pokemon" />
            @endforeach
            </div>
        </section>
        
    </div>
    
</x-layout>

<style>

.landing-page {
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 75%;
}

.landing-page .latest {
    display: flex;
    gap: 20px;
}

</style>
