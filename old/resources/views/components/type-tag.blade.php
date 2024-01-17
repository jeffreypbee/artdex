@props(['type'])

<div class="type-tag" style="
    background: linear-gradient(to bottom, {{$type->color1}}, {{$type->color2}});
    ">
    <i class="fa-solid fa-{{$type->icon}}"></i> 
    {{$type->formattedName()}}
</div>

<style>

.type-tag {
    width: 75px;
    margin-inline: 5px;
    padding: 5px;
    display: flex;
    justify-content: space-between;
    color: var(--darkgray);
}

</style>