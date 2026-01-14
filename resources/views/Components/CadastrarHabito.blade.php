<x-loyaut>
    <div class=" flex justify-center items-center mt-60">
        <form action="{{ route('habits.store') }}" method="POST" class=" flex flex-col gap-4 border w-230 p-4 bg-white rounded">
            @csrf
            <h1 class=" font-bold text-2xl text-center">Cadastrar Hábito</h1>
            <input type="text" name="name" placeholder="EX: Beber 2L agua " class=" border p-2 rounded @error('name') border-red-500 @enderror " required/>
            @error('name')
                <p class=" text-red-500 font-bold">{{ $message }}</p>
            @enderror
            <input type="submit" value="Cadastrar hábito" class=" bg-blue-500 text-white p-2 rounded hover:bg-blue-700 transition"/>
        </form>
    </div>
</x-loyaut>
