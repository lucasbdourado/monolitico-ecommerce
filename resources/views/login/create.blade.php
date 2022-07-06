<x-html title="Registrar">
    <div class="flex h-[100vh] justify-center items-center bg-gray-100">
        <section class="bg-white p-6 rounded-lg shadow-lg space-y-4">
            <h1 class="text-center text-[#111828] font-bold text-xl">Cadastro</h1>
            @if ($errors->any())
                <div class="text-red-500 text-sm">
                    <ul class="list-none">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{route('register')}}" method="post">
                @csrf
                <div class="flex flex-col space-y-4 text-gray-500 text-md">
                    <div class="w-96 flex flex-col space-y-1">
                        <label for="name">Nome</label>
                        <input class="text-base text-[#111828] font-normal py-2 px-3 border border-gray-300 rounded-md shadow-md" type="name" id="name" name="name">
                    </div>
                    <div class="w-96 flex flex-col space-y-1">
                        <label for="email">E-Mail</label>
                        <input class="text-base text-[#111828] font-normal py-2 px-3 border border-gray-300 rounded-md shadow-md" type="email" id="email" name="email">
                    </div>
                    <div class="flex flex-col space-y-1">
                        <label for="password">Senha</label>
                        <input class="text-base text-[#111828] font-normal py-2 px-3 border border-gray-300 rounded-md shadow-md" type="password" id="password" name="password">
                    </div>
                    <div class="flex justify-between items-center space-x-2">
                        <a href="{{route('login')}}" class="text-[#111828] font-semibold underline">Já tenho cadastro!</a>
                        <button class="py-2 px-4 text-gray-200 bg-[#111828] rounded-md hover:text-gray-50" type="submit">Cadastrar</button>
                    </div>
                </div>
            </form>
        </section>
    </div>
</x-html>
