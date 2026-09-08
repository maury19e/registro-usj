@extends('layouts.app')

@section('content')
    <div class="space-y-8">
        <!-- Success Message -->
        @if(session('success'))
            <div class="bg-green-50 border border-green-200 rounded-lg p-4">
                <p class="text-sm text-green-800 font-medium">✓ {{ session('success') }}</p>
            </div>
        @endif

        <!-- Add New Movie Section -->
        <div class="bg-white rounded-2xl shadow-sm p-8 border border-slate-100">
            <h2 class="text-lg font-semibold text-slate-900 mb-6 flex items-center gap-2">
                <svg class="w-5 h-5 text-blue-600" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm3.5-9h-3V8.5h-1V11h-3v1h3v3.5h1V12h3v-1z"/>
                </svg>
                Add New Movie
            </h2>

            <form class="space-y-6" method="POST" action="{{ route('movies.store') }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <!-- Title Field -->
                <div>
                    <label for="title" class="block text-sm font-medium text-slate-700 mb-2">Title</label>
                    <input 
                        type="text" 
                        id="title" 
                        name="title" 
                        placeholder="Enter movie title..." 
                        class="w-full border border-slate-200 rounded-lg px-4 py-3 text-slate-700 bg-white focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition"
                    >
                </div>

                <!-- Genre Field -->
                <div>
                    <label for="genre" class="block text-sm font-medium text-slate-700 mb-2">Genre</label>
                    <input 
                        type="text" 
                        id="genre" 
                        name="genre" 
                        placeholder="Enter movie genre..." 
                        class="w-full border border-slate-200 rounded-lg px-4 py-3 text-slate-700 bg-white focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition"
                    >
                </div>

                <!-- Year Field -->
                <div>
                    <label for="year" class="block text-sm font-medium text-slate-700 mb-2">Year</label>
                    <input 
                        type="number" 
                        id="year" 
                        name="year" 
                        placeholder="YYYY" 
                        class="w-full border border-slate-200 rounded-lg px-4 py-3 text-slate-700 bg-white focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition"
                    >
                </div>

                <!-- Buttons -->
                <div class="flex gap-4 pt-6">
                    <button 
                        type="reset" 
                        class="flex items-center gap-2 px-6 py-3 text-slate-700 bg-white border border-slate-200 rounded-lg hover:bg-slate-50 transition font-medium"
                    >
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z"/>
                        </svg>
                        Clear
                    </button>
                    <button 
                        type="submit" 
                        class="px-6 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition font-medium"
                    >
                        Add Movie
                    </button>
                </div>
            </form>
        </div>

        <!-- Movies List Section -->
        <div class="bg-white rounded-2xl shadow-sm p-8 border border-slate-100">
            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mb-8">
                <h2 class="text-lg font-semibold text-slate-900 flex items-center gap-2">
                    <svg class="w-5 h-5 text-blue-600" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M4 2h16c1.1 0 2 .9 2 2v16c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V4c0-1.1.9-2 2-2zm2 4v12h12V6H6z"/>
                        <path d="M7 8h2v8H7z M11 8h2v8h-2z M15 8h2v8h-2z"/>
                    </svg>
                    Movies List
                </h2>

                <!-- Search Field (Visual Only) -->
                <div class="flex items-center gap-2 px-4 py-2 border border-slate-200 rounded-lg bg-slate-50 w-full sm:w-auto">
                    <svg class="w-5 h-5 text-slate-400" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M15.5 14h-.79l-.28-.27a6.5 6.5 0 10-.7.7l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 10s2.01-4 4-4 4 2.01 4 4-2.01 4-4 4z"/>
                    </svg>
                    <input 
                        type="text" 
                        placeholder="Search movies..." 
                        class="bg-transparent outline-none text-sm text-slate-700 placeholder-slate-400 w-full"
                    >
                </div>
            </div>

            <!-- Movies Table -->
            @if($movies && count($movies) > 0)
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead>
                            <tr class="border-b-2 border-slate-100 bg-blue-50">
                                <th class="text-left px-6 py-4 font-semibold text-slate-900 text-sm">TITLE</th>
                                <th class="text-left px-6 py-4 font-semibold text-slate-900 text-sm">GENRE</th>
                                <th class="text-left px-6 py-4 font-semibold text-slate-900 text-sm">YEAR</th>
                                <th class="text-left px-6 py-4 font-semibold text-slate-900 text-sm">ACTIONS</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($movies as $movie)
                                <tr class="border-b border-slate-100 hover:bg-slate-50 transition">
                                    <td class="px-6 py-4 text-slate-800">
                                        <span class="font-medium">{{ $movie['title'] }}</span>
                                    </td>
                                    <td class="px-6 py-4 text-slate-600">{{ $movie['genre'] }}</td>
                                    <td class="px-6 py-4 text-slate-600">{{ $movie['year'] }}</td>
                                    <td class="px-6 py-4">
                                        <a 
                                            href="{{ route('movies.edit', $movie['id']) }}" 
                                            class="inline-flex items-center gap-2 px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition font-medium text-sm"
                                        >
                                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25z M20.71 7.04c.39-.39.39-1.02 0-1.41l-2.34-2.34c-.39-.39-1.02-.39-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z"/>
                            </svg>
                                            Edit
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="mt-6 text-sm text-slate-500 text-center">
                    Total: <span class="font-semibold text-slate-900">{{ count($movies) }}</span> movies
                </div>
            @else
                <div class="text-center py-12">
                    <svg class="w-12 h-12 text-slate-300 mx-auto mb-4" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z"/>
                    </svg>
                    <p class="text-slate-500">No movies found. Add one to get started!</p>
                </div>
            @endif
        </div>
    </div>
@endsection
