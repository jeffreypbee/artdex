<div class="w-full flex flex-col items-center">

    <div class="m-10 w-full flex flex-col items-center">
        Generations
        <div class="flex">
            @foreach ($generations as $generation)
                <button>{{$generation->generation}}</button>
            @endforeach
        </div>

        Types
        <div class="flex">
            @foreach ($types as $type)
                <button wire:key='type-{{$type->id}}' wire:click='filterType("{{$type->name}}")'><i class="fa-solid {{$type->icon}}"></i></button>
            @endforeach
        </div>
    </div>


    <div class="flex flex-wrap gap-5">
        @foreach ($pokedex as $pokemon)
            <livewire:pokedex-entry wire:key='{{$pokemon->id}}' :pokemon="$pokemon" />
            @foreach ($pokemon->forms as $form)
                <livewire:pokedex-entry wire:key='{{$pokemon->id}}-{{$form->id}}' :pokemon="$pokemon" :form="$form" wire:click='showPokemon($pokemon->number)' />
            @endforeach
        @endforeach
    </div>
    <div class="m-5"></div>

</div>
