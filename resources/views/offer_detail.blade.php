@extends('base_template')
@section('content')
    <div class="container mx-auto px-5 py-2 lg:px-32 lg:pt-24">

        <div class="bg-white">
            <div class="pt-6">

                <div class="-m-1 flex flex-wrap md:-m-2 mt-6">
                    <div class="flex w-3/5 flex-wrap">
                        <div class="w-full p-1 md:p-2">
                            <img alt="gallery" class="block h-full w-full rounded-lg object-cover object-center"
                                src="/images/tourist_offers/{{ $imagenes[0] }}" />
                        </div>
                    </div>
                    <div class="flex w-2/5 flex-wrap">
                        <div class="w-full p-1 md:p-2">
                            <img alt="gallery" class="block h-full w-full rounded-lg object-cover object-center"
                                src="/images/tourist_offers/{{ $imagenes[1] }}" />
                        </div>
                        <div class="w-1/2 p-1 md:p-2">
                            <img alt="gallery" class="block h-full w-full rounded-lg object-cover object-center"
                                src="/images/tourist_offers/{{ $imagenes[2] }}" />
                        </div>
                        <div class="w-1/2 p-1 md:p-2">
                            <img alt="gallery" class="block h-full w-full rounded-lg object-cover object-center"
                                src="/images/tourist_offers/{{ $imagenes[3] }}" />
                        </div>
                    </div>
                </div>

                <div
                    class="mx-auto max-w-2xl px-4 pb-16 pt-10 sm:px-6 lg:grid lg:max-w-7xl lg:grid-cols-3 lg:grid-rows-[auto,auto,1fr] lg:gap-x-8 lg:px-8 lg:pb-24 lg:pt-16">
                    <div class="lg:col-span-2 lg:border-r lg:border-gray-200 lg:pr-8">
                        <h1 class="text-2xl font-bold tracking-tight text-gray-900 sm:text-3xl">
                            {{ $oferta_turistica->nombre }}</h1>
                    </div>

                    <!-- Options -->
                    <div class="mt-4 lg:row-span-3 lg:mt-0">
                        <h2 class="sr-only">Product information</h2>
                        <div class="mt-1">
                            <h3 class="">Desde</h3>
                        </div>

                        <p class="text-3xl tracking-tight font-bold text-gray-900">${{ $oferta_turistica->precio }}</p>

                        <!-- Reviews -->
                        <div class="mt-1">
                            <h3 class="">por persona</h3>
                        </div>

                        @if (Auth::check())
                            @if ($enCarrito)
                                <a href="{{ route('cart_delete', $cart->id) }}"
                                    class="mt-10 flex w-full items-center justify-center rounded-md border border-transparent bg-red-600 px-8 py-3 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2">Quitar
                                    del carrito</a>
                            @else
                                <form class="mt-10" method="POST" action="{{ route('cart_create') }}">
                                    @csrf
                                    <input type="text" value="{{ $oferta_turistica->id }}" name="oferta" class="hidden">
                                    <button type="submit"
                                        class="mt-10 flex w-full items-center justify-center rounded-md border border-transparent bg-indigo-600 px-8 py-3 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Agregar
                                        al carrito</button>
                                </form>
                            @endif
                        @else
                            <a href="{{ route('login') }}"
                                class="mt-10 flex w-full items-center justify-center rounded-md border border-transparent bg-indigo-600 px-8 py-3 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Inicie
                                sesion para agregar al carrito</a>
                        @endif
                    </div>

                    <div class="py-10 lg:col-span-2 lg:col-start-1 lg:border-r lg:border-gray-200 lg:pb-16 lg:pr-8 lg:pt-6">
                        <!-- Description and details -->
                        <div>
                            <h3 class="sr-only">Description</h3>

                            <div class="space-y-6">
                                <p class="text-base text-gray-900">{{ $oferta_turistica->descripcion }}</p>
                            </div>
                        </div>

                        <div class="mt-10">
                            <h3 class="text-sm font-medium text-gray-900">Posibilidades</h3>

                            <div class="mt-4">
                                <ul role="list" class="list-disc space-y-2 pl-4 text-sm">
                                    @foreach ($posibilidades as $posibilidad)
                                        <li class="text-gray-400"><span class="text-gray-600">{{ $posibilidad }}</span>
                                        </li>
                                    @endforeach

                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>



    </div>
@endsection
