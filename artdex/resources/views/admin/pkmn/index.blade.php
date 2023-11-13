<x-layout>
    <x-admin-panel>
        <h2>Pokemon</h2>

        <table class="content">
            @foreach ($pokemon as $pkmn)
                <tr>
                    <td>#{{sprintf('%04s', $pkmn->number)}}</td>
                    <td>{{$pkmn->name}}</td>
                    <td>{{$pkmn->form}}</td>
                    <td>
                        @foreach ($pkmn->types as $type)
                            {{$type->name}}&nbsp;
                        @endforeach
                    </td>
                    <td>
                        <a href="/admin/pkmn/{{$pkmn->id}}/edit"><button>Edit</button></a>
                    </td>
                </tr>
            @endforeach
        </table>
    </x-admin-panel>
</x-layout>