<x-layout>

<x-admin-panel>
    <h2>Add New Stuff</h2>
    <section class="add-panel">
        <div class="art">
            <a href="/admin/art/create"><button>Add Art</button></a>
        </div>
    
        <div class="pkmn">
            <a href="/admin/pkmn/create"><button>Add Pokemon</button></a>
        </div>

        <div class="gen">
            <a href=""><button>Add Generation</button></a>
        </div>
    </section>

    <h2>Upcoming Art</h2>
    <section>
        <div class="dex-card-container">
        @foreach ($upcoming as $art)
            <x-dex-card :pkmn="$art->pokemon" />
        @endforeach
        </div>    
    </section>

    <h2>Unscheduled Art</h2>
    <section>
        <div class="dex-card-container">
            @foreach ($unscheduled as $art)
                <x-dex-card :pkmn="$art->pokemon" />
            @endforeach
            </div> 
    </section>
</x-admin-panel>


</x-layout>

<style>

.add-panel {
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
    grid-template-areas: 'art pkmn gen';
    gap: 10px;
    width: 100%;
}

.add-panel .art {
    grid-area: art;
}

.add-panel .pkmn {
    grid-area: pkmn;
}

.admin-panel .gen {
    grid-area: gen;
}

.add-panel .pkmn, .add-panel .art, .add-panel .gen {
    display: flex;
    flex-direction: column;
    align-items: center;
}

.add-panel .art button, .add-panel .pkmn button, .add-panel .gen button {
    height: 100px;
    width: 100px;
}

</style>