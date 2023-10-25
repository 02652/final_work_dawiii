@extends('base_template')

@section('content')
    <section class="mb-20">
        <div class="relative overflow-hidden bg-cover bg-no-repeat"
            style="
        background-position: 50%;
        background-image: url('https://mdbcdn.b-cdn.net/img/new/slides/146.webp');
        height: 500px;
      ">
            <div
                class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-[hsla(0,0%,0%,0.75)] bg-fixed">
                <div class="flex h-full items-center justify-center">
                    <div class="px-6 text-center text-white md:px-12">
                        <h1 class="mt-2 mb-16 text-5xl font-bold tracking-tight md:text-6xl xl:text-7xl">
                            Los lugares del Perú mas impresionantes<br /><span> estan aqui</span>
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8">
            <header class="py-4">

                <h2 class="font-bold text-gray-900 sm:text-4xl">
                    Actividades mas populares
                </h2>
                <p class="mt-4 max-w-2xl text-gray-500">
                    Explora Perú de la manera que más te guste. Descubre una variedad de emocionantes actividades en
                    nuestros destinos turísticos, desde caminatas hasta degustaciones culinarias y aventuras en la selva.
                    ¡Vive experiencias únicas en Perú!
                </p>
            </header>
            <ul class="mt-4 grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
                @foreach ($ofertas_turisticas as $oferta)
                    <a href="{{ route('offer', $oferta->id) }}"
                        class="relative flex w-full flex-col rounded-xl bg-white bg-clip-border text-gray-700 shadow-md group">
                        <div
                            class="relative mx-4 mt-4 h-96 overflow-hidden rounded-xl bg-white bg-clip-border text-gray-700">
                            <img src="images/tourist_offers/{{ $oferta->imagen_principal }}" alt=""
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
            <div class="flex align-center justify-center w-full">
                <a class="inline-block  mt-8 rounded border border-current px-8 py-3 text-sm font-medium text-indigo-600 transition hover:scale-110 hover:shadow-xl focus:outline-none focus:ring active:text-indigo-500"
                    href="{{ route('tourist_offers') }}">
                    Ver mas
                </a>
            </div>

        </div>
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
                    <a href="{{ route('region', $region->id) }}" class="group relative block bg-black rounded-xl">
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
