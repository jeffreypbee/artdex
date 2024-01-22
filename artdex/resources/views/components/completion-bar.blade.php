@props(['title', 'icon', 'color', 'fraction'])

<div class="flex items-center gap-2">
    <i class="fa-solid {{$icon ?? 'fa-circle'}}" style="color: {{$color ?? 'white'}}"></i>
    <div class="rounded h-2 bg-black"
        style="width: 200px">
        <div class="rounded h-2"
            style="width: {{floor(200 * $fraction)}}px; background: {{$color ?? 'white'}}"></div>
    </div>
    <div>
        {{floor($fraction * 100)}}% Pokemon Drawn
    </div>
</div>
