@extends('base_template')
@section('content')
    <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8">
        <header class="py-4">

            <h2 class="font-bold text-gray-900 sm:text-4xl">
                Actividades
            </h2>
        </header>
        <ul class="mt-4 grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
            @foreach ($ofertas_turisticas as $oferta)
                <a class="relative flex w-full flex-col rounded-xl bg-white bg-clip-border text-gray-700 shadow-md group">
                    @php
                        $images = explode(';', $oferta->imagenes);
                        $firstImage = reset($images);
                    @endphp
                    <div class="relative mx-4 mt-4 h-96 overflow-hidden rounded-xl bg-white bg-clip-border text-gray-700">
                        <img src="images/tourist_offers/{{ $firstImage }}" alt=""
                            class="h-full w-full object-cover transition duration-500 group-hover:scale-105 sm:h-75" />
                    </div>
                    <div class="p-6">
                        <div class="mb-2 flex items-center justify-between">
                            <p class="block font-sans text-base font-medium leading-relaxed text-blue-gray-900 antialiased">
                                {{ $oferta->nombre }}
                            </p>
                            <p class="block font-sans text-base font-medium leading-relaxed text-blue-gray-900 antialiased">
                                ${{ $oferta->precio }}
                            </p>
                        </div>
                        <p class="block font-sans text-sm font-normal leading-normal text-gray-700 antialiased opacity-75">
                            {{ $oferta->descripcion }}
                        </p>
                    </div>
                </a>
            @endforeach

        </ul>
    </div>
@endsection
