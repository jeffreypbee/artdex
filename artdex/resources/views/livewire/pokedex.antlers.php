<div>
    <div class="my-2 flex flex-col gap-1 justify-center items-center">
        <div class="text-lg font-bold">Filters</div>
        <div>
            Types
            {{ types }}
                <button class="rounded-xl p-1 hover:bg-black text-slate-800 hover:text-white">
                    <i class="fa-solid {{ icon }} p-1"
                        {{ if get:type=="{{ slug }}" }} style="color: {{ color }}" {{ /if }}></i>
                </button>
            {{ /types }}
        </div>
        <div>
            Tags
            {{ tags }}
                <button class="rounded-xl p-1 hover:bg-black text-slate-800 hover:text-white">
                    <i class="fa-solid {{ icon }} p-1"
                        {{ if get:type=="{{ slug }}" }} style="color: {{ color }}" {{ /if }}></i>
                </button>
            {{ /tags }}
        </div>
        <div>
            Generations
            {{ gens }}
                <button class="rounded-xl p-1 px-2 hover:bg-black text-slate-800 hover:text-white">
                    {{ value }}
                </button>
            {{ /gens }}
        </div>
        <input type="search" placeholder="Search" wire:model.live="search">
    </div>

    {{ pokedex as="pokemon" }}

        {{ if no_results }}
            No results!
        {{ /if }}

        <div class="flex flex-wrap justify-center">
            {{ pokemon }}
                {{ partial:pokemon/pokemon-card }}
            {{ /pokemon }}
        </div>

    {{ /pokedex }}
</div>
