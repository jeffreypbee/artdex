<x-layout>

<x-admin-panel>
    
    <div class="columns">
        <section>
            <x-widget title="Add New Stuff">
                <div class="art">
                    <a href="/admin/art/create"><button>Add Art</button></a>
                </div>
            
                <div class="pkmn">
                    <a href="/admin/pkmn/create"><button>Add Pokemon</button></a>
                </div>
        
                <div class="gen">
                    <a href=""><button>Add Generation</button></a>
                </div>
            </x-widget>
        </section>
    
        <section>
            <x-widget title="Upcoming Art">
                @foreach ($upcoming as $art)
                    <x-dex-card :pkmn="$art->pokemon" />
                @endforeach
            </x-widget>
        </section>
    
        <section>
            <x-widget title="Unscheduled Art">
                @foreach ($unscheduled as $art)
                    <x-dex-card :pkmn="$art->pokemon" />
                @endforeach
            </x-widget>
        </section>
    </div>
    

    
</x-admin-panel>


</x-layout>

<style>



</style>