@extends('base_template')
@section('content')
    <section class="w-full">
        <div class="mx-auto w-full px-4 py-8 sm:px-6 sm:py-12 lg:px-8">
            <div class="mx-auto max-w-6xl">
                <header class="text-center">
                    <h1 class="text-xl font-bold text-gray-900 sm:text-3xl">Tu carrito</h1>
                </header>

                <div class="mt-8">
                    <ul class="space-y-4">
                        @if ($carritos->count() == 0)
                            <x-empty>
                                <x-slot name="title">
                                    No hay actividades en su carrito
                                </x-slot>
                                Busque y agregue actividades a su carrito 
                            </x-empty>
                        @else
                            @foreach ($carritos as $carrito)
                                <li class="flex items-center gap-4">
                                    <a href="/cart/show/{{ $carrito->ofertaTuristica->id }}/{{ $carrito->id }}"
                                        class="flex items-center gap-4">
                                        <img src="/images/tourist_offers/{{ $carrito->ofertaTuristica->imagen_principal }}"
                                            alt="" class="h-40 w-40 rounded object-cover" />

                                        <div>
                                            <h3 class="text-xl text-gray-900">{{ $carrito->ofertaTuristica->nombre }}</h3>

                                            <dl class="mt-0.5 space-y-px text-sm text-gray-600">
                                                <div>
                                                    <dt class="inline">Posibilidades:</dt>
                                                    <dd class="inline">
                                                        {{ $carrito->ofertaTuristica->cartera_posibilidades }}
                                                    </dd>
                                                </div>

                                                <div>
                                                    <dt class="inline">Precio:</dt>
                                                    <dd class="inline">${{ $carrito->ofertaTuristica->precio }}</dd>
                                                </div>
                                            </dl>
                                        </div>
                                    </a>


                                    <div class="flex flex-1 items-center justify-end gap-2">
                                        <a class="text-gray-600 transition hover:text-red-600"
                                            href="{{ route('cart_delete', $carrito->id) }}">
                                            <span class="sr-only">Remove item</span>

                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="h-4 w-4">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                            </svg>
                                        </a>

                                    </div>
                                </li>
                            @endforeach
                        @endif

                    </ul>



                </div>
            </div>
        </div>
    </section>
@endsection
