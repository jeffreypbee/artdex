<div class="flex flex-wrap">
    @foreach ($gallery as $art)
        <livewire:gallery-entry :art="$art" />
    @endforeach
</div>
