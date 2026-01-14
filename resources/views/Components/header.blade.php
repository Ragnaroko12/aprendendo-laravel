<header class=" bg-white border-b-2 h-20 flex flex-row p-1">
    {{--  Mostrar algo no header se o usuario estiver autenticado --}}
@auth
    <h1 class=" text-2xl ">Bem vindo {{ Auth::user()->name }}</h1>


        @if (request()->is('habits'))
            <nav class=" flex flex-row gap-4 mt-4 ml-auto">
                <a href="/dashboard" class=" border-2 h-12 border-black bg-amber-300 text-white p-2 cursor-pointer rounded hover:bg-amber-400">Voltar</a>
            </nav>
        @else
            <nav class=" flex flex-row gap-4 mt-4 ml-auto">
                <form action="/logout" method="POST">
                    @csrf
                    <button type="submit" class=" border-2 border-black bg-amber-300 text-white p-2 rounded cursor-pointer hover:bg-amber-400">Logout</button>
                </form>
            </nav>
        @endif

@endauth
     {{-- Mostrar algo no header se o usuario não estiver autenticado --}}
@guest
    @if (request()->is('login'))
        <nav class=" flex flex-row gap-4 mt-4 ml-auto">
            <a href="/" class=" border-2 border-black h-12 bg-amber-300 text-white p-2 rounded cursor-pointer hover:bg-amber-400">voltar</a>
        </nav>
    @elseif (request()->is('register'))
         <nav class=" flex flex-row gap-4 mt-4 ml-auto">
            <a href="/login" class=" border-2 h-12 border-black bg-amber-300 cursor-pointer text-white p-2 rounded hover:bg-amber-400">voltar</a>
        </nav>
    @else
        <nav class=" flex flex-row gap-4 mt-4 ml-auto">
            <a href="/login" class=" border-2 h-12 border-black cursor-pointer bg-amber-300 text-white p-2 rounded hover:bg-amber-400">Login</a>
        </nav>
    @endif
@endguest
</header>
