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
