@props(['type'])

<div class="flex justify-between items-center p-1 rounded-lg text-indigo-900" style="width: 100px; background: {{$type->color}}">
    <i class="fa-solid {{$type->icon}} fa-fw"></i>
    {{$type->name}}
</div>
