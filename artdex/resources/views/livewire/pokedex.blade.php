<div>
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
