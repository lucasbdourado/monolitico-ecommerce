<x-app title="Home">
    <x-navbar/>
    <section class="h-[465px] bg-cover" style="background-image: url({{asset('imgs/background.jpg')}}); ">
        <div class="h-full w-full flex justify-center items-center text-center text-gray-200" style="background-color: rgba(38, 38, 38, 0.6);">
            <div class="w-96 space-y-6">
                <h2 class="font-bold text-3xl">Confira nosso Outlet</h2>
                <p class="text-lg">Venha conferir nosso outlet de calçados, trabalhamos com marcas oficiais, e produtos originais a pronta entrega com frete grátis para todo Brasil.</p>
                <div>
                    <a class="mt-4 text-lg py-4 px-8 font-semibold bg-gray-200 text-[#111828] rounded-md" href="#">Acessar Outlet</a>
                </div>
            </div>
        </div>
    </section>
    <main class="p-4 mt-10">
        <h3 class="font-bold text-2xl">Últimos Lançamentos</h3>
        <section class="py-4 flex gap-6">
           <!--
                <div class="shop-card p-2">
                    <a href="#">
                        <div class="relative">
                            <img src="" alt="Produto">
                        </div>
                        <div class="mt-2 flex flex-col gap-2">
                            <h2 class="text-xl font-bold"></h2>
                            <div class="text-sm">
                                <div class="flex justify-between items-center">
                                    <div>
                                        <span>R$ </span>
                                        <p class="font-semibold">12x R$ </p>
                                    </div>
                                    <a class="py-2 px-4 font-semibold bg-[#111828] text-gray-200 rounded-md" href="#">Comprar Agora</a>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>-->
            @foreach($products as $product)
                <div class="shop-card p-2">

                        <div class="relative">
                            <img src="{{ url("storage/{$product->image}") }}" alt="{{ $product->name }}">
                        </div>
                        <div class="mt-2 flex flex-col gap-2">
                            <h2 class="text-xl font-bold">{{ $product->name }}</h2>
                            <div class="text-sm">
                                <div class="my-2 flex flex-wrap gap-2">
                                    @foreach($inventories as $inventory)
                                        @if($inventory->product_id == $product->id)
                                            @if($inventory->quantity <= 0)
                                                <span class="p-2 border-2 border-gray-900 font-semibold opacity-25">{{$inventory->variation}}</span>
                                            @else
                                                <span class="p-2 border-2 border-gray-900 font-semibold">{{$inventory->variation}}</span>
                                            @endif
                                        @endif
                                    @endforeach
                                </div>
                                <div class="flex justify-between items-center">
                                    <div>
                                        <span><b>R$ </b>{{ number_format($product->price,2) }}</span>
                                        <p class="font-semibold">12x R$ {{ number_format($product->price/12,2) }}</p>
                                    </div>
                                    <a class="py-2 px-4 font-semibold bg-[#111828] text-gray-200 rounded-md" href="{{route('products.show', $product->url)}}">Comprar Agora</a>
                                </div>
                            </div>
                        </div>
                </div>
                @endforeach
        </section>
    </main>
</x-app>
