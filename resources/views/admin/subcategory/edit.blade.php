<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Category') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">            
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <x-alerts />

                    <form method="POST" action="{{ route('admin.subcategory.update', $subcategory->id) }}">
                        @method('put')
                        @csrf

                        <div>
                            <x-input-label for="category_id" :value="__('Category')" />
                            <select name="category_id" class="block w-full mt-1 px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 text-sm">
                                <option value="">--Choose Category--</option>
                                
                                @foreach($categories as $category)
                                <option value="{{ $category->id }}" @selected($category->id == $subcategory->id)>{{ $category->name }}</option>
                                @endforeach
                            </select>
                            <x-input-error :messages="$errors->get('category_id')" class="mt-2" />
                        </div>

                        <!-- Name -->
                        <div class="mt-3">
                            <x-input-label for="name" :value="__('Name')" />
                            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name', $subcategory->name)" required autofocus autocomplete="name" />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>

                        <div class="block mt-5 pt-4">
                            <label for="header_link" class="inline-flex items-center">
                                <input name="header_link" id="header_link" type="checkbox" value="1" @checked($subcategory->header_link) class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500">
                                <span class="ms-2 text-sm text-gray-600">{{ __('Is Header Link') }}</span>
                            </label>
                            <label for="footer_link" class="inline-flex items-center">
                                <input name="footer_link" id="footer_link" type="checkbox" value="1" @checked($subcategory->footer_link) class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500">
                                <span class="ms-2 text-sm text-gray-600">{{ __('Is Footer Link') }}</span>
                            </label>
                            <label for="multiple_pages" class="inline-flex items-center">
                                <input id="multiple_pages" name="multiple_pages" type="checkbox" value="1" @checked($subcategory->multiple_pages) class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500">
                                <span class="ms-2 text-sm text-gray-600">{{ __('Has Multiple Pages') }}</span>
                            </label>
                        </div>

                        <div class="flex items-center justify-end mt-4">                        
                            <x-primary-button class="ms-4">
                                {{ __('Update') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
