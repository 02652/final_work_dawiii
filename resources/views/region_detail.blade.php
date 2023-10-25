@extends('base_template')
@section('content')
    <section>
        <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8">
            <header class="py-4">

                <h2 class="font-bold text-gray-900 sm:text-4xl">
                    Actividades de {{ $region->nombre }}
                </h2>
                
            </header>
            @if ($ofertas_turisticas->count() > 0)
                <ul class="mt-4 grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
                    @foreach ($ofertas_turisticas as $oferta)
                        <a href="{{ route('offer', $oferta->id) }}"
                            class="relative flex w-full flex-col rounded-xl bg-white bg-clip-border text-gray-700 shadow-md group">
                            <div
                                class="relative mx-4 mt-4 h-96 overflow-hidden rounded-xl bg-white bg-clip-border text-gray-700">
                                <img src="/images/tourist_offers/{{ $oferta->imagen_principal }}" alt=""
                                    class="h-full w-full object-cover transition duration-500 group-hover:scale-105 sm:h-75" />
                            </div>
                            <div class="p-6">
                                <div class="mb-2 flex items-center justify-between">
                                    <p
                                        class="block font-sans text-base font-medium leading-relaxed text-blue-gray-900 antialiased">
                                        {{ $oferta->nombre }}
                                    </p>
                                    <p
                                        class="block font-sans text-base font-medium leading-relaxed text-blue-gray-900 antialiased">
                                        ${{ $oferta->precio }}
                                    </p>
                                </div>
                                <p
                                    class="block font-sans text-sm font-normal leading-normal text-gray-700 antialiased opacity-75">
                                    {{ $oferta->descripcion }}
                                </p>
                            </div>
                        </a>
                    @endforeach

                </ul>
            @else
                <x-empty>
                    <x-slot name="title">
                        No hay actividades
                    </x-slot>
                    Busque otras actividades en otras regiones
                </x-empty>
            @endif
        </div>
        <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8">
            <header class="py-4">

                <h2 class="font-bold text-gray-900 sm:text-4xl">
                    Lugares turisticos de la region {{ $region->nombre }}
                </h2>
                <p class="mt-4 max-w-2xl text-gray-500">
                    {{ $region->descripcion }}
                </p>
            </header>

            @if ($lugares_turisticos->count() > 0)
                <ul class="mt-4 grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
                    @foreach ($lugares_turisticos as $lugar_turistico)
                        <a href="{{ route('site', $lugar_turistico->id) }}"
                            class="group relative block bg-black rounded-xl">
                            <img alt="{{ $lugar_turistico->nombre }}"
                                src="/images/tourist_sites/{{ $lugar_turistico->imagen }}"
                                class="absolute inset-0 h-full w-full object-cover opacity-75 transition-opacity group-hover:opacity-50 rounded-xl" />

                            <div class="relative p-4 sm:p-6 lg:p-8">
                                <p class="text-sm font-medium uppercase tracking-widest text-pink-500">
                                    {{ $lugar_turistico->region->nombre }}
                                </p>

                                <p class="text-xl font-bold text-white sm:text-2xl">{{ $lugar_turistico->nombre }}</p>

                                <div class="mt-32 sm:mt-48 lg:mt-64">
                                    <div
                                        class="translate-y-8 transform opacity-0 transition-all group-hover:translate-y-0 group-hover:opacity-100">
                                        <p class="text-sm text-white">
                                            {{ $lugar_turistico->descripcion }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    @endforeach

                </ul>
            @else
                <x-empty>
                    <x-slot name="title">
                        No hay lugares turisticos
                    </x-slot>
                    Busque lugares turísticos en otras regiones
                </x-empty>
            @endif


        </div>
    </section>
@endsection
