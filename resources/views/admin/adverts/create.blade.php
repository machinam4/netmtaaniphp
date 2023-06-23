@extends('admin.base')
@section('content')
    <div class="mt-2 sm:mt-0 bg-gray-100 shadow rounded-2xl">
        <div class="">
            <div class="md:col-span-1">
                <div class="px-4 sm:px-0">
                    <h3 class="text-lg font-medium  leading-6">Create Advert</h3>
                </div>
            </div>
            <div class="mt-5 md:col-span-2 md:mt-0">
                <form action="{{ Route('advert_save') }}" method="POST" id="Advert-form" enctype="multipart/form-data">
                    @csrf
                    <div class="overgray-500 flow-hidden shadow sm:rounded-md">
                        <div class="px-4 py-5 sm:p-6">
                            <div class="grid grid-cols-6 gap-6 text-gray-700">
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="advert_no" class="block text-sm font-medium text-gray-700">Advert
                                        ID</label>
                                    <input type="text" name="advert_no" id="advert_no" autocomplete="advert_no"
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
                                    <label for="type" class="block text-sm font-medium text-gray-700">Type</label>
                                    <select id="type" name="type" autocomplete="category_id"
                                        class="mt-1 block w-full rounded-md border border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                                        <option value="image" selected>Image</option>
                                        <option value="video">Video</option>
                                        <option value="link">Link</option>
                                    </select>
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="owner" class="block text-sm font-medium text-gray-700">Owner</label>
                                    <input type="text" name="owner" id="last-name" autocomplete="owner"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                        required>
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="start_date" class="block text-sm font-medium text-gray-700">Start
                                        Date</label>
                                    <input type="date" name="start_date" id="first-name" autocomplete="start_date"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                        required>
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="end_date" class="block text-sm font-medium text-gray-700">End
                                        Date</label>
                                    <input type="date" name="end_date" id="first-name" autocomplete="end_date"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                        required>
                                </div>



                                <div class="col-span-6 sm:col-span-3">
                                    <label for="position" class="block text-sm font-medium text-gray-700">Position</label>
                                    <input type="number" min="0" name="position" id="position"
                                        autocomplete="position"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                        required>
                                </div>
                                <div class="col-span-6 sm:col-span-3 hidden" id="advLink">
                                    <label for="link" class="block text-sm font-medium text-gray-700">Link</label>
                                    <input type="text" name="link" id="Link" autocomplete="link"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="duration" class="block text-sm font-medium text-gray-700">Duration</label>
                                    <input type="number" min="1" name="duration" id="first-name"
                                        autocomplete="duration"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                        required>
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
                                    <select id="status" name="status" autocomplete="status"
                                        class="mt-1 block w-full rounded-md border border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                                        <option value="1">Active</option>
                                        <option value="0">Disabled</option>
                                    </select>
                                </div>
                                <div class="col-span-6 flex justify-start mt-2" id="adImage">
                                    <div class="mb-3 w-full">
                                        <label for="filepond"
                                            class="form-label inline-block mb-2 text-gray-700">Image</label>
                                        <input accept=".png, .jpg, .jpeg" class="filepond" type="file" name="image"
                                            id="filepond" data-allow-reorder="true">
                                    </div>
                                </div>

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
    <script>
        $('#type').on('change', function(e) {
            adType = e.target.value
            if (adType === 'image') {
                $('#adImage').removeClass('hidden')
                $('#advLink').addClass('hidden')
                $('#Link').removeAttr('required');
                $('#filepond').attr('required', true);
                document.querySelector('input[name="image"]').setAttribute('accept', ".png, .jpg, .jpeg")
            } else if (adType === 'video') {
                $('#adImage').removeClass('hidden')
                $('#advLink').addClass('hidden')
                $('#Link').removeAttr('required');
                $('#filepond').attr('required', true);
                document.querySelector('input[name="image"]').setAttribute('accept', ".mp4, .webm, .ogg")
            } else if (adType === 'link') {
                $('#adImage').addClass('hidden')
                $('#advLink').removeClass('hidden')
                $('#filepond').removeAttr('required');
                $('#Link').attr('required', true);
            }
        })
    </script>
@endsection
