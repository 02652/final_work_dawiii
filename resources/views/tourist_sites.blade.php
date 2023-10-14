@extends('base_template')
@section('content')
    <section>
        <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8">
            <header class="py-4">
                    
                <h2 class="font-bold text-gray-900 sm:text-4xl">
                    Lugares turisticos de la region
                </h2>
            </header>

            <ul class="mt-4 grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
                @foreach ($lugares_turisticos as $lugar_turistico)
                    <a href="#" class="group relative block bg-black rounded-xl">
                        <img alt="{{ $lugar_turistico->nombre }}" src="images/tourist_sites/{{ $lugar_turistico->imagen }}"
                            class="absolute inset-0 h-full w-full object-cover opacity-75 transition-opacity group-hover:opacity-50 rounded-xl" />

                        <div class="relative p-4 sm:p-6 lg:p-8">
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

        </div>
    </section>
@endsection