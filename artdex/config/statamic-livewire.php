<?php

return [

    /*
    |--------------------------------------------------------------------------
    | EXPERIMENTAL: Livewire Synthesizers
    |--------------------------------------------------------------------------
    |
    | So called synthesizers allow to add custom types to Livewire, which can
    | can be used to make Livewire aware of Statamic classes that you want
    | to work with, as it might make things easier.
    |
    | It's recommended to remove or uncomment those synthesizers that are
    | not used in your application, to avoid overhead by loading those.
    |
    | This features is experimental. It's ment to be tested and to played
    | with. As long as it is experimental, it can be changed and removed
    | at any point without a warning.
    |
    */

    'synthesizers' => [

        'enabled' => true,

        'classes' => [
            \Jonassiewertsen\Livewire\Synthesizers\EntryCollectionSynthesizer::class,
            \Jonassiewertsen\Livewire\Synthesizers\EntrySynthesizer::class,
        ],
    ],
];
