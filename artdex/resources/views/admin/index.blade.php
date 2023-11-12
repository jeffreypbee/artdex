<x-layout>

<div class="admin-panel">
    <div class="art">
        <button>Add Art</button>
        <button>Mange Art</button>
    </div>

    <div class="pkmn">
        <button>Add Pokemon</button>
        <button>Manage Pokemon</button>
    </div>
</div>

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