@extends('dashboard')
@section('content')
    <div class="py-12 selection:bg-red-500">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div>
                <form action="{{ route('navires.search') }}" method="get" class=" pb-3">
                    <div >
                        <x-input-label for="numero_escale" :value="__('Search by')" />
                        <x-input-label for="numero_escale" :value="__('Numero Escale')" />
                        <x-text-input id="numero_escale" name="numero_escale" type="text" class="mb-4 block w-full"
                            :value="old('numero_escale')" required autofocus autocomplete="numero_escale" />
                        <x-input-error class="mt-2" :messages="$errors->get('numero_escale')" />
                        <div class="flex justify-end">
                            <x-primary-button>Search</x-primary-button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="flex justify-end">
                @if (Auth::user()->role === 1)
                    <x-nav-link :href="route('navires.create')" :active="request()->routeIs('navires.create')"
                        class="inline-flex items-center px-4 py-2 bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-500 rounded-md font-semibold text-xs text-gray-700 dark:text-gray-300 uppercase tracking-widest shadow-sm hover:bg-gray-50 dark:hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 disabled:opacity-25 transition ease-in-out duration-150 pt-2 mb-3">
                        {{ __('Create Navire') }}
                    </x-nav-link>
                @endif
            </div>
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <section class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th class="px-6 py-3">Numero d'escale</th>
                                    <th class="px-6 py-3">Navire</th>

                                    <th class="px-6 py-3">Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($navires as $navire)
                                    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $navire->numero_escale }}</td>
                                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $navire->name }}</td>

                                        <td class="px-6 py-4">
                                            <a href="{{ route('navires.show', ['id' => $navire->id]) }}"
                                                class="font-medium text-yellow-600 dark:text-yellow-500 hover:underline pr-3">Show</a>
                                            <a href="{{ route('navires.edit', ['id' => $navire->id]) }}"
                                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline pr-3">Edit</a>
                                            @if (Auth::user()->role === 1)
                                                <a href="{{ route('navires.destroy', ['id' => $navire->id]) }}"
                                                    class="font-medium text-red-600 dark:text-red-500 hover:underline pr-3">Delete</a>
                                            @endif
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
@section('title', 'List of Ships')
