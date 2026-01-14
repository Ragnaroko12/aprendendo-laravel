<x-loyaut>
    <div class=" p-5 flex flex-col gap-4">
        <div class=" justify-center items-center flex flex-col gap-3">
            <h1 class=" text-5xl">dashboard</h1>
            <a href="/habits" class=" bg-white p-2 rounded hover:bg-gray-100 border transition font-medium">Cadastrar novo hábito</a>
        </div>
        <div class="border-2 bg-white rounded mt-2 flex flex-col gap-2 p-2 w-100">
           <p class=" text-2xl">os habitos que voçe tem são;
                <ul class=" p-2 list-inside">
                    @forelse ($habits as $item)

                        <li class="flex flex-row gap-2"> <p class="font-bold"> {{ $loop->iteration }} - {{ $item->name }}</p>
                            <p class=" text-gray-400">({{ $item->habitlogs->count()}})</p>
                    <form action="{{ route('habits.destroy', $item->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                            <button type="submit" class="ml-auto cursor-pointer hover:scale-110 transition">
                                <x-icons.lixo/>
                            </button>
                        </li>
                    </form>
                    @empty
                        <li>Nenhum hábito cadastrado.</li>
                    @endforelse
                </ul>
           </p>
        </div>
    </div>
</x-loyaut>
