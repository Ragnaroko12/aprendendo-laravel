<x-loyaut>
    <div class="p-5 flex flex-col gap-4">

        <x-navbar/>
        <div class="mt-2 flex flex-col gap-2 p-4">
            <p class="text-2xl text-center font-semibold">
                Gerenciar hábitos:
            </p>

            <ul class="flex flex-col gap-2">
                @forelse ($habits as $item)
                    <li class="flex flex-row bg-orange-300 shadow-2xl border-2 rounded p-3 items-center gap-3">
                        <input type="checkbox" name="" class=" w-5 h-5" {{ $item->is_completed ? 'checked' : '' }}  disabled/>
                        <span class="font-bold">
                            {{ $item->name }}
                        </span>
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
            <a href="{{ route('habits.create') }}" class="mt-4 border-2 inline-block w-25 bg-orange-500 hover:bg-orange-600 font-bold p-2  rounded">
                + Habitos
            </a>
        </div>
    </div>
</x-loyaut>


 <span class="text-gray-400">

