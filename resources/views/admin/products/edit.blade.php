<x-html title="Usuários">
    <x-dashboard>
        <main class="py-4 px-6 text-[#111828] w-full">
            <h1 class="text-3xl font-bold">Editar Produto - {{$product->name}}</h1>
            <section class="mt-4 p-4 shadow-xl">
                <form action="{{route('products.update', $product->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="grid grid-cols-3 gap-4 bg-gray-50 py-4">
                        <div class="flex flex-col space-y-1 max-w-96">
                            <label for="name">Nome do Produto</label>
                            <input class="text-base text-[#111828] font-normal py-2 px-3 border border-gray-300 rounded-md shadow-md" type="text" id="name" name="name" value="{{ $product->name }}">
                        </div>
                        <div class="flex flex-col space-y-1 max-w-96">
                            <label for="description">Descrição</label>
                            <input class="text-base text-[#111828] font-normal py-2 px-3 border border-gray-300 rounded-md shadow-md" type="text" id="description" name="description" value="{{ $product->description }}">
                        </div>
                        <div class="flex flex-col space-y-1 max-w-96">
                            <label for="price">Preço</label>
                            <input class="text-base text-[#111828] font-normal py-2 px-3 border border-gray-300 rounded-md shadow-md" type="number" id="price" name="price" value="{{ $product->price }}">
                        </div>
                        <div class="flex justify-between items-end col-span-3">
                            <div class="flex flex-col space-y-1">
                                <label for="image">Imagem</label>
                                <input class="file:py-2 file:cursor-pointer file:px-3 file:rounded-full file:bg-[#111828] file:border-0 file:text-gray-200 text-base text-[#111828] font-normal rounded-md" type="file" id="image" name="image">
                            </div>
                            <div>
                                <button class="py-2 px-4 bg-[#111828] text-gray-200 font-semibold rounded-md" type="submit">Adicionar</button>
                            </div>
                        </div>
                    </div>
                </form>
            </section>
        </main>
    </x-dashboard>
</x-html>
