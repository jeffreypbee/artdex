@props(['title', 'icon', 'color', 'number', 'total'])
@php
    $fraction = $number / $total
@endphp

<div class="m-2 my-4 p-2 flex flex-col rounded hover:bg-slate-800">
    <div class="grid grid-cols-3">
        <div>
            <i class="fa-solid {{$icon ?? 'fa-circle'}} fa-fw" style="color: {{$color ?? 'white'}}"></i>
            {{$title ?? ''}}
        </div>
        <div class="flex justify-center">
            {{$number}} / {{$total}}
        </div>
        <div class="flex justify-end">
            {{floor($fraction * 100)}}%
        </div>
    </div>
    <div class="w-100 rounded h-2 bg-black">
        <div class="rounded h-2" style="width: {{floor($fraction * 100)}}%; background: {{$color ?? 'white'}}"></div>
    </div>
</div>
