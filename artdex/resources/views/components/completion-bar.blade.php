@props(['title', 'icon', 'color', 'fraction'])

<div class="m-2 flex justify-between items-center gap-2 border-b-2 border-transparent hover:border-gray-400 hover:cursor-pointer transition-all ease-in-out">
    <div class="w-1/4">
        <i class="fa-solid {{$icon ?? 'fa-circle'}} fa-fw" style="color: {{$color ?? 'white'}}"></i>
        {{$title ?? ''}}
    </div>

    <div class="w-1/4">
        <div class="rounded h-2 bg-black"
            style="width: 200px">
            <div class="rounded h-2"
                style="width: {{floor(200 * $fraction)}}px; background: {{$color ?? 'white'}}"></div>
        </div>
    </div>

    <div class="w-1/4">
        {{floor($fraction * 100)}}%
    </div>
</div>
