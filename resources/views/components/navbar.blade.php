<div class="bg-[#111828]">
    <nav class="py-2 px-4">
        <div class="flex justify-between text-white text-sm text-gray-300">
            <span>BRL</span>
            <div class="space-x-3">
                <a href="{{route('login')}}" class="hover:text-gray-100">Login</a>
                <a href="{{route('create')}}" class="hover:text-gray-100">Registrar-se</a>
            </div>
        </div>
    </nav>
    <nav class="bg-[#454746] py-2 px-4">
        <div class="flex justify-between text-white text-gray-300 items-center">
            <div class="w-16 h-16">
                <img src="{{asset('imgs/logo.png')}}" alt="Logo">
            </div>
            <div class="space-x-3">
                <a href="#"><span>Feminino</span></a>
                <a href="#"><span>Masculino</span></a>
                <a href="#"><span>Marcas</span></a>
                <a href="#"><span>Outlet</span></a>
            </div>
            <div class="space-x-3">
                <a href="#"><span>Pesquisar</span></a>
                <a href="#"><span>Carrinho (0)</span></a>
            </div>
        </div>
    </nav>
</div>
