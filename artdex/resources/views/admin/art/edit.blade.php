<x-layout>
    <x-admin-panel>
        <h2>Edit</h2>

        <form action="/admin/art/{{$art->id}}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf

        <div>
            <img src="{{asset('storage/' . $art->file)}}" />
            {{-- <label for="file">File</label>
            <input type="file" name="file" value="{{$art->file}}" required />
            @error('file')
                {{$message}}
            @enderror --}}
        </div>
    
        <div>
            <label for="pokemon">Pokemon</label>
            <select name="pokemon" id="" required>
                <option value=""></option>
                @foreach ($pkmn as $pokemon)
                    <option value="{{$pokemon->id}}"
                        @if ($pokemon->id === $art->pokemon->id)
                            selected
                        @endif>
                        {{$pokemon->number}} - 
                        {{$pokemon->name}}
                        @unless ($pokemon->form === null)
                            ({{$pokemon->form}})
                        @endunless
                    </option>
                @endforeach
            </select>
        </div>
    
        <div>
            <label for="date">Date</label>
            <input type="date" name="date" value="{{$art->date}}" required />
            @error('date')
                {{$message}}
            @enderror
        </div>
    
        <div>
            <button>Delete</button>
            <button type="submit">Submit</button>            
        </div>
        
        
        </form>
    </x-admin-panel>
</x-layout>