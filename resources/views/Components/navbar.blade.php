<div>
    <a href="/dashboard" class=" hover:text-black border-r-3 pr-2 border-orange-600 {{ Route::is('dashboard') ? 'underline font-bold' : 'text-gray-700 font-semibold' }}">
        Hoje
    </a>
    <a href="#" class=" pl-2 hover:text-black border-r-3 pr-2 border-orange-600 {{ Route::is('historico') ? 'underline font-bold' : 'text-gray-700 font-semibold' }}">
        historico
    </a>
    <a href="#" class="pl-2 hover:text-black border-r-3 pr-2 border-orange-600 {{ Route::is('calendario') ? 'underline font-bold' : 'text-gray-700 font-semibold' }}">
        calendario
    </a>
    <a href="{{ route('habits.settings') }}" class=" pl-2 hover:text-black  pr-2  {{ Route::is('habits.settings') ? 'underline font-bold' : 'text-gray-700 font-semibold' }}">
        Gerenciar hábitos
    </a>

</div>
