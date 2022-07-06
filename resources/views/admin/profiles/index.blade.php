<x-html title="Planos">
    <x-dashboard>
        <main class="py-4 px-6 text-[#111828] w-full">
            <h1 class="text-3xl font-bold">Controle de Perfis</h1>
            <section class="mt-4 p-4 bg-gray-50 shadow-xl">
                <header class="flex justify-between items-center">
                    <div>
                        <h6 class="text-2xl font-semibold">Perfis</h6>
                        <p>Controle de perfis da plataforma, nessa seção poderá Criar, Editar, Excluir e Vizualizar perfis</p>
                    </div>
                    <div>
                        <a class="py-2 px-4 bg-[#111828] text-gray-200 rounded-md" href="{{ route('profiles.create') }}">Adicionar</a>
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
                        <th class="py-2 px-4 text-left">Perfil</th>
                        <th class="py-2 px-4 text-left">Descrição</th>
                        <th class="py-2 px-4 text-left"></th>
                    </tr>
                    </thead>
                    <tbody class="divide-y">
                    @foreach($profiles as $profile)
                        <tr class="even:bg-gray-100">
                            <td class="py-2 px-4 text-left font-semibold text-blue-800"><a href="{{route('profiles.show', $profile->id)}}">{{ $profile->id }}</a></td>
                            <td class="py-2 px-4 text-left">{{ $profile->name }}</td>
                            <td class="py-2 px-4 text-left">{{ $profile->description }}</td>
                            <td class="py-2 px-4 text-right"><div class="flex justify-end space-x-2 font-bold text-[#111828]"><a href="{{route('profiles.edit', $profile->id)}}">Editar</a>
                                    <form action="{{route('profiles.destroy', $profile->id)}}" method="post">@csrf @method('DELETE')<button class="font-bold text-[#111828]">Excluir</button></form></div></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </section>
        </main>
    </x-dashboard>
</x-html>
