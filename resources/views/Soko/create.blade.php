@extends('base')
@section('page_title', 'Soko')
@section('contents')
    <!-- quill Theme included stylesheets -->
    <link href="//cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">


    <div class="mt-10 sm:mt-0">
        <div class="md:grid md:grid-cols-3 md:gap-6">
            <div class="md:col-span-1">
                <div class="px-4 sm:px-0">
                    <h3 class="text-lg font-medium leading-6 text-white">Add New Soko Product</h3>
                    <p class="mt-1 text-sm text-white">add a new soko product to the Database.</p>
                </div>
            </div>
            <div class="mt-5 md:col-span-2 md:mt-0">
                <form action="{{ Route('soko_save') }}" method="POST" id="item-form" enctype="multipart/form-data">
                    @csrf
                    <div class="overgray-500 flow-hidden shadow sm:rounded-md">
                        <div class="bg-white px-4 py-5 sm:p-6">
                            <div class="grid grid-cols-6 gap-6 text-gray-700">
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="category_id" class="block text-sm font-medium text-gray-700">Section</label>
                                    <select id="category_id" name="section_id" autocomplete="category_id"
                                        class="mt-1 block w-full rounded-md border border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                                        @foreach ($sections as $section)
                                            <option value="{{ $section->id }}">{{ $section->name }}</option>
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
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                    <p class="mt-2 text-md text-gray-500"><a href="#addCategoryModal" rel="modal:open">Add
                                            New Category</a></p>
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="item_no" class="block text-sm font-medium text-gray-700">Item ID</label>
                                    <input type="text" name="item_no" id="item_no" autocomplete="item_no"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                        required>
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                                    <input type="text" name="name" id="name" autocomplete="name"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                        required>
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="last-name"
                                        class="block text-sm font-medium text-gray-700">Location/SubCategory</label>
                                    <input type="text" name="subcategory" id="last-name" autocomplete="subcategory"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                        required>
                                    <p class="mt-2 text-sm text-gray-500">If category is real estate, this becomes the
                                        different locations.</p>
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="first-name" class="block text-sm font-medium text-gray-700">Model</label>
                                    <input type="text" name="model" id="first-name" autocomplete="model"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                        required>
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="last-name" class="block text-sm font-medium text-gray-700">Price</label>
                                    <input type="number" name="price" id="last-name" autocomplete="Price"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                        required>
                                </div>
                                <div class="col-span-6">
                                    <label for="description"
                                        class="block text-sm font-medium text-gray-700">Description</label>
                                    <div class="mt-1">
                                        <div id="editor-container" style="height: 100px;">
                                        </div>
                                        <input id="description" type="hidden" name="description" rows="3"
                                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                            placeholder="you@example.com" required>
                                    </div>
                                    <p class="mt-2 text-sm text-gray-500">Brief description for your soko Item. URLs are
                                        hyperlinked.</p>
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
                                    <select id="status" name="status" autocomplete="status"
                                        class="mt-1 block w-full rounded-md border border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                                        <option value="1">Available</option>
                                        <option value="0">Unavailable</option>
                                    </select>
                                    <p class="mt-2 text-md text-gray-500">Item status</p>
                                </div>
                                {{-- <div class="col-span-6 flex justify-start mt-5">
                                    <div class="mb-3 w-96">
                                        <label for="upload-multiple"
                                            class="form-label inline-block mb-2 text-gray-700">Image</label>
                                        <input accept=".png, .jpg, .jpeg" class="" type="file" name="images[]"
                                            id="upload-multiple" multiple required>
                                    </div>
                                </div> --}}

                            </div>
                        </div>
                        <input type="file" class="filepond" name="images" multiple data-max-file-size="3MB"
                            data-max-files="3" />
                        <div class="bg-gray-50 px-4 py-3 text-left sm:px-6">
                            <button type="submit"
                                class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


    {{-- Add Section modal --}}

    <div id="addSectionModal" class="modal text-gray-700">
        <div class="px-4 mb-5 sm:px-0">
            <h3 class="text-lg font-medium leading-6 text-gray-700">Add New Soko Section</h3>
            <p class="mt-1 text-sm text-gray-700">add a new soko Section to the Database.</p>
        </div>
        <form action="{{ Route('soko_sections') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="col-span-6 sm:col-span-3">
                <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                <input type="text" name="name" id="name" autocomplete="name"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                    required>
            </div>
            <div class="col-span-6 flex justify-start mt-5">
                <div class="mb-3 w-96">
                    <label for="formFile" class="form-label inline-block mb-2 text-gray-700">Thumbnail</label>
                    <input accept=".png, .jpg, .jpeg"
                        class="form-control
                  block
                  w-full
                  px-3
                  py-1.5
                  text-base
                  font-normal
                  text-gray-700
                  bg-white bg-clip-padding
                  border border-solid border-gray-300
                  rounded
                  transition
                  ease-in-out
                  m-0
                  focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                        type="file" name="thumbnail" id="formFile">
                </div>
            </div>
            <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
                <button type="submit"
                    class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Save</button>
            </div>
        </form>
    </div>

    {{-- Add Category Modal --}}
    <div id="addCategoryModal" class="modal text-gray-700">
        <div class="px-4 mb-5 sm:px-0">
            <h3 class="text-lg font-medium leading-6 text-gray-700">Add New Soko Category</h3>
            <p class="mt-1 text-sm text-gray-700">add a new soko Category to the Database.</p>
        </div>
        <form action="{{ Route('soko_categories') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="col-span-6 sm:col-span-3">
                <label for="section" class="block text-sm font-medium text-gray-700">Section</label>
                <select id="section" name="section_id" autocomplete="section"
                    class="mt-1 block w-full rounded-md border border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                    @foreach ($sections as $section)
                        <option value="{{ $section->id }}">{{ $section->name }}</option>
                    @endforeach
                </select>
                <p class="mt-2 text-md text-gray-500"><a href="#addSectionModal" rel="modal:open">Add New Section</a></p>
            </div>
            <div class="col-span-6 sm:col-span-3">
                <label for="category-name" class="block text-sm font-medium text-gray-700">Name</label>
                <input type="text" name="name" id="category-name" autocomplete="category-name"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                    required>
            </div>
            <div class="col-span-6 flex justify-start mt-5">
                <div class="mb-3 w-96">
                    <label for="formFile" class="form-label inline-block mb-2 text-gray-700">Category Thumbnail</label>
                    <input accept=".png, .jpg, .jpeg"
                        class="form-control
                  block
                  w-full
                  px-3
                  py-1.5
                  text-base
                  font-normal
                  text-gray-700
                  bg-white bg-clip-padding
                  border border-solid border-gray-300
                  rounded
                  transition
                  ease-in-out
                  m-0
                  focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                        type="file" name="thumbnail" id="formFile">
                </div>
            </div>
            <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
                <button type="submit"
                    class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Save</button>
            </div>
        </form>
    </div>


    <!-- Main Quill library -->
    <script src="//cdn.quilljs.com/1.3.6/quill.js"></script>
    {{-- <script src="//cdn.quilljs.com/1.3.6/quill.min.js"></script> --}}
    <script>
        var quill = new Quill('#editor-container', {
            modules: {
                toolbar: [
                    [{
                        header: [1, 2, false]
                    }],
                    ['bold', 'italic', 'underline', 'blockquote', 'indent', 'list', 'size'],
                    ['color', 'code-block']
                ]
            },
            placeholder: 'Compose an epic...',
            theme: 'snow' // or 'bubble'
        });
        var form = document.getElementById('item-form');
        form.onsubmit = function() {
            //     var description = document.querySelector('input[name=description]');
            //   description.value = JSON.stringify(quill.getText());
            $("#description").val(quill.root.innerHTML);
        }
    </script>
@endsection
