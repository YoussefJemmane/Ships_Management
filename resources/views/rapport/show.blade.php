@extends('dashboard')
@section('content')
    <div class="pt-12 selection:bg-red-500">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <section class="relative   sm:rounded-lg max-h-screen">
                        <div class="text-center pb-3">
                            <h1>{{ $rapport->title }}</h1>
                        </div>
                        <div class="flex justify-end pb-3">
                            <x-span>{{ $rapport->date_rapport }}</x-span>
                            <x-span>Shift : {{ $rapport->shift }}</x-span>
                            <x-span>{{ $rapport->users->name }}</x-span>
                        </div>
                        <div class="text-center">
                            <p>{{ $rapport->description }}</p>
                        </div>


                    </section>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('title', 'Details of Rapport')
