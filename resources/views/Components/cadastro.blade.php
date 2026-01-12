<x-loyaut>
    <div class=" flex justify-center items-center mt-60">
        <form action="/register" method="POST" class=" flex flex-col gap-4 border w-230 p-4 rounded">
            @csrf
            <h1 class=" text-2xl font-bold">Cadastro</h1>
            <input type="text" name="name" id=""
            placeholder="Digite seu nome"
            required
            class=" border p-2 rounded @error('name') border-2 border-red-500 @enderror"/>
            @error('name')
                <p class=" font-bold text-red-500">{{ $message }}</p>
            @enderror

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

            <input type="password"
            name="password_confirmation"
            placeholder="confirmar senha"
            required
            class=" border p-2 rounded @error('password') border-2 border-red-500 @enderror">
            @error('password')
                <p class=" font-bold text-red-500">{{ $message }}</p>
            @enderror

            <button type="submit" class=" bg-blue-500 text-white p-2 rounded hover:bg-blue-600"
            >Entrar</button>
            <p>Já tem conta? <a href="/login" class=" text-blue-500 hover:underline">Login</a></p>

        </form>
    </div>
</x-loyaut>
