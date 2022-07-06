<x-html title="Usuários">
    <x-dashboard>
        <main class="py-4 px-6 text-[#111828] w-full">
            <h1 class="text-3xl font-bold">Criar Usuários</h1>
            <section class="mt-4 p-4 shadow-xl">
                <form action="{{route('users.store')}}" method="post">
                    @csrf
                    <div class="grid grid-cols-3 gap-4 bg-gray-50 py-4">
                        <div class="flex flex-col space-y-1 max-w-96">
                            <label for="name">Nome</label>
                            <input class="text-base text-[#111828] font-normal py-2 px-3 border border-gray-300 rounded-md shadow-md" type="text" id="name" name="name">
                        </div>
                        <div class="flex flex-col space-y-1 max-w-96">
                            <label for="email">E-Mail</label>
                            <input class="text-base text-[#111828] font-normal py-2 px-3 border border-gray-300 rounded-md shadow-md" type="email" id="email" name="email">
                        </div>
                        <div class="flex flex-col space-y-1 max-w-96">
                            <label for="password">Senha</label>
                            <input class="text-base text-[#111828] font-normal py-2 px-3 border border-gray-300 rounded-md shadow-md" type="password" id="password" name="password">
                        </div>
                        <div class="flex flex-col space-y-1 max-w-96">
                            <label for="role">Permissão</label>
                            <select class="text-base text-[#111828] font-normal py-2 px-3 border border-gray-300 rounded-md shadow-md" name="role" id="role">
                                <option value="user">User</option>
                                <option value="admin">Admin</option>
                            </select>
                        </div>
                    </div>
                    <div class="flex justify-end">
                        <button class="py-2 px-4 bg-[#111828] text-gray-200 font-semibold rounded-md" type="submit">Adicionar</button>
                    </div>
                </form>
            </section>
        </main>
    </x-dashboard>
</x-html>
