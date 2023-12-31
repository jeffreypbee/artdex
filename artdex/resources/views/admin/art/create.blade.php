<x-layout>

    <x-admin-panel>
        <h2>Add Art</h2>

        <form action="/admin/art" method="POST" enctype="multipart/form-data">
        @csrf
        
            <div>
                <label for="file">File</label>
                <input type="file" name="file" value="{{old('file')}}" required />
                @error('file')
                    {{$message}}
                @enderror
            </div>
        
            <div>
                <label for="pokemon">Pokemon</label>
                <select name="pokemon" id="" required>
                    <option value=""></option>
                    @foreach ($pkmn as $pokemon)
                        <option value="{{$pokemon->id}}">
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
                <input type="date" name="date" value="{{old('date')}}" required />
                @error('date')
                    {{$message}}
                @enderror
            </div>
        
            <button>Submit</button>
        
        </form>
    </x-admin-panel>



</x-layout>