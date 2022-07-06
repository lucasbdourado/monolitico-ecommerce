<x-html title="Usuários">
    <x-dashboard>
        <main class="py-4 px-6 text-[#111828] w-full">
            <h1 class="text-3xl font-bold">Editar {{$detail->name}}</h1>
            <section class="mt-4 p-4 shadow-xl">
                <form action="{{route('details.update', [$plan->id, $detail->id]) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="grid grid-cols-3 gap-4 bg-gray-50 py-4">
                        <div class="flex flex-col space-y-1 max-w-96">
                            <label for="name">Detalhe</label>
                            <input class="text-base text-[#111828] font-normal py-2 px-3 border border-gray-300 rounded-md shadow-md" type="text" id="name" name="name" value="{{$detail->name}}">
                        </div>
                    </div>
                    <div class="flex bg-gray-50">
                        <button class="py-2 px-4 bg-[#111828] text-gray-200 font-semibold rounded-md" type="submit">Editar</button>
                    </div>
                </form>
            </section>
        </main>
    </x-dashboard>
</x-html>

