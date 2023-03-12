@extends('dashboard')
@section('content')
    <div class="py-12 selection:bg-red-500">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div>
                <form action="{{ route('rapports.search') }}" method="get" class=" pb-3">

                    <div >
                        <x-input-label for="date_rapport" :value="__('Search by')" />
                        <x-input-label for="date_rapport" :value="__('Date Rapport')" />
                        <x-text-input id="date_rapport" name="date_rapport" type="date" class="mb-4 block w-full"
                            :value="old('date_rapport')"  autofocus autocomplete="date_rapport" />
                        <x-input-error class="mt-2" :messages="$errors->get('date_rapport')" />
                    </div>
                    <div class="flex justify-end">
                        <x-primary-button >Search</x-primary-button>
                    </div>
                </form>
            </div>
            <div class="flex justify-end">

                <x-nav-link :href="route('rapport')" :active="request()->routeIs('rapport')"
                    class="inline-flex items-center px-4 py-2 bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-500 rounded-md font-semibold text-xs text-gray-700 dark:text-gray-300 uppercase tracking-widest shadow-sm hover:bg-gray-50 dark:hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 disabled:opacity-25 transition ease-in-out duration-150 pt-2 mb-3">
                    {{ __('Create Rapport') }}
                </x-nav-link>

            </div>
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <section class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th class="px-6 py-3">User</th>
                                    <th class="px-6 py-3">Date of Rapport</th>
                                    <th class="px-6 py-3">Shift</th>
                                    <th class="px-6 py-3">Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($rapports as $rapport)
                                    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $rapport->users->name }}</td>
                                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $rapport->date_rapport }}</td>
                                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $rapport->shift }}</td>
                                        <td class="px-6 py-4">
                                            <a href="{{ route('rapport.show', ['id' => $rapport->id]) }}"
                                                class="font-medium text-yellow-600 dark:text-yellow-500 hover:underline pr-3">Show</a>
                                            <a href="{{ route('rapport.edit', ['id' => $rapport->id]) }}"
                                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline pr-3">Edit</a>
                                            @if (Auth::user()->role === 1)
                                                <a href="{{ route('rapport.destroy', ['id' => $rapport->id]) }}"
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
@section('title', 'List of Rapports')
