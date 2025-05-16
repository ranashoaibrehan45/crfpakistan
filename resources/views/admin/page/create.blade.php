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

                    <form method="POST" action="{{ route('admin.page.store') }}" id="form">
                        @csrf

                        <!-- Category -->
                        <div>
                            <x-input-label for="category_id" :value="__('Category')" />
                            <select name="category_id" id="category_id" class="block w-full mt-1 px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 text-sm">
                                <option value="category_id">--Choose Category--</option>
                                
                                @foreach($categories as $category)
                                <option value="{{ $category->id }}" @selected(old('category_id') == $category->id)>{{ $category->name }}</option>
                                @endforeach
                            </select>
                            <x-input-error :messages="$errors->get('category_id')" class="mt-2" />
                        </div>

                        <div class="mt-3">
                            <x-input-label for="category_id" :value="__('Sub Category')" />
                            <select name="subcategory_id" id="subcategory_id" class="block w-full mt-1 px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 text-sm">
                                <option value="category_id">--Choose Subcategory--</option>                                
                            </select>
                            <x-input-error :messages="$errors->get('category_id')" class="mt-2" />
                        </div>

                        <!-- Name -->
                        <div class="mt-3">
                            <x-input-label for="title" :value="__('Title')" />
                            <x-text-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title')" required autofocus autocomplete="title" />
                            <x-input-error :messages="$errors->get('title')" class="mt-2" />
                        </div>

                        <!-- Content -->
                        <div class="mt-3">
                            <x-input-label for="content" :value="__('Content')" />
                            <div id="editor" style="height: 300px;"></div>
                            <input type="hidden" name="content" id="content">
                            
                            <x-input-error :messages="$errors->get('content')" class="mt-2" />
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

    @section('footer_script')
    <script src="https://cdn.quilljs.com/1.3.6/quill.min.js"></script>
    <script>
        const subcategories = @json($subcategories);
        const oldCat = parseInt("{{ old('category_id') }}");

        function subcatOption(categoryId) {
            const filteredSubcategories = subcategories.filter(sc => sc.category_id == categoryId);

            let options = '<option value="">-- Select Subcategory --</option>';
            filteredSubcategories.forEach(sc => {
                options += `<option value="${sc.id}">${sc.name}</option>`;
            });

            $('#subcategory_id').html(options);
        }

        if (oldCat > 0) {
            subcatOption(oldCat);
            $("#subcategory_id").val(oldCat);
        }

        $('#category_id').on('change', function () {
            subcatOption($(this).val());
        });


        $(document).ready(function() {
            const csrfToken = document.querySelector('meta[name="csrf-token"]').content;
            const quill = new Quill('#editor', {
                theme: 'snow',
                modules: {
                    toolbar: {
                        container: [
                            [{ header: [1, 2, false] }],
                            ['bold', 'italic', 'underline'],
                            ['image', 'code-block'],
                            [{ list: 'ordered' }, { list: 'bullet' }],
                            ['link']
                        ],
                        handlers: {
                            image: function () {
                                const input = document.createElement('input');
                                input.setAttribute('type', 'file');
                                input.setAttribute('accept', 'image/*');
                                input.click();

                                input.onchange = async () => {
                                    const file = input.files[0];
                                    const formData = new FormData();
                                    formData.append('image', file);
                                    formData.append('_token', csrfToken);

                                    try {
                                        const res = await fetch('/admin/editor/upload', {
                                            method: 'POST',
                                            body: formData
                                        });

                                        const data = await res.json();
                                        const range = quill.getSelection();
                                        quill.insertEmbed(range.index, 'image', data.url);
                                    } catch (err) {
                                        console.error('Upload failed:', err);
                                    }
                                };
                            }
                        }
                    }
                }
            });
            
            $("#form").submit(function() {
                $("#content").val(quill.root.innerHTML);

            });
        });
    </script>

    @endsection
</x-app-layout>
