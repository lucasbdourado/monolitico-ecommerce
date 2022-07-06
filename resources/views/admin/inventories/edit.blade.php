<x-html title="Usuários">
    <x-dashboard>
        <main class="py-4 px-6 text-[#111828] w-full">
            <h1 class="text-3xl font-bold">Editar Estoque</h1>
            <section class="mt-4 p-4 shadow-xl">
                <form action="{{route('inventories.update', $inventory->id)}}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="grid grid-cols-3 gap-4 bg-gray-50 py-4">
                        <div class="flex flex-col space-y-1 max-w-96">
                            <label for="variation">Variação</label>
                            <input class="text-base text-[#111828] font-normal py-2 px-3 border border-gray-300 rounded-md shadow-md" type="text" id="variation" name="variation" value="{{$inventory->variation}}">
                        </div>
                        <div class="flex flex-col space-y-1 max-w-96">
                            <label for="quantity">Quantidade</label>
                            <input class="text-base text-[#111828] font-normal py-2 px-3 border border-gray-300 rounded-md shadow-md" type="number" id="quantity" name="quantity" value="{{$inventory->quantity}}">
                        </div>
                        <div class="flex flex-col space-y-1 max-w-96">
                            <label for="product_id">Produto</label>
                            <select class="text-base text-[#111828] font-normal py-2 px-3 border border-gray-300 rounded-md shadow-md" name="product_id" id="product_id">
                                @foreach($products as $product)
                                    @if($product->id == $inventory->product_id)
                                        <option value="{{$product->id}}" selected>{{$product->title}}</option>
                                    @else
                                        <option value="{{$product->id}}">{{$product->title}}</option>
                                    @endif
                                @endforeach
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
