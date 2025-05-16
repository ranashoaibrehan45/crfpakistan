<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Category') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">            
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <x-alerts />

                    <form method="POST" action="{{ route('admin.category.store') }}">
                        @csrf

                        <!-- Name -->
                        <div>
                            <x-input-label for="name" :value="__('Name')" />
                            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>

                        <!-- Type -->
                        <div class="block mt-4">
                            <x-input-label for="name" :value="__('Type')" class="mb-3" />
                            <label for="header" class="inline-flex items-center">
                                <input name="type" id="header" type="radio" value="header" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500">
                                <span class="ms-2 text-sm text-gray-600">{{ __('Header') }}</span>
                            </label>
                            <label for="footer" class="inline-flex items-center">
                                <input name="type" id="footer" type="radio" value="footer" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500">
                                <span class="ms-2 text-sm text-gray-600">{{ __('Footer') }}</span>
                            </label>
                        </div>

                        <div class="block mt-4">
                            <x-input-label for="name" :value="__('Has Children')" class="mb-3" />
                            <label for="has_children" class="inline-flex items-center">
                                <input id="has_children" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="has_children">
                                <span class="ms-2 text-sm text-gray-600">{{ __('Has Sub-Categories') }}</span>
                            </label>
                        </div>

                        <div class="flex items-center justify-end mt-4">                        
                            <x-primary-button class="ms-4">
                                {{ __('Submit') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
