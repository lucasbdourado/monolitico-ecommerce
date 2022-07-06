<x-html title="Usuários">
    <x-dashboard>
        <main class="py-4 px-6 text-[#111828] w-full">
            <h1 class="text-3xl font-bold">Editar Usuário - {{$user->name}}</h1>
            <section class="mt-4 p-4 shadow-xl">
                <form action="{{route('users.update', $user->id)}}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="grid grid-cols-3 gap-4 bg-gray-50 py-4">
                        <div class="flex flex-col space-y-1 max-w-96">
                            <label for="name">Nome</label>
                            <input class="text-base text-[#111828] font-normal py-2 px-3 border border-gray-300 rounded-md shadow-md" type="text" id="name" name="name" value="{{ $user->name }}">
                        </div>
                        <div class="flex flex-col space-y-1 max-w-96">
                            <label for="email">E-Mail</label>
                            <input class="text-base text-[#111828] font-normal py-2 px-3 border border-gray-300 rounded-md shadow-md" type="email" id="email" name="email" value="{{ $user->email }}">
                        </div>
                        <div class="flex flex-col space-y-1 max-w-96">
                            <label for="role">Permissão</label>
                            <select class="text-base text-[#111828] font-normal py-2 px-3 border border-gray-300 rounded-md shadow-md" name="role" id="role">
                                @if($user->role === 'user')
                                    <option value="user" selected>User</option>
                                    <option value="admin">Admin</option>
                                @else
                                    <option value="admin" selected>Admin</option>
                                    <option value="user">User</option>
                                @endif
                            </select>
                        </div>
                    </div>
                    <div class="flex justify-end">
                        <button class="py-2 px-4 bg-[#111828] text-gray-200 font-semibold rounded-md" type="submit">Editar</button>
                    </div>
                </form>
            </section>
        </main>
    </x-dashboard>
</x-html>

