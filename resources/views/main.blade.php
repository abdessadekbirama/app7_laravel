@php
    $products = [
        [
            'name' => 'product',
            'description' => 'Product description blablabla',
            'price' => 99.99,
            'img' => 'weapon6.png'
        ],
        [
            'name' => 'product2',
            'description' => 'Product description blablabla',
            'price' => 99.99,
            'img' => 'weapon4.png'
        ],
        [
            'name' => 'product3',
            'description' => 'Product description blablabla',
            'price' => 99.99,
            'img' => 'weapon5.png'
        ],
        [
            'name' => 'product4',
            'description' => 'Product description blablabla',
            'price' => 99.99,
            'img' => 'weapon4.png'
        ],
        [
            'name' => 'product5',
            'description' => 'Product description blablabla',
            'price' => 99.99,
            'img' => 'weapon5.png'
        ],
        [
            'name' => 'product6',
            'description' => 'Product description blablabla',
            'price' => 99.99,
            'img' => 'weapon6.png'
        ],
    ];
@endphp


<div class="py-12 bg-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
            @foreach ($products as $product)
                <div class="bg-white shadow-sm rounded-lg overflow-hidden">
                    <div class="p-4">
                        <img class="h-40 w-full object-cover object-center object-scale-down" src="{{ asset("images/".$product['img'])}}"
                            alt="{{ $product['name'] }}">
                        <h2 class="mt-2 text-xl font-semibold text-gray-800">{{ $product['name'] }}</h2>
                        <p class="mt-1 text-sm text-gray-600">{{ $product['description'] }}</p>
                    </div>
                    <div class="flex items-center justify-between p-4 bg-gray-100">
                        <span class="text-lg font-semibold text-gray-800">{{ $product['price'] }}</span>
                        <button class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">Add to Cart</button>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
{{-- <div class="py-12 bg-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
            @foreach ($products as $product)
                <div class="bg-white shadow-sm rounded-lg overflow-hidden">
                    <div class="p-4">
                        <img class="h-40 w-full object-cover object-center" src="{{ asset("images/".$product['img'])}}"
                            alt="{{ $product['name'] }}">
                        <h2 class="mt-2 text-xl font-semibold text-gray-800">{{ $product['name'] }}</h2>
                        <p class="mt-1 text-sm text-gray-600">{{ $product['description'] }}</p>
                    </div>
                    <div class="flex items-center justify-between p-4 bg-gray-100">
                        <span class="text-lg font-semibold text-gray-800">{{ $product['price'] }}</span>
                        <button class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">Add to
                            Cart</button>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div> --}}
