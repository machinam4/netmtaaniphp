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
            <p class="mt-2 text-md text-gray-500"><a href="#addSectionModal" rel="modal:open">Add New Section</a>
            </p>
        </div>
        <div class="col-span-6 sm:col-span-3">
            <label for="category-name" class="block text-sm font-medium text-gray-700">Name</label>
            <input type="text" name="name" id="category-name" autocomplete="category-name"
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                required>
        </div>
        <div class="col-span-6 flex justify-start mt-5">
            <div class="mb-3 w-96">
                <label for="formFile" class="form-label inline-block mb-2 text-gray-700">Category
                    Thumbnail</label>
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
