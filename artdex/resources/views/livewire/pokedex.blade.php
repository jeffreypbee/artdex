<div class="w-full flex flex-col items-center">

    <x-collapsible-widget title="Filters">
    <div class="w-full flex flex-col items-center">

        <div wire:submit.prevent='filterPokedex()' class="m-2">
            <form action="">
                <input type="text" wire:model.live='search' class="bg-blue-gray h-4 rounded-xl border-2 border-transparent focus:border-white">
                <button><i class="fa-solid fa-search fa-xl" class="text-gray-600"></i></button>
            </form>
        </div>


        Generations
        <div class="flex">
            @foreach ($generations as $generation)
                <button
                    wire:key='gen-{{$generation->id}}'
                    wire:click='filterGen({{$generation->generation}})'
                    class="m-1 w-8 h-8 rounded-2xl flex justify-center items-center bg-blue-gray border-2 border-transparent hover:border-gray-600 hover:animate-pulse {{$this->gen == $generation->generation ? 'border-white' : ''}}"
                    >
                    <i class="fa-solid {{$generation->icon}} fa-fw" style="color: {{$generation->color}}"></i>
                </button>
            @endforeach
        </div>

        Types
        <div class="flex">
            @foreach ($types as $type)
                <button
                    wire:key='type-{{$type->id}}'
                    wire:click='filterType("{{$type->name}}")'
                    class="m-1 w-8 h-8 rounded-2xl flex justify-center items-center bg-blue-gray border-2 border-transparent hover:border-gray-600 hover:animate-pulse {{$this->type == $type->name ? 'border-white' : ''}}"
                    >
                    <i class="fa-solid {{$type->icon}} fa-fw" style="color: {{$type->color}}"></i>
                </button>
            @endforeach
        </div>

        <button
            class="m-2 p-2 leading-none rounded-2xl flex justify-center items-center bg-blue-gray border-2 border-transparent hover:border-gray-600 hover:animate-pulse"
            wire:click='resetFilters'>
                Reset Filters
            </button>
    </div>
    </x-collapsible-widget>

    <div class="m-2 flex flex-wrap justify-center gap-6">
        @if (count($pokedex) === 0)
            <div class="text-xl">No Pokemon Found</div>
        @endif
        @foreach ($pokedex as $pokemon)
            <livewire:pokedex-entry wire:key='{{$pokemon->id}}' :pokemon="$pokemon" />
            @foreach ($pokemon->forms as $form)
                <livewire:pokedex-entry wire:key='{{$pokemon->id}}-{{$form->id}}' :pokemon="$pokemon" :form="$form" wire:click='showPokemon($pokemon->number)' />
            @endforeach
        @endforeach
    </div>
    <div class="m-5"></div>

</div>
