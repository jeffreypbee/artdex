<div>
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
