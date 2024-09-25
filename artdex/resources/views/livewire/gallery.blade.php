<div class="flex flex-wrap justify-center">
    @foreach ($gallery as $art)
        <livewire:gallery-entry :art="$art" />
    @endforeach
</div>
