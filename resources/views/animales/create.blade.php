@extends('layouts.app')

@section('content')

    <div class="max-w-xl mx-auto bg-white border border-slate-200 rounded-xl p-8">

        <h2 class="text-2xl font-bold text-slate-900 mb-6">
            Registrar Animal
        </h2>

        <form action="/animales" method="POST" class="space-y-5">

            @csrf

            <div>
                <label for="nombre" class="block mb-2 font-medium text-slate-700">
                    Nombre
                </label>

                <input
                    type="text"
                    id="nombre"
                    name="nombre"
                    required
                    class="w-full border border-slate-300 rounded-lg px-4 py-2"
                >
            </div>

            <div>
                <label for="especie" class="block mb-2 font-medium text-slate-700">
                    Especie
                </label>

                <input
                    type="text"
                    id="especie"
                    name="especie"
                    required
                    class="w-full border border-slate-300 rounded-lg px-4 py-2"
                >
            </div>

            <div>
                <label for="edad" class="block mb-2 font-medium text-slate-700">
                    Edad
                </label>

                <input
                    type="number"
                    id="edad"
                    name="edad"
                    min="0"
                    required
                    class="w-full border border-slate-300 rounded-lg px-4 py-2"
                >
            </div>

            <div class="flex gap-3">

                <button
                    type="submit"
                    class="bg-blue-600 text-white px-5 py-2 rounded-lg hover:bg-blue-700"
                >
                    Guardar
                </button>

                <a
                    href="/animales"
                    class="bg-slate-200 text-slate-800 px-5 py-2 rounded-lg hover:bg-slate-300"
                >
                    Cancelar
                </a>

            </div>

        </form>

    </div>

@endsection