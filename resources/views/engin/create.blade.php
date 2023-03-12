@extends('dashboard')
@section('content')

    <div class="py-12 selection:bg-red-500">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <section>
                        <form method="post" action="{{ route('engin.store') }}" class="mt-6 space-y-6">
                            @csrf

                            <div>
                                <x-input-label for="code" :value="__('Code Engin')" />
                                <x-text-input id="code" name="code" type="text" class="mt-1 block w-full"
                                    :value="old('code')" required autofocus autocomplete="code" />
                                <x-input-error class="mt-2" :messages="$errors->get('code')" />
                            </div>
                            <div>
                                <x-input-label for="libelle" :value="__('Libelle Engin')" />
                                <x-text-input id="libelle" name="libelle" type="text" class="mt-1 block w-full"
                                    :value="old('libelle')" required autofocus autocomplete="libelle" />
                                <x-input-error class="mt-2" :messages="$errors->get('libelle')" />
                            </div>
                            <div class="flex justify-around">
                                <div class="w-full pr-3">
                                    <x-input-label for="heure_debut_affectation" :value="__('heure_debut_affectation')" />
                                    <x-text-input id="heure_debut_affectation" name="heure_debut_affectation" type="time" class="mt-1 block w-full"
                                        :value="old('heure_debut_affectation')" required autofocus autocomplete="heure_debut_affectation" />
                                    <x-input-error class="mt-2" :messages="$errors->get('heure_debut_affectation')" />
                                </div>
                                <div class="w-full">
                                    <x-input-label for="heure_fin_affectation" :value="__('Heure Fin d\'Affectation')" />
                                    <x-text-input id="heure_fin_affectation" name="heure_fin_affectation" type="time"
                                        class="mt-1 block w-full" min="1" max="3" :value="old('heure_fin_affectation')" required
                                        autofocus autocomplete="heure_fin_affectation" />
                                    <x-input-error class="mt-2" :messages="$errors->get('heure_fin_affectation')" />
                                </div>
                            </div>
                            <div class="flex justify-around">

                                <div class="w-full ">
                                    <x-input-label for="navire" :value="__('Navire')" />
                                    <select name="navire_id" id=""
                                        class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-red-400 dark:focus:border-red-500 focus:ring-red-400 dark:focus:ring-red-500 rounded-md shadow-sm mt-2 w-full">
                                        @foreach ($navires as $navire)
                                            <option value="{{ $navire->id }}">{{ $navire->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
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
@section('title', 'Create Engin')
