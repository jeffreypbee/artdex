<div class="w-full flex flex-col items-center">

    <div class="m-b-5 w-full flex flex-col items-center">
        Generations
        <div class="flex">
            @foreach ($generations as $generation)
                <button>{{$generation->generation}}</button>
            @endforeach
        </div>

        Types
        <div class="flex">
            @foreach ($types as $type)
                <button><i class="fa-solid {{$type->icon}}"></i></button>
            @endforeach
        </div>
    </div>


    <div class="flex flex-wrap gap-5">
        @foreach ($pokedex as $pokemon)
            <livewire:pokedex-entry :pokemon="$pokemon" />
            @foreach ($pokemon->forms as $form)
                <livewire:pokedex-entry :pokemon="$pokemon" :form="$form" />
            @endforeach
        @endforeach
    </div>
    <div class="m-5"></div>

</div>
