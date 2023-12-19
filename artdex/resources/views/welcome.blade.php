
<x-layout>
    <div class="landing-page">

        <section class="latest">            
            @foreach ($latest as $art)
                @if ($loop->first)
                    <div class="newest">
                        <h2>Latest</h2>
                        <a href="/dex/{{$art->pokemon->id}}"><x-dex-card-large :pkmn="$art->pokemon" /></a>                        
                    </div>
                    <div>
                        <h3>Recent</h3>
                        <div class="more-latest">
                                      
                    
                @else
                    <x-dex-card :pkmn="$art->pokemon" />
                @endif
                    
            @endforeach
        </div>
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

.landing-page .latest .newest {
    flex-grow: 1;
}

.landing-page .more-latest {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
}

</style>
