@extends('layouts.app')

@section('content')
    <div class="max-w-2xl mx-auto">
        <!-- Edit Movie Card -->
        <div class="bg-white rounded-2xl shadow-sm p-8 border border-slate-100">
            <!-- Header -->
            <div class="mb-8">
                <h1 class="text-3xl font-bold text-slate-900">Edit Movie</h1>
                <p class="text-slate-500 mt-2">Update the information of the selected movie.</p>
            </div>

            <!-- Edit Form -->
            <form action="{{ route('movies.update', $movie['id']) }}" method="POST" class="space-y-6">
                @csrf
                @method('PUT')

                <!-- Title Field -->
                <div>
                    <label for="title" class="block text-sm font-medium text-slate-700 mb-2">Title</label>
                    <input 
                        type="text" 
                        id="title" 
                        name="title" 
                        value="{{ $movie['title'] }}" 
                        placeholder="Enter movie title..." 
                        class="w-full border border-slate-200 rounded-lg px-4 py-3 text-slate-700 bg-white focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition"
                        readonly
                    >
                </div>

                <!-- Genre Field -->
                <div>
                    <label for="genre" class="block text-sm font-medium text-slate-700 mb-2">Genre</label>
                    <input 
                        type="text" 
                        id="genre" 
                        name="genre" 
                        value="{{ $movie['genre'] }}" 
                        placeholder="Enter movie genre..." 
                        class="w-full border border-slate-200 rounded-lg px-4 py-3 text-slate-700 bg-white focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition"
                        readonly
                    >
                </div>

                <!-- Year Field -->
                <div>
                    <label for="year" class="block text-sm font-medium text-slate-700 mb-2">Year</label>
                    <input 
                        type="number" 
                        id="year" 
                        name="year" 
                        value="{{ $movie['year'] }}" 
                        placeholder="YYYY" 
                        class="w-full border border-slate-200 rounded-lg px-4 py-3 text-slate-700 bg-white focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition"
                        readonly
                    >
                </div>

                <!-- Buttons -->
                <div class="flex gap-4 pt-8 border-t border-slate-200">
                    <a 
                        href="{{ route('movies.index') }}" 
                        class="flex-1 text-center px-6 py-3 text-slate-700 bg-white border border-slate-200 rounded-lg hover:bg-slate-50 transition font-medium"
                    >
                        Cancel
                    </a>
                    <button 
                        type="submit" 
                        class="flex-1 px-6 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition font-medium flex items-center justify-center gap-2"
                    >
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M17 3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V7l-4-4zm-5 16c-1.66 0-3-1.34-3-3s1.34-3 3-3 3 1.34 3 3-1.34 3-3 3zm3-10H5V5h10v4z"/>
                        </svg>
                        Save Changes
                    </button>
                </div>

                <!-- Info Note -->
                <div class="bg-blue-50 border border-blue-200 rounded-lg p-4 mt-6">
                    <p class="text-sm text-blue-800">
                        <strong>Note:</strong> This is a demonstration of the PUT method with @csrf and @method directives. In this exercise, no data is actually persisted to a database.
                    </p>
                </div>
            </form>
        </div>
    </div>
@endsection
