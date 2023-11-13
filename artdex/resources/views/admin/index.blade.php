<x-layout>

<x-admin-panel>
    <div class="admin-panel">
        <div class="art">
            <a href="/admin/art/create"><button>Add Art</button></a>
            <a href="/admin/art"><button>Mange Art</button></a>
        </div>
    
        <div class="pkmn">
            <a href="/admin/pkmn/create"><button>Add Pokemon</button></a>
            <a href="/admin/pkmn"><button>Manage Pokemon</button></a>
        </div>
    </div>
</x-admin-panel>


</x-layout>

<style>

.admin-panel {
    display: grid;
    grid-template-columns: 1fr 1fr;
    grid-template-areas: 'art pkmn';
    gap: 10px;
}

.admin-panel .art {
    grid-area: art;
    display: flex;
    flex-direction: column;
}

.admin-panel .pkmn {
    grid-area: pkmn;
    display: flex;
    flex-direction: column;
}

</style>