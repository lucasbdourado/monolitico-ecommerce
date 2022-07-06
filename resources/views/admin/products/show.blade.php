 <x-app title="Produto">
    <x-navbar/>
    <section class="container mx-auto py-4">
        <div class="my-2 grid grid-cols-3 gap-2">
            <div class="w-9/12 h-9/12 justify-self-center min-w-[247px] p-4 col-span-2">
                <img src="{{ url("storage/{$product->image}") }}" alt="{{$product->name}}">
            </div>
            <div class="flex flex-col justify-around p-4">
                <div class="space-y-4">
                    <h1 class="text-3xl font-bold text-[#111828]">{{$product->name}}</h1>
                    <div class="flex justify-between items-center text-2xl italic">
                        <h2>R$ {{$product->price}}</h2>
                        <h2 class="flex-col text-right"><p>Em até</p><span>12x R$ {{ number_format($product->price/12,2) }}</span></h2>
                    </div>
                </div>
                <div>
                    <div>
                        @isset($inventories)
                        <p class="font-bold">Variações / Tamanho:</p>
                        @endisset
                    </div>
                    <div class="my-2 flex flex-wrap gap-2">
                    @isset($inventories)
                        @foreach($inventories as $inventory)
                            @if($inventory->product_id == $product->id)
                                @if($inventory->quantity <= 0)
                                    <span class="p-2 border-2 border-gray-900 font-semibold opacity-25">{{$inventory->variation}}</span>
                                @else
                                    <span class="p-2 border-2 border-gray-900 font-semibold">{{$inventory->variation}}</span>
                                @endif
                            @endif
                        @endforeach
                    @else
                        <h1 class="text-xl italic underline text-[#111828]">Esgotado</h1>
                    @endisset
                    </div>

                </div>
                <div class="space-y-2">
                    <p class="font-bold">Descrição:</p>
                    <h2>{{$product->description}}</h2>
                </div>
                <div>
                    <button class="py-2 w-full bg-[#111828] text-gray-200 rounded-md">Adicionar ao Carrinho</button>
                </div>
            </div>
        </div>
    </section>
</x-app>
