@extends('base_template')

@section('content')
    <section>
        <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8">
            <header>
                <h2 class="font-bold text-gray-900 sm:text-4xl">
                    Regiones del peru
                </h2>

                <p class="mt-4 max-w-2xl text-gray-500">
                    Explora Perú a través de sus diversas regiones. Descubre las maravillas de la costa, sierra y selva en
                    un solo lugar. Encuentra información sobre lugares turísticos, consejos de viaje y experiencias únicas.
                    Tu ventana a la diversidad de Perú. ¡Comienza tu aventura ahora!
                </p>

            </header>

            <ul class="mt-4 grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
                @foreach ($regiones as $region)
                    <a href="#" class="group relative block bg-black rounded-xl">
                        <img alt="{{ $region->nombre }}" src="images/regions/{{ $region->imagen }}"
                            class="absolute inset-0 h-full w-full object-cover opacity-75 transition-opacity group-hover:opacity-50 rounded-xl" />

                        <div class="relative p-4 sm:p-6 lg:p-8">
                            <p class="text-xl font-bold text-white sm:text-2xl">{{ $region->nombre }}</p>

                            <div class="mt-32 sm:mt-48 lg:mt-64">
                                <div
                                    class="translate-y-8 transform opacity-0 transition-all group-hover:translate-y-0 group-hover:opacity-100">
                                    <p class="text-sm text-white">
                                        {{ $region->descripcion }}
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
