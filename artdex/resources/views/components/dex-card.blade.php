@props(['pkmn'])

<div class="dex-card">
    <div class="art-container">
        @if (count($pkmn->types) === 1)
            @php
                $type = $pkmn->types[0];
            @endphp
            <div style="
                width: 100%;
                height: 100%;
                border-radius: 10px;
                background: linear-gradient({{$type->color1}}, {{$type->color2}});
                ">
            </div>
        @else
            @php
                $type1 = $pkmn->types[0];
                $type2 = $pkmn->types[1];
            @endphp
            <div style="display: flex; width: 100%; height: 100%">
                <div style="
                    width: 50%;
                    height: 100%;
                    border-radius: 10px 0 0 10px;
                    background: linear-gradient({{$type1->color1}}, {{$type1->color2}});
                    "></div>
                <div style="
                    width: 50%;
                    height: 100%;
                    border-radius: 0 10px 10px 0;
                    background: linear-gradient({{$type2->color1}}, {{$type2->color2}});
                    "></div>
            </div>
            
        @endif
        @unless ($pkmn->art === null)
        <img class="pkmn-art" src="" alt="">
        @endunless
    </div>
    {{$pkmn->name}}
</div>

<style>

.dex-card {
    width: 100px;
}

.dex-card .art-container {
    width: 100%;
    height: 100px;
    position: relative;
}

.dex-card .art-container .pkmn-art {
    position: absolute;
}

</style>