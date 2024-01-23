<div class="w-full flex flex-col items-center">

    <div class="m-10 w-full flex flex-col items-center">
        Generations
        <div class="flex">
            @foreach ($generations as $generation)
                <button
                    wire:key='gen-{{$generation->id}}'
                    wire:click='filterGen({{$generation->generation}})'
                    class="m-1 w-8 h-8 rounded-2xl flex justify-center items-center bg-blue-gray border-2 border-transparent hover:border-gray-600 {{$this->gen == $generation->generation ? 'border-white' : ''}}"
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
                    class="m-1 w-8 h-8 rounded-2xl flex justify-center items-center bg-blue-gray border-2 border-transparent hover:border-gray-600 {{$this->type == $type->name ? 'border-white' : ''}}"
                    >
                    <i class="fa-solid {{$type->icon}} fa-fw" style="color: {{$type->color}}"></i>
                </button>
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
