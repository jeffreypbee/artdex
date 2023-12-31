<x-layout>
    <x-admin-panel>
        <h2>Pokemon</h2>

        <table class="table">
            <tr>
                <th>Gen.</th>
                <th>#</th>
                <th>Name</th>
                <th>Form</th>
                <th>Types</th>
                <th>Admin</th>
            </tr>
            @foreach ($pokemon as $pkmn)
                <tr>
                    <td style="text-align: center;"><i class="fa-solid fa-{{$pkmn->generation->id}}" style="color: {{$pkmn->generation->color}};"></i></td>
                    <td>#{{$pkmn->formattedNumber()}}</td>
                    <td>{{$pkmn->name}}</td>
                    <td>{{$pkmn->form}}</td>
                    <td style="display: flex;">
                        @foreach ($pkmn->types as $type)
                            <x-type-tag :type="$type" />
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