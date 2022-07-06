<x-html title="Produtos">
    <x-dashboard>
        <main class="py-4 px-6 text-[#111828] w-full">
            <h1 class="text-3xl font-bold">Controle de Estoque</h1>
            <section class="mt-4 p-4 bg-gray-50 shadow-xl">
                <header class="flex justify-between items-center">
                    <div>
                        <h6 class="text-2xl font-semibold">Estoque</h6>
                        <p>Controle de estoque de produtos da plataforma, nessa seção poderá Criar, Editar, Excluir e Vizualizar estoque de produtos</p>
                    </div>
                    <div>
                        <a class="py-2 px-4 bg-[#111828] text-gray-200 rounded-md" href="{{route('inventories.create')}}">Adicionar</a>
                    </div>
                </header>
                <form class="mt-4 space-x-2" action="#">
                    <input class="py-2 px-3 border-2 border border-gray-300 rounded-md shadow-md" type="text" name="search" placeholder="Pesquisar">
                    <button class="py-2 px-4 bg-[#111828] text-gray-200 rounded-md">Pesquisar</button>
                </form>
                <table class="w-full mt-4 border border-gray-200 divide-y shadow-md">
                    <thead class="bg-gray-200">
                    <tr>
                        <th class="py-2 px-4 text-left">ID</th>
                        <th class="py-2 px-4 text-left">Variação</th>
                        <th class="py-2 px-4 text-left">Quantidade</th>
                        <th class="py-2 px-4 text-left">ID(Produto)</th>
                        <th class="py-2 px-4 text-left"></th>
                    </tr>
                    </thead>
                    <tbody class="divide-y">
                    @foreach($inventories as $inventory)
                        <tr class="even:bg-gray-100">
                            <td class="py-2 px-4 text-left font-semibold text-blue-800"><a href="#">{{ $inventory->id }}</a></td>
                            <td class="py-2 px-4 text-left">{{ $inventory->variation }}</td>
                            <td class="py-2 px-4 text-left">{{ $inventory->quantity }}</td>
                            <td class="py-2 px-4 text-left">{{ \App\Models\Product::find($inventory->product_id)->name }}</td>
                            <td class="py-2 px-4 text-right"><div class="flex justify-end space-x-2 font-bold text-[#111828]"><a href="{{route('inventories.edit', $inventory->id)}}">Editar</a>
                                    <form action="{{route('inventories.destroy', $inventory->id)}}" method="post">@csrf @method('DELETE')<button class="font-bold text-[#111828]">Excluir</button></form></div></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </section>
        </main>
    </x-dashboard>
</x-html>
