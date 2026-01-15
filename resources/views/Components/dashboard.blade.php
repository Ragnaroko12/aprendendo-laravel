<x-loyaut>
    <div class="p-5 flex flex-col gap-4">
        <div class="justify-center items-center flex flex-col gap-3">
            <h1 class="text-5xl">Dashboard</h1>

            <a href="{{ route('habits.create') }}" class="bg-white p-2 rounded hover:bg-gray-100 border transition font-medium">
                Cadastrar novo hábito
            </a>
        </div>

        <div class="border-2 bg-white w-100 rounded mt-2 flex flex-col gap-2 p-4">
            <p class="text-2xl">
                Os hábitos que você tem são:
            </p>

            <ul class="flex flex-col gap-2">
                @forelse ($habits as $item)
                    <li class="flex items-center gap-2">
                        <span class="font-bold">
                            {{ $loop->iteration }} - {{ $item->name }}
                        </span>

                        <span class="text-gray-400">
                            ({{ $item->habitlogs->count() }})
                        </span>

                        <div class="ml-auto flex gap-2">
                            <form action="{{ route('habits.destroy', $item->id) }}" method="POST">
                                @csrf
                                @method('DELETE')

                                <button type="submit" class="cursor-pointer hover:scale-110 transition">
                                    <x-icons.lixo/>
                                </button>
                            </form>
                            <a href="{{ route('habits.edit', $item->id) }}" class="cursor-pointer hover:scale-110 transition">
                                <x-icons.lapis/>
                            </a>
                        </div>
                    </li>
                @empty
                    <li class="text-gray-500">
                        Nenhum hábito cadastrado.
                    </li>
                @endforelse
            </ul>
        </div>
    </div>
</x-loyaut>
