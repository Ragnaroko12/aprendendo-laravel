<x-loyaut>
    <div class=" flex justify-center items-center mt-60">
        <form action="{{ route('habits.update', $habit->id) }}" method="POST" class=" flex flex-col gap-4 border w-230 p-4 bg-white rounded">
            @csrf
            @method('PUT')
            <h1 class=" font-bold text-2xl text-center">Editar Hábito</h1>
            <input type="text" name="name" value="{{ $habit->name }}"class=" border p-2 rounded @error('name') border-red-500 @enderror " required/>
            @error('name')
                <p class=" text-red-500 font-bold">{{ $message }}</p>
            @enderror
            <input type="submit" value="Editar hábito" class=" bg-blue-500 text-white p-2 rounded hover:bg-blue-700 transition"/>
        </form>
    </div>
</x-loyaut>
