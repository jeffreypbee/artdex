@props(['pkmn'])

@php
    $dexNo = sprintf('%04s', $pkmn->number);
@endphp

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
            <div style="display: flex; gap: 5px; width: 100%; height: 100%">
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
        <img class="pkmn-art" src="{{asset('storage/' . $pkmn->art->file)}}" alt="">
        @endunless
    </div>
    #{{$dexNo}}
    <div style="font-weight: bold">{{$pkmn->name}}</div>
    <div>{{$pkmn->form}}</div>
</div>

<style>

.dex-card {
    width: 100px;
    height: 150px;
    border-radius: 10px;
    background: var(--gray);
    padding: 5px;
}

.dex-card .art-container {
    width: 100%;
    height: 100px;
    position: relative;
}

.dex-card .art-container .pkmn-art {
    position: absolute;
    width: 100px;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}

</style>