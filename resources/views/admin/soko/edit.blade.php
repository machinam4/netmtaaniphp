@extends('admin.base')
@section('content')
    <div class="mt-2 sm:mt-0 bg-gray-100 shadow rounded-2xl">
        <div class="">
            <div class="md:col-span-1">
                <div class="px-4 sm:px-0">
                    <h3 class="text-lg font-medium  leading-6">Edit <span class="text-red-500">{{ $item->name }}</span>
                    </h3>
                </div>
            </div>
            <div class="mt-5 md:col-span-2 md:mt-0">
                <form action="{{ Route('soko_update', $item->id) }}" method="POST" id="item-form"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="overgray-500 flow-hidden shadow sm:rounded-md">
                        <div class="px-4 py-5 sm:p-6">
                            <div class="grid grid-cols-6 gap-6 text-gray-700">
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="category_id" class="block text-sm font-medium text-gray-700">Section</label>
                                    <select id="category_id" name="section_id" autocomplete="category_id"
                                        class="mt-1 block w-full rounded-md border border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                                        @foreach ($sections as $section)
                                            <option value="{{ $section->id }}" {{-- {{ $item->section->id == $section->id ? 'selected' : '' }} --}}>
                                                {{ $section->name }}</option>
                                        @endforeach
                                    </select>
                                    <p class="mt-2 text-md text-gray-500"><a href="#addSectionModal" rel="modal:open">Add
                                            New Section</a></p>
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="category_id"
                                        class="block text-sm font-medium text-gray-700">Category</label>
                                    <select id="category_id" name="category_id" autocomplete="category_id"
                                        class="mt-1 block w-full rounded-md border border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}"
                                                {{ $item->category->id == $category->id ? 'selected' : '' }}>
                                                {{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                    <p class="mt-2 text-md text-gray-500"><a href="#addCategoryModal" rel="modal:open">Add
                                            New Category</a></p>
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="item_no" class="block text-sm font-medium text-gray-700">Item
                                        ID</label>
                                    <input type="text" name="item_no" id="item_no" autocomplete="item_no"
                                        value="{{ $item->item_no }}"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                        required>
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                                    <input type="text" name="name" id="name" autocomplete="name"
                                        value="{{ $item->name }}"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                        required>
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="last-name"
                                        class="block text-sm font-medium text-gray-700">Location/SubCategory</label>
                                    <input type="text" name="subcategory" id="last-name" autocomplete="subcategory"
                                        value="{{ $item->subcategory }}"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                        required>
                                    <p class="mt-2 text-sm text-gray-500">If category is real estate, this becomes the
                                        different locations.</p>
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="model" class="block text-sm font-medium text-gray-700">Model</label>
                                    <input type="text" name="model" id="model" autocomplete="model"
                                        value="{{ $item->model }}"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                        required>
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="price" class="block text-sm font-medium text-gray-700">Price</label>
                                    <input type="number" name="price" id="price" autocomplete="Price"
                                        value="{{ $item->price }}"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                        required>
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
                                    <select id="status" name="status" autocomplete="status" value="{{ $item->status }}"
                                        class="mt-1 block w-full rounded-md border border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                                        <option value="1" {{ $item->status == '1' ? 'selected' : '' }}>
                                            Available</option>
                                        <option value="0" {{ $item->status == '0' ? 'selected' : '' }}>
                                            Unavailable</option>
                                    </select>
                                    <p class="mt-2 text-md text-gray-500">Item status</p>
                                </div>
                                <div class="col-span-6">
                                    <label for="description"
                                        class="block text-sm font-medium text-gray-700">Description</label>
                                    <div class="mt-1">
                                        <div id="editor-container" style="height: 100px;">
                                        </div>
                                        <input id="description" type="hidden" name="description" rows="3"
                                            value="{{ $item->description }}"
                                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                            placeholder="you@example.com" required>
                                    </div>
                                    <p class="mt-2 text-sm text-gray-500">Brief description for your soko Item. URLs
                                        are
                                        hyperlinked.</p>
                                </div>

                                {{-- <div class="col-span-6 flex justify-start mt-2">
                                    <div class="mb-3 w-full">
                                        <label for="filepond"
                                            class="form-label inline-block mb-2 text-gray-700">Image</label>
                                        <input accept=".png, .jpg, .jpeg" class="filepond" type="file"
                                            name="images[]" id="filepond" data-allow-reorder="true" multiple required>
                                    </div>
                                </div> --}}

                            </div>
                        </div>
                        <div class="bg-gray-50 px-4 py-3 text-left sm:px-6">
                            <button type="submit"
                                class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('page-scripts')
    <Script>
        quill.root.innerHTML = "{!! $item->description !!}"
        var form = document.getElementById('item-form');
        form.onsubmit = function() {
            //     var description = document.querySelector('input[name=description]');
            //   description.value = JSON.stringify(quill.getText());
            $("#description").val(quill.root.innerHTML);
        }
    </Script>
@endsection
