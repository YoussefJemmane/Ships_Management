@extends('dashboard')
@section('content')
    <div class="py-12 selection:bg-red-500">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <section>

                        <form method="post" action="{{ route('navires.update', ['id' => $navire->id]) }}" class="mt-6 space-y-6">
                            @csrf
                            <div class="flex justify-around">
                                <div class="w-full pr-3">
                                    <x-input-label for="name" :value="__('Name')" />
                                    <x-text-input id="name" name="name" type="text" class="mt-1 block w-full"
                                        value="{{ $navire->name }}" required autofocus autocomplete="name" />
                                    <x-input-error class="mt-2" :messages="$errors->get('name')" />
                                </div>
                                <div class="w-full">
                                    <x-input-label for="type" :value="__('Type')" />
                                    <x-text-input id="type" name="type" type="text" class="mt-1 block w-full"
                                        value="{{ $navire->type }}" required autofocus autocomplete="type" />
                                    <x-input-error class="mt-2" :messages="$errors->get('type')" />
                                </div>
                            </div>
                            <div class="flex justify-around">
                                <div class="w-full pr-3">
                                    <x-input-label for="imo" :value="__('IMO')" />
                                    <x-text-input id="imo" name="imo" type="text" class="mt-1 block w-full"
                                        value="{{ $navire->imo }}" required autofocus autocomplete="imo" />
                                    <x-input-error class="mt-2" :messages="$errors->get('imo')" />
                                </div>
                                <div class="w-full">
                                    <x-input-label for="l_o_a" :value="__('L.O.A')" />
                                    <x-text-input id="l_o_a" name="l_o_a" type="text" class="mt-1 block w-full"
                                        value="{{ $navire->l_o_a }}" required autofocus autocomplete="l_o_a" />
                                    <x-input-error class="mt-2" :messages="$errors->get('l_o_a')" />
                                </div>
                            </div>
                            <div class="flex justify-around">
                                <div class="w-full pr-3">
                                    <x-input-label for="t_p_l" :value="__('T.P.L')" />
                                    <x-text-input id="t_p_l" name="t_p_l" type="text" class="mt-1 block w-full"
                                        value="{{ $navire->t_p_l }}" required autofocus autocomplete="t_p_l" />
                                    <x-input-error class="mt-2" :messages="$errors->get('t_p_l')" />
                                </div>
                                <div class="w-full">
                                    <x-input-label for="tirant_eau" :value="__('Tirant d\'eau')" />
                                    <x-text-input id="tirant_eau" name="tirant_eau" type="text" class="mt-1 block w-full"
                                        value="{{ $navire->tirant_eau }}" required autofocus autocomplete="tirant_eau" />
                                    <x-input-error class="mt-2" :messages="$errors->get('tirant_eau')" />
                                </div>
                            </div>
                            <div class="flex justify-around">
                                <div class="w-full pr-3">
                                    <x-input-label for="jauge_brute" :value="__('Jauge Brute')" />
                                    <x-text-input id="jauge_brute" name="jauge_brute" type="text"
                                        class="mt-1 block w-full" value="{{ $navire->jauge_brute }}" required autofocus
                                        autocomplete="jauge_brute" />
                                    <x-input-error class="mt-2" :messages="$errors->get('jauge_brute')" />
                                </div>
                                <div class="w-full">
                                    <x-input-label for="jauge_net" :value="__('Jauge Net')" />
                                    <x-text-input id="jauge_net" name="jauge_net" type="text" class="mt-1 block w-full"
                                        value="{{ $navire->jauge_net }}" required autofocus autocomplete="jauge_net" />
                                    <x-input-error class="mt-2" :messages="$errors->get('jauge_net')" />
                                </div>
                            </div>
                            <div class="flex justify-around">
                                <div class="w-full pr-3">
                                    <x-input-label for="pavillon" :value="__('Pavillon')" />
                                    <x-text-input id="pavillon" name="pavillon" type="text" class="mt-1 block w-full"
                                        value="{{ $navire->pavillon }}" required autofocus autocomplete="pavillon" />
                                    <x-input-error class="mt-2" :messages="$errors->get('pavillon')" />
                                </div>
                                <div class="w-full ">
                                    <x-input-label for="provenance" :value="__('Provenance')" />
                                    <x-text-input id="provenance" name="provenance" type="text" class="mt-1 block w-full"
                                        value="{{ $navire->provenance }}" required autofocus autocomplete="provenance" />
                                    <x-input-error class="mt-2" :messages="$errors->get('provenance')" />
                                </div>
                            </div>
                            <div class="flex justify-around">
                                <div class="w-full pr-3">
                                    <x-input-label for="tirant_eau_entree_avant" :value="__('Tirant d\'eau entrée avant')" />
                                    <x-text-input id="tirant_eau_entree_avant" name="tirant_eau_entree_avant" type="text"
                                        class="mt-1 block w-full" value="{{ $navire->tirant_eau_entree_avant }}" required autofocus
                                        autocomplete="tirant_eau_entree_avant" />
                                    <x-input-error class="mt-2" :messages="$errors->get('tirant_eau_entree_avant')" />
                                </div>
                                <div class="w-full ">
                                    <x-input-label for="tirant_eau_entree_arriere" :value="__('Tirant d\'eau entrée arriere')" />
                                    <x-text-input id="tirant_eau_entree_arriere" name="tirant_eau_entree_arriere"
                                        type="text" class="mt-1 block w-full" value="{{ $navire->tirant_eau_entree_arriere }}" required autofocus
                                        autocomplete="tirant_eau_entree_arriere" />
                                    <x-input-error class="mt-2" :messages="$errors->get('tirant_eau_entree_arriere')" />
                                </div>
                            </div>
                            <div class="flex justify-around">
                                <div class="w-full pr-3">
                                    <x-input-label for="armateur" :value="__('Armateur')" />
                                    <x-text-input id="armateur" name="armateur" type="text"
                                        class="mt-1 block w-full" value="{{ $navire->armateur }}" required autofocus
                                        autocomplete="armateur" />
                                    <x-input-error class="mt-2" :messages="$errors->get('armateur')" />
                                </div>
                                <div class="w-full ">
                                    <x-input-label for="armateur_disposant" :value="__('Armateur Disposant')" />
                                    <x-text-input id="armateur_disposant" name="armateur_disposant" type="text"
                                        class="mt-1 block w-full" value="{{ $navire->armateur_disposant }}" required autofocus
                                        autocomplete="armateur_disposant" />
                                    <x-input-error class="mt-2" :messages="$errors->get('armateur_disposant')" />
                                </div>
                            </div>
                            <div class="flex justify-around">
                                <div class="w-full pr-3">
                                    <x-input-label for="operateur" :value="__('Operateur')" />
                                    <x-text-input id="operateur" name="operateur" type="text"
                                        class="mt-1 block w-full" value="{{ $navire->operateur }}" required autofocus
                                        autocomplete="operateur" :value="__('Marsa Maroc')" />
                                    <x-input-error class="mt-2" :messages="$errors->get('operateur')" />
                                </div>
                                <div class="w-full ">
                                    <x-input-label for="numero_escale" :value="__('Numero d\'escale')" />
                                    <x-text-input id="numero_escale" name="numero_escale" type="text"
                                        class="mt-1 block w-full" value="{{ $navire->numero_escale }}" required autofocus
                                        autocomplete="numero_escale" />
                                    <x-input-error class="mt-2" :messages="$errors->get('numero_escale')" />
                                </div>
                            </div>
                            <div class="flex justify-around">
                                <div class="w-full pr-3">
                                    <x-input-label for="date_accostage" :value="__('Date d\'accostage')" />
                                    <x-text-input id="date_accostage" name="date_accostage" type="date"
                                        class="mt-1 block w-full" value="{{ $navire->date_accostage }}" required autofocus
                                        autocomplete="date_accostage" />
                                    <x-input-error class="mt-2" :messages="$errors->get('date_accostage')" />
                                </div>
                                <div class="w-full ">
                                    <x-input-label for="date_appareillage" :value="__('Date d\'appareillage')" />
                                    <x-text-input id="date_appareillage" name="date_appareillage" type="date"
                                        class="mt-1 block w-full" value="{{ $navire->date_appareillage }}"  autofocus
                                        autocomplete="date_appareillage" />
                                    <x-input-error class="mt-2" :messages="$errors->get('date_appareillage')" />
                                </div>
                            </div>
                            <div class="flex justify-around">
                                <div class="w-full pr-3">
                                    <x-input-label for="date_debut_travail" :value="__('Date debut de travail')" />
                                    <x-text-input id="date_debut_travail" name="date_debut_travail" type="date"
                                        class="mt-1 block w-full" value="{{ $navire->date_debut_travail }}" required autofocus
                                        autocomplete="date_debut_travail" />
                                    <x-input-error class="mt-2" :messages="$errors->get('date_debut_travail')" />
                                </div>
                                <div class="w-full ">
                                    <x-input-label for="date_fin_travail" :value="__('Date fin de travail')" />
                                    <x-text-input id="date_fin_travail" name="date_fin_travail" type="date"
                                        class="mt-1 block w-full" value="{{ $navire->date_fin_travail }}" required autofocus
                                        autocomplete="date_fin_travail" />
                                    <x-input-error class="mt-2" :messages="$errors->get('date_fin_travail')" />
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
@section('title', 'Edit Ship')
