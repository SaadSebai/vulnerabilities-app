<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Vulnerabilities') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <x-crud-session></x-crud-session>
            <div class="mb-5 ml-3">
                    <a
                        href="{{ route('vulnerabilities.create') }}"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
                    >
                        {{ __('Add') }}
                    </a>
            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="overflow-x-auto relative">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-blue-100 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="py-3 px-6">
                                    {{ __('Title') }}
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    {{ __('Description') }}
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    {{ __('Rank') }}
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    {{ __('Actions') }}
                                </th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($vulnerabilities as $vulnerability)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $vulnerability->title }}
                                    </th>
                                    <td class="py-4 px-6">
                                        {{ $vulnerability->description }}
                                    </td>
                                    <td class="py-4 px-6">
                                        {{ $vulnerability->rank }}
                                    </td>
                                    <td class="py-4 px-6">
                                        <div class="row text-center">
                                            <div>
                                                <a
                                                    href="{{ route('vulnerabilities.edit', $vulnerability) }}"
                                                    class="text-yellow-500"
                                                >
                                                    {{ __('Edit') }}
                                                </a>
                                            </div>
                                            <div>
                                                <form action="{{ route('vulnerabilities.destroy', $vulnerability) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="text-red-500">
                                                        {{ __('Delete') }}
                                                    </button>
                                                </form>
                                            </div>

                                        </div>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>

                </div>
            </div>

            <div class="d-flex justify-content-center">
                {{ $vulnerabilities->links() }}
            </div>
        </div>
    </div>
</x-app-layout>
