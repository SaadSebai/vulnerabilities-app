<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Vulnerabilities') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <form action="{{ route('vulnerabilities.update', $vulnerability) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-6">
                            <label for="title"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                {{ __('Title') }} * :
                            </label>
                            <input type="text"
                                id="title"
                                name="title"
                                value="{{ old('title', $vulnerability) }}"
                                class="bg-gray-50 border mb-5 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="{{ __('Title') }}" required>

                                @error('title')
                                <div class="mt-2">
                                    <span class="text-red-400">{{ $message }}</span>
                                </div>
                                @enderror
                        </div>

                        <div class="mb-6">
                            <label for="description"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                {{ __('Description') }} * :
                            </label>
                            <textarea type="text"
                                id="description"
                                name="description"
                                class="bg-gray-50 border mb-5 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="{{ __('Description') }}"
                                required>{{ old('description', $vulnerability) }}</textarea>

                                @error('description')
                                <div class="mt-2">
                                    <span class="text-red-400">{{ $message }}</span>
                                </div>
                                @enderror
                        </div>

                        <div class="mb-6">
                            <label for="rank"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                {{ __('Rank') }} :
                            </label>
                            <input type="number"
                                id="rank"
                                name="rank"
                                min="1"
                                value="{{ old('rank', $vulnerability) }}"
                                class="bg-gray-50 border mb-5 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="{{ __('Rank') }}">

                                @error('rank')
                                <div class="mt-2">
                                    <span class="text-red-400">{{ $message }}</span>
                                </div>
                                @enderror
                        </div>

                        <button type="submit"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                        >
                            Edit
                        </button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
