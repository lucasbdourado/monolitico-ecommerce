<div class="w-full bg-gray-100 flex">
    <aside class="bg-gray-800 h-[100vh] w-80">
        <div>
            <h1 class="p-4 text-3xl font-bold text-gray-100 bg-[#111828]">SwartShop</h1>
        </div>
        <nav class="grid grid-rows-2 navbar">
            <ul class="flex flex-col space-y-1 p-4">
                <li><a href="{{route('dashboard.index')}}" class="text-base flex items-center text-gray-300 hover:bg-[#111828] hover:text-gray-200 rounded-md"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 m-2 relative" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        <span class="px-1">Dashboard</span></a></li>
                <li><a href="{{route('users.list')}}" class="text-base flex items-center text-gray-300 hover:bg-[#111828] hover:text-gray-200 rounded-md"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 m-2 relative" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" /></svg>
                        <span class="px-1">Usuários</span></a></li>
                <li><a href="{{route('products.index')}}" class="text-base flex items-center text-gray-300 hover:bg-[#111828] hover:text-gray-200 rounded-md"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 m-2 relative" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                        </svg>
                        <span class="px-1">Produtos</span></a></li>
                <li><a href="{{route('inventories.index')}}" class="text-base flex items-center text-gray-300 hover:bg-[#111828] hover:text-gray-200 rounded-md"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 m-2 relative" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4" />
                        </svg>
                        <span class="px-1">Estoque</span></a></li>
                <li><a href="{{route('plans.index')}}" class="text-base flex items-center text-gray-300 hover:bg-[#111828] hover:text-gray-200 rounded-md"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 m-2 relative" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                        </svg>
                        <span class="px-1">Planos</span></a></li>
                <li><a href="{{route('profiles.index')}}" class="text-base flex items-center text-gray-300 hover:bg-[#111828] hover:text-gray-200 rounded-md"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 m-2 relative" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2" />
                        </svg>
                        <span class="px-1">Perfis</span></a></li>
                <li><a href="{{route('permissions.index')}}" class="text-base flex items-center text-gray-300 hover:bg-[#111828] hover:text-gray-200 rounded-md"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 m-2 relative" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8 11V7a4 4 0 118 0m-4 8v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2z" />
                        </svg>
                        <span class="px-1">Permissões</span></a></li>
                <li><a href="#" class="text-base flex items-center text-gray-300 hover:bg-[#111828] hover:text-gray-200 rounded-md"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 m-2 relative" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path d="M9 17a2 2 0 11-4 0 2 2 0 014 0zM19 17a2 2 0 11-4 0 2 2 0 014 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0m-4 0a2 2 0 114 0m6 0a2 2 0 104 0m-4 0a2 2 0 114 0" />
                        </svg>
                        <span class="px-1">Pedidos</span></a></li>
            </ul>
            <div class="self-end flex justify-between text-lg font-bold text-gray-100 p-4">
                <h1>{{ Auth::user()->name }}</h1>
                <a href="#"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                    </svg></a>
            </div>
        </nav>
    </aside>
    {{$slot}}
</div>
