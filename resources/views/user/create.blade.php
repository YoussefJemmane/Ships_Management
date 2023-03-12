@extends('dashboard')
@section('content')
    <div class="py-12 selection:bg-red-500">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <section>
                        <header class="flex justify-end">

                            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                                This Rapport is written by {{ Auth::user()->name }}
                            </p>
                        </header>



                        <form method="post" action="{{ route('navires.store') }}" class="mt-6 space-y-6">
                            @csrf

                            <div>
                                <x-input-label for="title" :value="__('Title')" />
                                <x-text-input id="title" name="title" type="text" class="mt-1 block w-full"
                                    :value="old('title')" required autofocus autocomplete="title" />
                                <x-input-error class="mt-2" :messages="$errors->get('title')" />
                            </div>
                            <div>
                                <x-input-label for="des" :value="__('Description')" />
                                <x-text-area id="des" name="description" type="text" class="mt-1 block w-full"
                                    :value="old('description')" required autofocus autocomplete="description" />
                                <x-input-error class="mt-2" :messages="$errors->get('description')" />
                            </div>
                            <div>
                                <x-input-label for="date_rapport" :value="__('Date of Rapport')" />
                                <x-text-input id="date_rapport" name="date_rapport" type="date" class="mt-1 block w-full"
                                    :value="old('date_rapport')" required autofocus autocomplete="date_rapport" />
                                <x-input-error class="mt-2" :messages="$errors->get('date_rapport')" />
                            </div>
                            <div class="flex justify-end">
                                <x-primary-button>
                                    {{ __('Save') }}
                                </x-primary-button>
                            </div>

                        </form>
                    </section>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('title', 'Create Navire')
