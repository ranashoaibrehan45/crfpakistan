<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            
            @if (request('album') && $images->count() > 0)
            {{ $images->first()->album->name }}
            @endif
            {{ __('Gallery') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">            
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                        Upload Images
                        </h2>
                    </div>
                </header>
                <div class="p-6 text-gray-900">
                    <x-alerts />

                    <div>
                        <label for="title" class="block font-medium text-sm text-gray-700">Title</label>
                        <input id="title" type="text" class="block mt-1 w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>

                    <div class="mt-5">
                        <label for="images" class="block font-medium text-sm text-gray-700">Images</label>
                        <input type="file" id="images" multiple class="block mt-1 w-full border-gray-300 rounded-md shadow-sm">
                    </div>

                    <div class="flex items-center justify-end mt-4">                        
                        <button id="uploadBtn" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                            Submit
                        </button>
                    </div>

                    <div id="uploadStatus" class="mt-4 text-sm text-gray-700"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                        Gallery Images
                        </h2>
                    </div>
                </header>
                <div class="p-6 text-gray-900">
                    
                    <table class="w-full divide-y divide-gray-200 shadow rounded-lg">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">Title</th>
                                <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">Image</th>
                                <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach($images as $image)
                                <tr>
                                    <td class="px-6 py-4 text-sm text-gray-900">
                                        {{ $image->title }}<br>
                                    </td>

                                    <td class="px-6 py-4 text-sm text-gray-500">
                                        <div class="avatar">
                                            <div class="w-24 rounded">
                                                <a href="{{ url('storage/gallery/' . $image->path) }}" target="_blank">
                                                    <img src="{{ url('storage/gallery/thumbnails/' . $image->path) }}" class="w-[100px] h-[100px] object-cover rounded shadow" width="100" height="100" />
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-sm text-right space-x-2">
                                        <form action="{{ route('admin.gallery.destroy', $image->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Are you sure?');">
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

    @section('footer_script')
    <script>
    document.getElementById('uploadBtn').addEventListener('click', function (e) {
        e.preventDefault();

        const album_id = "{{ Request('album') }}";
        const title = document.getElementById('title').value;
        const files = document.getElementById('images').files;
        const status = document.getElementById('uploadStatus');
        status.innerHTML = '';

        if (!title || files.length === 0) {
            alert('Please enter a title and select at least one image.');
            return;
        }

        const csrfToken = '{{ csrf_token() }}';

        Array.from(files).forEach((file, index) => {
            const formData = new FormData();
            formData.append('album_id', album_id);
            formData.append('title', title);
            formData.append('image', file); // single image each time

            fetch("{{ route('admin.gallery.store') }}", {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': csrfToken,
                    'X-Requested-With': 'XMLHttpRequest',
                    'Accept': 'application/json'
                },
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                status.innerHTML += `<p class="text-green-600">Uploaded ${file.name} successfully.</p>`;
            })
            .catch(error => {
                status.innerHTML += `<p class="text-red-600">Failed to upload ${file.name}.</p>`;
            });
        });
    });
    </script>

    @endsection
</x-app-layout>
