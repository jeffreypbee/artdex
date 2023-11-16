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
            <div class="type1" style="                
                background: linear-gradient({{$type->color1}}, {{$type->color2}});
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
                    border-radius: 10px 0 0 10px;
                    background: linear-gradient({{$type1->color1}}, {{$type1->color2}});
                    "><i class="fa-solid fa-{{$type1->icon}}"></i></div>
                <div class="type2" style="
                    width: 50%;
                    height: 100%;
                    border-radius: 0 10px 10px 0;
                    background: linear-gradient({{$type2->color1}}, {{$type2->color2}});
                    "><i class="fa-solid fa-{{$type2->icon}}"></i></div>
            </div>
            
        @endif
        @unless ($pkmn->art === null)
        <img class="pkmn-art" src="{{asset('storage/' . $pkmn->art->file)}}" alt="">
        @endunless
    </div>
    <div class="info">
        #{{$dexNo}}
        <div style="font-weight: bold">{{$pkmn->name}}</div>
        <div>{{$pkmn->form}}</div>
    </div>    
</div>

<style>

.dex-card {
    width: 120px;
    height: 80px;
    border-radius: 10px;
    background: var(--gray);
    margin-top: 70px;
}

.dex-card .type1 {
    width: 100%;
    height: 100%;
    border-radius: 10px;
}

.dex-card i {
    padding-inline: 5px;
    padding-top: 2px; 
    color: var(--darkgray);
}

.dex-card .type2 {
    text-align: right;
}

.dex-card .art-container {
    width: 100%;
    height: 20px;
    position: relative;
}

.dex-card .art-container .pkmn-art {
    position: absolute;
    width: 120px;
    top: -80px;
    left: 50%;
    transform: translateX(-50%);
}

.dex-card .info {
    display: flex;
    flex-direction: column;
    padding: 5px;
}

</style>