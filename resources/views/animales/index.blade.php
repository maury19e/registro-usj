@extends('layouts.app')

@section('content')

    <div class="flex justify-between items-center mb-8">

        <div>
            <h2 class="text-3xl font-bold text-slate-900">
                Animales registrados
            </h2>

            <p class="text-slate-500 mt-1">
                Administrá los animales cargados en el sistema
            </p>
        </div>

        <a
            href="{{ route('animales.create') }}"
            class="bg-blue-600 text-white px-5 py-3 rounded-lg hover:bg-blue-700"
        >
            Registrar animal
        </a>

    </div>


    @if(count($animales) == 0)

        <div class="bg-white border border-slate-200 rounded-lg p-8 text-center">

            <p class="text-slate-500">
                No hay animales registrados.
            </p>

        </div>

    @else

        <div class="overflow-x-auto">

            <table class="w-full bg-white border border-slate-200 rounded-lg">

                <thead class="bg-slate-100">

                    <tr>

                        <th class="text-left px-6 py-4">
                            Nombre
                        </th>

                        <th class="text-left px-6 py-4">
                            Especie
                        </th>

                        <th class="text-left px-6 py-4">
                            Edad
                        </th>

                        <th class="text-left px-6 py-4">
                            Acciones
                        </th>

                    </tr>

                </thead>

                <tbody>

                    @foreach($animales as $animal)

                        <tr class="border-t border-slate-200">

                            <td class="px-6 py-4">
                                {{ $animal['nombre'] }}
                            </td>

                            <td class="px-6 py-4">
                                {{ $animal['especie'] }}
                            </td>

                            <td class="px-6 py-4">
                                {{ $animal['edad'] }} años
                            </td>

                            <td class="px-6 py-4 flex gap-3">

                                <a
                                    href="{{ route('animales.edit', ['id' => $animal['id']]) }}"
                                    class="bg-amber-500 text-white px-4 py-2 rounded hover:bg-amber-600"
                                >
                                    Editar
                                </a>


                                <form
                                    action="{{ route('animales.destroy', ['id' => $animal['id']]) }}"
                                    method="POST"
                                >

                                    @csrf
                                    @method('DELETE')

                                    <button
                                        type="submit"
                                        class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700"
                                    >
                                        Eliminar
                                    </button>

                                </form>

                            </td>

                        </tr>

                    @endforeach

                </tbody>

            </table>

        </div>

    @endif

@endsection