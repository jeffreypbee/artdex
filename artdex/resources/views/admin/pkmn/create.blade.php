<x-layout>

    <x-admin-panel>
        <h2>Add Pokemon</h2>

        <form action="/admin/pkmn/" method="POST">
        @csrf
        
            <div>
                <label for="number">Number</label>
                <input type="number" name="number" value="{{old('number')}}" required />
                @error('number')
                    {{$message}}
                @enderror
            </div>
        
            <div>
                <label for="name">Name</label>
                <input type="text" name="name" value="{{old('name')}}" required />
                @error('name')
                    {{$message}}
                @enderror
            </div>
        
            <div>
                <label for="form">Form</label>
                <input type="text" name="form" value="{{old('form')}}" />
                @error('form')
                    {{$message}}
                @enderror
            </div>
        
            <div>
                <label for="type1">Type 1</label>
                <select name="type1" id="">
                    <option value=""></option>
                    @foreach ($types as $type)
                        <option value="{{$type->id}}">{{$type->name}}</option>
                    @endforeach
                </select>
            </div>
        
            <div>
                <label for="type2">Type 2</label>
                <select name="type2" id="">
                    <option value=""></option>
                    @foreach ($types as $type)
                        <option value="{{$type->id}}">{{$type->name}}</option>
                    @endforeach
                </select>
            </div>
        
            <button>Submit</button>
        
        </form>
    </x-admin-panel>



</x-layout>