@extends('dashboard')
@section('content')
    <div class="pt-12 selection:bg-red-500">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <section class="relative overflow-x-auto  sm:rounded-lg">
                        <h1 class="pb-3">Informations about the ship</h1>
                        <div class="grid grid-cols-2 ">
                            <div>
                                <h3 class="pb-3">Numero d'Escale : {{ $navire->numero_escale }}</h3>
                                <h3 class="pb-3">Date d'accostage : {{ $navire->date_accostage }}</h3>
                                <h3 class="pb-3">Jauge Brute : {{ $navire->jauge_brute }}</h3>
                                <h3 class="pb-3">Date fin de travail : {{ $navire->date_fin_travail }}</h3>
                            </div>
                            <div>
                                <h3 class="pb-3">Nom Navire : {{ $navire->name }}</h3>
                                <h3 class="pb-3">Date d'appareillage : {{ $navire->date_appareillage }}</h3>
                                <h3 class="pb-3">Date debut de travail : {{ $navire->date_debut_travail }}</h3>
                            </div>

                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
    <div class="pt-5 selection:bg-red-500">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <header>

                        <p class="mt-1 pb-3 text-lg text-black dark:text-white">
                            Personnels
                        </p>
                    </header>
                    <section class="relative overflow-x-auto shadow-md sm:rounded-lg">


                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th class="px-6 py-3">Matricule</th>
                                    <th class="px-6 py-3">Name</th>
                                    <th class="px-6 py-3">Fonction</th>
                                    <th class="px-6 py-3">Engin</th>
                                    <th class="px-6 py-3">Heure debut d'Affectation</th>
                                    <th class="px-6 py-3">Heure fin d'Affectation</th>
                                    <th class="px-6 py-3">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($personnels->isEmpty())
                                    <th class="text-red-500 px-6 py-4 font-medium whitespace-nowrap ">Aucun personnel
                                    </th>
                                @endif
                                @foreach ($personnels as $personnel)
                                    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $personnel->matricule }}</td>
                                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $personnel->nom }}</td>
                                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $personnel->fonction }}</td>
                                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $personnel->engins->code }}</td>
                                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $personnel->heure_debut_affectation }}</td>
                                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $personnel->heure_fin_affectation }}</td>
                                        <td class="px-6 py-4">
                                            <a href="{{ route('personnel.edit', ['id' => $personnel->id]) }}"
                                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline pr-3">Edit</a>
                                            <a href="{{ route('personnel.destroy', ['id' => $personnel->id]) }}"
                                                class="font-medium text-red-600 dark:text-red-500 hover:underline">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </section>
                </div>
            </div>
        </div>
    </div>
    <div class="pt-5 selection:bg-red-500">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <header>

                        <p class="mt-1 pb-3 text-lg text-black dark:text-white">
                            Engins
                        </p>
                    </header>
                    <section class="relative overflow-x-auto shadow-md sm:rounded-lg">


                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th class="px-6 py-3">Code</th>
                                    <th class="px-6 py-3">Libelle</th>
                                    <th class="px-6 py-3">Heure debut d'Affectation</th>
                                    <th class="px-6 py-3">Heure fin d'Affectation</th>
                                    <th class="px-6 py-3">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($engins->isEmpty())
                                    <th class="text-red-500 px-6 py-4 font-medium whitespace-nowrap ">Aucun engins
                                    </th>
                                @endif
                                @foreach ($engins as $engin)
                                    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $engin->code }}</td>
                                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $engin->libelle }}</td>
                                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $engin->heure_debut_affectation }}</td>
                                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $engin->heure_fin_affectation }}</td>
                                        <td class="px-6 py-4">
                                            <a href="{{ route('engin.edit', ['id' => $engin->id]) }}"
                                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline pr-3">Edit</a>
                                            <a href="{{ route('engin.destroy', ['id' => $engin->id]) }}"
                                                class="font-medium text-red-600 dark:text-red-500 hover:underline">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </section>
                </div>
            </div>
        </div>
    </div>
    <div class="py-5 selection:bg-red-500">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <header>

                        <p class="mt-1 pb-3 text-lg text-black dark:text-white">
                            Arret
                        </p>
                    </header>
                    <section class="relative overflow-x-auto shadow-md sm:rounded-lg">


                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th class="px-6 py-3">Engin</th>
                                    <th class="px-6 py-3">Code</th>
                                    <th class="px-6 py-3">Heure debut d'arret</th>
                                    <th class="px-6 py-3">Heure fin d'arret</th>

                                    <th class="px-6 py-3">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($arrets->isEmpty())
                                    <th class="text-red-500 px-6 py-4 font-medium whitespace-nowrap ">Aucun arrets
                                    </th>
                                @endif
                                @foreach ($arrets as $arret)
                                    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $arret->engins->code }}</td>
                                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $arret->code }}</td>
                                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $arret->heure_debut_arret }}</td>
                                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $arret->heure_fin_arret }}</td>
                                        <td class="px-6 py-4">
                                            <a href="{{ route('arret.edit', ['id' => $arret->id]) }}"
                                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline pr-3">Edit</a>
                                            <a href="{{ route('arret.destroy', ['id' => $arret->id]) }}"
                                                class="font-medium text-red-600 dark:text-red-500 hover:underline">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </section>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('title', 'Show Ship')
