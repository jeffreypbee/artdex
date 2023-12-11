@props(['pkmn'])

<div class="pkmn-page">
   
    <div class="info">
        <h2>
            <span class="number">#{{$pkmn->formattedNumber()}}</span> 
            <span class="name">{{$pkmn->name}}</span>
            @unless ($pkmn->form === null)
                <span class="form">({{$pkmn->form}})</span>
            @endunless
        </h2>      
        <div class="types">
            @if (count($pkmn->types) === 1)
                @php
                    $type = $pkmn->types[0];
                @endphp
                <div class="type1" style="                
                    background: linear-gradient({{$type->color1}}, {{$type->color2}});
                    ">
                    <i class="fa-solid fa-{{$type->icon}}"></i> {{$type->name}}
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
                        "><i class="fa-solid fa-{{$type1->icon}}"></i> {{$type1->name}}</div>
                    <div class="type2" style="
                        width: 50%;
                        height: 100%;
                        border-radius: 0 20px 20px 0;
                        background: linear-gradient({{$type2->color1}}, {{$type2->color2}});
                        "><i class="fa-solid fa-{{$type2->icon}}"></i> {{$type2->name}}</div>
                </div>
                
            @endif
        </div>
    </div>

    <div class="image">
        @unless ($pkmn->art === null)
            <img src="{{asset('storage/' . $pkmn->art->file)}}" />
        @endunless
    </div>
</div>

<style>

    .pkmn-page {
        background: linear-gradient(transparent, var(--gray));
        border-radius: 20px;
        padding: 10px;
        min-width: 300px;
    }

    .pkmn-page .info h2 {
        margin-bottom: 0;
    }
    
    .pkmn-page .info h2 .number {
        font-weight: normal;
    }
    
    .pkmn-page .info .types .type1, .pkmn-page .info .type2 {
        padding: 5px;
        height: 20px;
        border-radius: 20px;
        color: var(--darkgray);
        font-weight: bold;
        text-align: center;
    }
    
    </style>