<x-layout>
    <x-admin-panel>
        <h2>Art</h2>
        <table class="table">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Form</th>
                <th>Date</th>
                <th>Admin</th>
            </tr>
            @foreach ($art as $piece)
            <tr>
                <td>#{{$piece->pokemon->formattedNumber()}}</td>
                <td>{{$piece->pokemon->name}}</td>
                <td>{{$piece->pokemon->form}}</td>
                <td>{{$piece->date}}</td>
                <td><a href="/admin/art/{{$piece->id}}/edit"><button>Edit</button></a></td>
            </tr>
        @endforeach
        </table>        
    </x-admin-panel>
</x-layout>