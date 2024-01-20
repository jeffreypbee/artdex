<div>
    <div class="flex flex-wrap gap-10">
        @foreach ($pokedex as $pokemon)
            <livewire:pokedex-entry :pokemon="$pokemon" />
            @foreach ($pokemon->forms as $form)
                <livewire:pokedex-entry :pokemon="$pokemon" :form="$form" />
            @endforeach
        @endforeach
    </div>
</div>
