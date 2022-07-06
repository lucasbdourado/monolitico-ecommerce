<x-html title="Login">
    <div class="flex h-[100vh] justify-center items-center bg-gray-100">
        <section class="bg-white p-6 rounded-lg shadow-lg space-y-4">
            <h1 class="text-center text-[#111828] font-bold text-xl">Login</h1>
            @if ($errors->any())
                <div class="text-red-500 text-sm">
                    <ul class="list-none">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{route('signin')}}" method="post">
                @csrf
                <div class="flex flex-col space-y-4 text-gray-500 text-md">
                    <div class="w-96 flex flex-col space-y-1">
                        <label for="email">E-Mail</label>
                        <input class="text-base text-[#111828] font-normal py-2 px-3 border border-gray-300 rounded-md shadow-md" type="email" id="email" name="email">
                    </div>
                    <div class="flex flex-col space-y-1">
                        <label for="password">Senha</label>
                        <input class="text-base text-[#111828] font-normal py-2 px-3 border border-gray-300 rounded-md shadow-md" type="password" id="password" name="password">
                        <span class="text-[#111828] font-semibold underline">Esqueceu sua senha?</span>
                    </div>
                    <div class="flex justify-between items-center space-x-2">
                        <span>Não tem uma conta? <a href="{{route('create')}}" class="text-[#111828] font-semibold">Registre-se</a></span>
                        <button class="py-2 px-4 text-gray-200 bg-[#111828] rounded-md hover:text-gray-50" type="submit">Entrar</button>
                    </div>
                </div>
            </form>
        </section>
    </div>
</x-html>
