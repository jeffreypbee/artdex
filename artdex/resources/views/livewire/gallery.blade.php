<div>
    <div class="mb-4 flex justify-center gap-2">
        <button class="p-2 rounded {{$this->sort === 'new' ? 'bg-white text-slate-900' : 'hover:bg-blue-gray'}}"
            wire:click='sortBy("new")'>Newest</button>
        <button class="p-2 rounded {{$this->sort === 'old' ? 'bg-white text-slate-900' : 'hover:bg-blue-gray'}}"
            wire:click='sortBy("old")'>Oldest</button>
    </div>

    <div class="flex flex-wrap justify-center">
        @foreach ($gallery as $art)
            <livewire:gallery-entry wire:key='{{$art->id}}' :art="$art" />
        @endforeach
    </div>
</div>
