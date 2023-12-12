@props(['pkmn'])

@php
    $bgColor = "red";
    if ($pkmn->hasArt()) {
        if (count($pkmn->types) === 1) {
        $bgColor = "linear-gradient(to right, " . $pkmn->types[0]->color1 . ", " . $pkmn->types[0]->color1 . ");";
        } else {
            $bgColor = "linear-gradient(to right, " . $pkmn->types[0]->color1 . ", " . $pkmn->types[1]->color1 . ");";
        }
    } else {
        $bgColor = "var(--gray);";
    }
    
@endphp

<a href="/dex/{{$pkmn->id}}">
<div class="dex-card"
    style="
    background: linear-gradient(to bottom, transparent, var(--darkgray)),
    {{$bgColor}}
    ">
    <div class="image">
        @if ($pkmn->hasArt())
            <img src="{{asset('storage/' . $pkmn->art->file)}}" />
        @endif
    </div>

    <div class="info">

        <div class="types">
            @if (count($pkmn->types) === 1)
                @php
                    $type = $pkmn->types[0];
                @endphp
                <div class="type1" style="                
                    background: linear-gradient({{$type->color1}}, {{$type->color2}});
                    border-radius: 20px;
                    ">
                    <i class="fa-solid fa-{{$type->icon}}"></i>
                </div>
            @else
                @php
                    $type1 = $pkmn->types[0];
                    $type2 = $pkmn->types[1];
                @endphp
                <div style="display: flex; gap: 5px; width: 100%; height: 100%">
                    <div class="type1" style="
                        width: 50%;
                        border-radius: 20px 0 0 20px;
                        background: linear-gradient({{$type1->color1}}, {{$type1->color2}});
                        "><i class="fa-solid fa-{{$type1->icon}}"></i></div>
                    <div class="type2" style="
                        width: 50%;
                        height: 100%;
                        border-radius: 0 20px 20px 0;
                        text-align: right;
                        background: linear-gradient({{$type2->color1}}, {{$type2->color2}});
                        "><i class="fa-solid fa-{{$type2->icon}}"></i></div>
                </div>
                
            @endif
        </div>

        <div class="number">
            #{{$pkmn->formattedNumber()}}
        </div>
        <div class="name">
            {{$pkmn->name}}
        </div>
        <div class="form">
            @if ($pkmn->form === null)
                &nbsp;
            @else
                {{$pkmn->form}}
            @endif
        </div>
    </div>
</div>
</a>

<style>

.dex-card {
    width: 150px;
    height: 200px;
    border-radius: 10px;
    background: var(--gray);
    color: white;
    position: relative;
    display: flex;
    flex-direction: column;
    justify-content: flex-end;
}

.dex-card .image img {
    position: relative;
    margin-block: -20px;
    z-index: 2;
    width: 150px;
}

.dex-card .info {
    padding: 5px;
}

.dex-card .info .name {
    font-weight: bold;
}

.dex-card .info .types {
    color: var(--darkgray);
    padding: 0;
    margin: 0;
}

.dex-card .types .type1, .dex-card .types .type2 {
    padding-inline: 10px;
    padding-block: 3px;
}
</style>