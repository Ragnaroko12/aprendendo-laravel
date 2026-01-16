<x-loyaut>
    <div class=" flex justify-center items-center mt-60">
        <form action="/register" method="POST" class=" bg-white flex flex-col gap-4 border w-230 p-4 rounded">
            @csrf
            <h1 class=" text-2xl font-bold">Cadastro</h1>
            <input type="text" name="name" id=""
            placeholder="Digite seu nome"
            required
            class="p-2 rounded {{ $errors->has('name') ? 'border-2 border-red-500': 'border' }}"/>
            @error('name')
                <p class=" font-bold text-red-500">{{ $message }}</p>
            @enderror

            <input type="text"
            name="email"
            placeholder="Email"
            required
            class=" {{ $errors->has('email') ? 'border-2 border-red-500': 'border' }} p-2 rounded "/>
            @error('email')
                <p class=" font-bold text-red-500">{{ $message }}</p>
            @enderror

            <input type="password"
            name="password"
            placeholder="Senha"
            required
            class=" {{ $errors->has('password') ? 'border-2 border-red-500': 'border' }} p-2 rounded"/>
            <input type="password"
            name="password_confirmation"
            placeholder="confirmar senha"
            required
            class=" p-2 rounded {{ $errors->has('password') ? 'border-2 border-red-500': 'border' }} ">
            @error('password')
                <p class=" font-bold text-red-500">{{ $message }}</p>
            @enderror

            <button type="submit" class=" bg-blue-500 text-white p-2 rounded hover:bg-blue-600"
            >Entrar</button>
            <p>Já tem conta? <a href="/login" class=" text-blue-500 hover:underline">Login</a></p>

        </form>
    </div>
</x-loyaut>
