<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Categories') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-primary-link href="{{ route('admin.category.create') }}" label="Add Category" />

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">                
                <div class="p-6 text-gray-900">
                    <table class="w-full divide-y divide-gray-200 shadow rounded-lg">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">Name</th>
                                <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">Slug</th>
                                <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">Has Children</th>
                                <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">Header</th>
                                <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">Footer</th>
                                <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">Multiple Page</th>
                                <th class="px-6 py-3 text-right text-sm font-semibold text-gray-700">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach($categories as $category)
                                <tr>
                                    <td class="px-6 py-4 text-sm text-gray-900">{{ $category->name }}</td>
                                    <td class="px-6 py-4 text-sm text-gray-500">{{ $category->slug }}</td>
                                    <td class="px-6 py-4 text-sm text-gray-500">{{ $category->has_children ? 'Yes' : 'No' }}</td>
                                    <td class="px-6 py-4 text-sm text-gray-500">{{ $category->header_link ? 'True' : 'False' }}</td>
                                    <td class="px-6 py-4 text-sm text-gray-500">{{ $category->footer_link ? 'True' : 'False' }}</td>
                                    <td class="px-6 py-4 text-sm text-gray-500">{{ $category->multiple_pages ? 'True' : 'False' }}</td>
                                    <td class="px-6 py-4 text-sm text-right space-x-2">
                                        <a href="{{ route('admin.category.edit', $category->id) }}"
                                            class="inline-flex items-center px-3 py-1 text-sm text-white bg-gray-800 hover:bg-blue-700 rounded border border-black">
                                            Edit
                                        </a>
                                        <form action="{{ route('admin.category.destroy', $category->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Are you sure?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="inline-flex items-center px-3 py-1 text-sm text-white bg-red-600 hover:bg-red-700 rounded">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
