<x-loyaut>
    <div class="p-5 flex flex-col gap-4">

        <x-navbar/>
        <div class="mt-2 flex flex-col gap-2 p-4">
            <p class="text-2xl text-center font-semibold">
                {{ date('d/m/y') }}
            </p>

            <ul class="flex flex-col gap-2">
                @forelse ($habits as $item)
                    <li class="flex flex-row bg-orange-300 shadow-2xl border-2 rounded p-3 items-center gap-3">
                        @php
                            $wascompletedToday = $item->habitLogs->where('user_id', auth()->id())
                            ->where('completed_at', \Carbon\Carbon::today()->toDateString())
                            ->isNotEmpty();
                        @endphp
                        <form action="{{ route('habits.toggle', $item->id) }}" method="post" id="form-{{ $item->id }}">
                            @csrf

                            <input type="checkbox" name="" class=" w-5 h-5" {{ $item->completed_at ? 'checked' : '' }} {{ $wascompletedToday ? 'checked' : '' }}

                            onchange="document.getElementById('form-{{ $item->id }}').submit()"
                            />
                        </form>
                        <span class="font-bold">
                            {{ $item->name }}
                        </span>

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

