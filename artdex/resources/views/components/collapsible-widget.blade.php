@props(['title'])

<div x-data="{collapsed: false}" style="min-width: 200px">
    <div class="p-1 flex justify-between rounded-t-lg border-b-2 border-gray-500" style="background: linear-gradient(to right, transparent, rgb(40, 52, 90))">
        <div class="text-lg">{{$title}}</div>
        <div class="p-1">
            <i @click="collapsed = !collapsed" class="fa-solid" :class="collapsed ? 'fa-chevron-down' : 'fa-chevron-up'"></i>
        </div>
    </div>
    <div class="p-2" x-show="!collapsed">
        {{$slot}}
    </div>
</div>
