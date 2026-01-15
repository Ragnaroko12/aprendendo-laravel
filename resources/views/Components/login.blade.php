<x-loyaut>
    <div class=" flex justify-center items-center mt-60">
        <form action="/login" method="POST" class=" bg-white flex flex-col gap-4 border w-230 p-4 rounded">
            @csrf
            <h1 class=" text-2xl font-bold">Login</h1>
            <input type="text"
            name="email"
            placeholder="Email"
            required
            class=" border p-2 rounded @error('email') border-2 border-red-500 @enderror"/>
            @error('email')
                <p class=" font-bold text-red-500">{{ $message }}</p>
            @enderror

            <input type="password"
            name="password"
            placeholder="Senha"
            required
            class=" border p-2 rounded @error('password') border-2 border-red-500 @enderror"/>
            @error('password')
                <p class=" font-bold text-red-500">{{ $message }}</p>
            @enderror
            <button type="submit" class=" bg-blue-600 text-white p-2 rounded hover:bg-blue-500"
            >Entrar</button>
            <p>Não tem conta? <a href="/register" class=" text-blue-500 hover:underline">Cadastre-se</a></p>

        </form>
    </div>
</x-loyaut>
